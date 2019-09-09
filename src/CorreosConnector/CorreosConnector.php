<?php

namespace CorreosSdk\CorreosConnector;

use CorreosSdk\ServiceType\Documentacion;

use InvalidArgumentException;
use CorreosSdk\ServiceType\Pre;
use CorreosSdk\ServiceType\Anular;
use CorreosSdk\Factories\Shipment;
use CorreosSdk\ServiceType\Modificar;
use CorreosSdk\ServiceType\Solicitud;
use CorreosSdk\StructType\PeticionAnular;
use CorreosSdk\StructType\PreregistroEnvio;
use CorreosSdk\StructType\SolicitudEtiqueta;
use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\StructType\PeticionModificar;
use CorreosSdk\StructType\SolicitudEtiquetaExp;
use CorreosSdk\Factories\SenderUnitedIdentity;
use CorreosSdk\StructType\SolicitudDocumentacionAduanera;
use CorreosSdk\StructType\SolicitudDocumentacionAduaneraCN23CP71;

class CorreosConnector
{
    CONST XML_TYPE_REQUEST = "1";

    const PDF_TYPE_REQUEST = "2";

    const CANCEL_STATUS_CODES = [
        '67' => 'The item has not been pre-registered',
        '66' => 'The item has already been cancelled.',
        '65' => 'The item has already been admitted.',
        '197' => 'The client and the contract do not belong to the user requesting the operation.'
    ];

    /**
     * @var CorreosConfig
     */
    private $correosConfig;

    /**
     * @var SenderUnitedIdentity
     */
    private $senderUnitedIdentity;

    /**
     * CorreosConnector constructor.
     * @param CorreosConfig $correosConfig
     * @param SenderUnitedIdentity $senderUnitedIdentity
     */
    public function __construct(CorreosConfig $correosConfig, SenderUnitedIdentity $senderUnitedIdentity = null)
    {
        $this->correosConfig = $correosConfig;
        $this->senderUnitedIdentity = $senderUnitedIdentity;
    }

    /**
     * @param SenderUnitedIdentity $senderUnitedIdentity
     */
    public function setSenderUnitedIdentity(SenderUnitedIdentity $senderUnitedIdentity): void
    {
        $this->senderUnitedIdentity = $senderUnitedIdentity;
    }

    /**
     * @param Shipment $invoice
     * @return Shipment
     * @throws CorreosException
     */
    public function createShipment(Shipment $shipment): Shipment
    {

        try {
            $createOptions = new Pre($this->correosConfig->getOptions()); // BUILD OBJECT

            $registerData = new PreregistroEnvio(
                (new \DateTime('now'))->format('d-m-Y H:m:s'), // CURRENT TIME,
                $this->correosConfig->getClientCode(),
                $this->correosConfig->getClientContractNumber(),
                $this->correosConfig->getClientNumber(),
                $this->correosConfig->getCare(),
                CorreosConfig::TOTAL_BULTOS,
                self::XML_TYPE_REQUEST,
                $this->senderUnitedIdentity->buildSenderIdentity(),
                $shipment->getReceiverUnitedIdentity()->buildReceiverIdentity(),
                $shipment->getSendingContent()->buildSendingContent(),
                null,
                null,
                null
            );
            $response = $createOptions->PreRegistro($registerData); // SOAP REQUEST

        } catch (InvalidArgumentException $exception) {
            throw new CorreosException($exception->getMessage() . " _ " . $exception->getTraceAsString(), $exception->getCode(), $exception->getPrevious());
        }

        $this->checkMethodException($response);

        $shipment->setResponse($response);

        $shipment->setTrackNumber($response->CodExpedicion);

        $shipment->setDateRequest(new \DateTime($response->FechaRespuesta));

        return $shipment;
    }

    /**
     * @param string $trackNumber
     * @param \DateTime $shipDateRequest
     * @return string
     * @throws CorreosException
     */
    public function printLabel(string $trackNumber, \DateTime $shipDateRequest = null): string
    {
        $documentationService = new Solicitud($this->correosConfig->getOptions());

        $labelData = new SolicitudEtiqueta(
            !empty($shipDateRequest) ? $shipDateRequest->format('d-m-y H:i:s') : null,
            $this->correosConfig->getClientCode(),
            $this->correosConfig->getClientContractNumber(),
            $this->correosConfig->getClientNumber(),
            $trackNumber,
            $this->correosConfig->getCare(),
            self::PDF_TYPE_REQUEST
        );

        $response = $documentationService->SolicitudEtiquetaOp($labelData);

        if ($response->getResultado() == 1) {
            throw new CorreosException("Shipment with track number " . $trackNumber . " not found");
        }

        return !empty($response->Bulto) ? $response->Bulto->Etiqueta->Etiqueta_pdf->Fichero : "";
    }

    /**
     * @param string $trackNumber
     * @param \DateTime $shipDateRequest
     * @return string
     * @throws CorreosException
     */
    public function printExpeditionLabel(string $trackNumber, \DateTime $shipDateRequest = null): string
    {
        $documentationService = new Solicitud($this->correosConfig->getOptions());

        $labelData = new SolicitudEtiquetaExp(
            !empty($shipDateRequest) ? $shipDateRequest->format('d-m-y H:i:s') : null,
            $this->correosConfig->getClientCode(),
            $this->correosConfig->getClientContractNumber(),
            $this->correosConfig->getClientNumber(),
            $trackNumber,
            $this->correosConfig->getCare(),
            self::PDF_TYPE_REQUEST
        );
        $response = $documentationService->SolicitudEtiquetaExpOp($labelData);

        return !empty($response->Bulto) ? $response->Bulto->Etiqueta->Etiqueta_pdf->Fichero : "";
    }


    /**
     *
     * @param string $type
     * @param string $countryIso
     * @param string $numberOfShippings
     * @param string $companyName
     * @param string $province
     * @return string|null
     */
    public function printCustomsDocument(string $type, string $countryIso, string $numberOfShippings, string $companyName, string $province = ''): ?string
    {
        $documentationService = new Documentacion($this->correosConfig->getOptions());

        $documentData = new SolicitudDocumentacionAduanera(
            $type,
            $this->correosConfig->getClientContractNumber(),
            $this->correosConfig->getClientNumber(),
            $this->correosConfig->getClientCode(),
            $province,
            $countryIso,
            $companyName,
            $numberOfShippings
        );

        $response = $documentationService->DocumentacionAduaneraOp($documentData);

        return !empty($response->Fichero) ? $response->Fichero : "";

    }

    /**
     * @param $trackNumber
     * @return string
     */
    public function printCustomDocumentCN23CP71(string $trackNumber)
    {
        $documentationService = new Documentacion($this->correosConfig->getOptions());

        $documentData = new SolicitudDocumentacionAduaneraCN23CP71(
            $trackNumber
        );

        $response = $documentationService->DocumentacionAduaneraCN23CP71Op($documentData);

        return !empty($response->Fichero) ? $response->Fichero : "";
    }

    /**
     * @param string $trackNumber
     * @return bool
     * @throws CorreosException
     */
    public function cancelShipment(string $trackNumber): bool
    {
        $cancelService = new Anular($this->correosConfig->getOptions());

        $cancelData = new PeticionAnular($trackNumber);

        $response = $cancelService->AnularOp($cancelData);

        if (!empty($response->ErroresValidacion->ErrorVal)) {
            $errorCode = $response->ErroresValidacion->ErrorVal->Error;
            throw new CorreosException(self::CANCEL_STATUS_CODES[$errorCode]);
        }

        return true;
    }

    /**
     * @param Shipment $invoice
     * @param string $trackNumber
     * @return Shipment
     * @throws CorreosException
     */
    public function updateShipment(Shipment $invoice, string $trackNumber): Shipment
    {
        try {
            $updateService = new Modificar($this->correosConfig->getOptions());
            $updateData = new PeticionModificar(
                $trackNumber,
                $invoice->getDateRequest()->format('d-m-y H:i:s'),
                $this->correosConfig->getClientCode(),
                $this->correosConfig->getClientContractNumber(),
                $this->correosConfig->getClientNumber(),
                $this->correosConfig->getCare(),
                CorreosConfig::TOTAL_BULTOS,
                self::XML_TYPE_REQUEST,
                $this->senderUnitedIdentity->buildUpdateSenderIdentity(),
                $invoice->getReceiverUnitedIdentity()->buildUpdateReceiverIdentity(),
                $invoice->getSendingContent()->buildUpdateSendingContent()
            );
            $response = $updateService->ModificarOp($updateData);

            $invoice->setResponse($response);

        } catch (InvalidArgumentException $exception) {
            throw new CorreosException($exception->getMessage() . " _ " . $exception->getTraceAsString(), $exception->getCode(), $exception->getPrevious());
        }

        return $invoice;
    }

    /**
     * @param $response
     * @throws CorreosException
     */
    public function checkMethodException($response)
    {
        if (!empty($response->BultoError)) {
            throw new CorreosException($response->BultoError->DescError);
        }
    }
}