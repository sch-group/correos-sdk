<?php

namespace CorreosSdk\CorreosConnector;

use InvalidArgumentException;
use CorreosSdk\ServiceType\Anular;
use CorreosSdk\ServiceType\Modificar;
use CorreosSdk\StructType\PeticionAnular;
use CorreosSdk\StructType\PeticionModificar;
use CorreosSdk\ServiceType\Pre;
use CorreosSdk\Factories\Shipment;
use CorreosSdk\ServiceType\Solicitud;
use CorreosSdk\StructType\PreregistroEnvio;
use CorreosSdk\StructType\SolicitudEtiqueta;
use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\Factories\SenderUnitedIdentity;

class CorreosConnector
{
    CONST XML_TYPE_REQUEST = "1";

    const PDF_TYPE_REQUEST = "2";

    const CANCEL_STATUS_CODES = [
        '67' => 'The item has not been pre-registered',
        '66' => 'The item has already been cancelled.',
        '65' => 'The item has already been admitted.'
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
    public function __construct(CorreosConfig $correosConfig, SenderUnitedIdentity $senderUnitedIdentity)
    {
        $this->correosConfig = $correosConfig;
        $this->senderUnitedIdentity = $senderUnitedIdentity;
    }

    /**
     * @param Shipment $invoice
     * @return Shipment
     * @throws CorreosException
     */
    public function createShipment(Shipment $invoice): Shipment
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
                $invoice->getReceiverUnitedIdentity()->buildReceiverIdentity(),
                $invoice->getSendingContent()->buildSendingContent(),
                null,
                null,
                null
            );
            $response = $createOptions->PreRegistro($registerData); // SOAP REQUEST

            $invoice->setResponse($response);

        } catch (InvalidArgumentException $exception) {
            throw new CorreosException($exception->getMessage() . " _ " . $exception->getTraceAsString(), $exception->getCode(), $exception->getPrevious());
        }

        $this->checkMethodException($response);

        $invoice->setTrackNumber($response->CodExpedicion);

        $invoice->setDateRequest(new \DateTime($response->FechaRespuesta));

        return $invoice;
    }

    /**
     * @param string $trackNumber
     * @param \DateTime $shipDateRequest
     * @return string
     * @throws CorreosException
     */
    public function printLabel(string $trackNumber, \DateTime $shipDateRequest): string
    {
        $documentationService = new Solicitud($this->correosConfig->getOptions());

        $labelData = new SolicitudEtiqueta(
            $shipDateRequest->format('d-m-y H:i:s'),
            $this->correosConfig->getClientCode(),
            $this->correosConfig->getClientContractNumber(),
            $this->correosConfig->getClientNumber(),
            $trackNumber,
            $this->correosConfig->getCare(),
            self::PDF_TYPE_REQUEST
        );

        $response = $documentationService->SolicitudEtiquetaOp($labelData);

        if($response->getResultado() == 1) {
            throw new CorreosException("Shipment with track number " . $trackNumber . " not found");
        }

        return !empty($response->Bulto) ? $response->Bulto->Etiqueta->Etiqueta_pdf->Fichero : "";
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
     * @return Shipment
     * @throws CorreosException
     */
    public function updateShipment(Shipment $invoice): Shipment
    {
        try {
            $updateService = new Modificar($this->correosConfig->getOptions());
            $updateData = new PeticionModificar(
                $invoice->getClippedTrackNumber(),
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