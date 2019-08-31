<?php

namespace CorreosSdk\CorreosConnector;

use CorreosSdk\MainComponents\Invoice;
use CorreosSdk\MainComponents\SenderUnitedIdentity;
use CorreosSdk\ServiceType\Pre;
use CorreosSdk\ServiceType\Solicitud;
use CorreosSdk\StructType\ADUANATYPE;
use CorreosSdk\StructType\DATOSADUANATYPE;
use CorreosSdk\StructType\DATOSDESTINATARIOTYPE;
use CorreosSdk\StructType\DATOSENVIOTYPE;
use CorreosSdk\StructType\DATOSREMITENTETYPE;
use CorreosSdk\StructType\DescAduanera;
use CorreosSdk\StructType\DIRECCIONTYPE;
use CorreosSdk\StructType\IDENTIFICACIONTYPE;
use CorreosSdk\StructType\Pesos;
use CorreosSdk\StructType\PESOTYPE;
use CorreosSdk\StructType\PreregistroEnvio;
use CorreosSdk\StructType\SolicitudEtiqueta;

class CorreosConnector
{
    CONST XML_TYPE_REQUEST = "1";

    const PDF_TYPE_REQUEST = "2";

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

//    public function printReceipt()
//    {
//        $documentationService = new Solicitud($this->correosConfig->getOptions());
//        $codEtiquetador = "69RH"; // CLIENT CODE
//        $numCliente = "81099174"; // CLIENT NUMBER
//        $numContrator = "54034824"; // CLIENT CONTRACT NUMBER
//        $care = "000000"; // insurance
//
//        $SolicitudEtiqueta = new SolicitudEtiqueta(
//            "27-08-2019 06:24:00",
//            $codEtiquetador,
//            $numContrator,
//            $numCliente,
//            "LX403740086ES",
//            $care,
//            "2"
//        );
//
//        $result = $documentationService->SolicitudEtiquetaOp($SolicitudEtiqueta);
//        $file = $result->Bulto->Etiqueta->Etiqueta_pdf->Fichero;
//
//        return $file;
//    }


    public function createShipment(Invoice $invoice)
    {

//        // RECEIVER
//        $destinatarioIdentifcacion = new IDENTIFICACIONTYPE(null);
//        $destinatarioIdentifcacion->setNombre('Antonio');
//        $destinatarioDatosDireccion = new DIRECCIONTYPE(
//            null,
//            "Bichurina",
//            "11",
//            null,
//            null,
//            null,
//            null,
//            null,
//            "Kazan",
//            "Tatarstan"
//        );
//
//        $destinatario = new DATOSDESTINATARIOTYPE(
//            $destinatarioIdentifcacion,
//            $destinatarioDatosDireccion,
//            null,
//            null,
//            "423000",
//            "RU",
//            null,
//            null,
//            "879377790921",
//            "admin@kazanworkout.ru",
//            null
//        );

        $peso = new PESOTYPE("R", "600");
        $pesos = new Pesos([$peso]);


        // PRODUCTS TO SHIPPING
        $envio = new DATOSENVIOTYPE(
            null, // discount
            null, // delivery mode
            null,
            "30",
            "15",
            "1",
            null,
            null,
            null,
            null,
            null,
            null,
            "A",
            new ADUANATYPE(
                "2",
                "S",
                null,
                null,
                new DescAduanera(
                    [
                        new DATOSADUANATYPE(
                            "1",
                            "83",
                            "200",
                            "10",
                            null,
                            null
                        )
                    ]
                ),
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null
            ),
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );

        $envio->setCodProducto("S0360"); // SET TARIFF
        $envio->setReferenciaCliente("JVB000001");
        $envio->setTipoFranqueo("FP");
        $envio->setModalidadEntrega("ST");
        $envio->setPesos($pesos);

        $preRegistroEnvio = new PreregistroEnvio(
            (new \DateTime('now'))->format('d-m-Y H:m:s'), // CURRENT TIME,
            $this->correosConfig->getClientCode(),
            $this->correosConfig->getClientContractNumber(),
            $this->correosConfig->getClientNumber(),
            $this->correosConfig->getCare(),
            CorreosConfig::TOTAL_BULTOS,
            self::XML_TYPE_REQUEST,
            $this->senderUnitedIdentity->buildSenderIdentity(),
            $invoice->getReceiverUnitedIdentity()->buildReceiverIdentity(),
            $envio,
            null,
            null,
            null
        );
        $pre = new Pre($this->correosConfig->getOptions()); // BUILD OBJECT
        $result = $pre->PreRegistro($preRegistroEnvio); // SOAP REQUEST

        echo "<pre>";
        var_dump($result);
        die;

        echo "<pre>";

        return $result;
    }

}