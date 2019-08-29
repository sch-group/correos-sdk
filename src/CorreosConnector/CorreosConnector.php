<?php

namespace CorreosSdk\CorreosConnector;

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
    /**
     * @var CorreosConfig
     */
   private $correosConfig;

    /**
     * CorreosConnector constructor.
     * @param CorreosConfig $correosConfig
     */
    public function __construct(CorreosConfig $correosConfig)
    {
        $this->correosConfig = $correosConfig;
    }

    public function printReceipt()
    {
        $documentationService = new Solicitud($this->correosConfig->getOptions());
        $codEtiquetador = "69RH"; // CLIENT CODE
        $numCliente = "81099174"; // CLIENT NUMBER
        $numContrator = "54034824"; // CLIENT CONTRACT NUMBER
        $care = "000000"; // insurance

        $SolicitudEtiqueta = new SolicitudEtiqueta(
            "27-08-2019 06:24:00",
            $codEtiquetador,
            $numContrator,
            $numCliente,
            "LX403740086ES",
            $care,
            "2"
        );

        $result = $documentationService->SolicitudEtiquetaOp($SolicitudEtiqueta);
        $file = $result->Bulto->Etiqueta->Etiqueta_pdf->Fichero;

        return $file;
    }


    public function createShipment()
    {
        $date = (new \DateTime('now'))->format('d-m-Y H:m:s'); // CURRENT TIME
        $codEtiquetador = "XXX1"; // CLIENT CODE
        $numCliente = "81099174"; // CLIENT NUMBER
        $numContrator = "54034824"; // CLIENT CONTRACT NUMBER
        $care = "000000"; // insurance

        // SENDER
        $remitenteDireccion = "VIA DUBLIN 7";
        $remitenteNumero = "42";
        $remitenteLocalidad = "MADRID";
        $remitenteProvincia = "MADRID";
        $remitenteCP = "28001"; // POST code
        $remitenteIdentifcacion = new IDENTIFICACIONTYPE(null);
        $remitenteIdentifcacion->setApellido1("Maynovsky");
        $remitenteIdentifcacion->setNombre("Marat");


        $remitenteIdentifcacion = new IDENTIFICACIONTYPE(null);
        $remitenteIdentifcacion->setApellido1("Maynovsky");
        $remitenteIdentifcacion->setNombre("Marat");


        $remitenteDatosDireccion = new DIRECCIONTYPE(
            null,
            $remitenteDireccion,
            $remitenteNumero,
            null,
            null,
            null,
            null,
            null,
            $remitenteLocalidad,
            $remitenteProvincia
        );


        // SENDER
        $remitente = new DATOSREMITENTETYPE(
            $remitenteIdentifcacion,
            $remitenteDatosDireccion,
            $remitenteCP,
            null,
            null,
            "test@example.com",
            null
        );

        // RECEIVER
        $destinatarioIdentifcacion = new IDENTIFICACIONTYPE(null);
        $destinatarioIdentifcacion->setNombre('Antonio');
        $destinatarioDatosDireccion = new DIRECCIONTYPE(
            null,
            "Bichurina",
            "11",
            null,
            null,
            null,
            null,
            null,
            "Kazan",
            "Tatarstan"
        );

        $destinatario = new DATOSDESTINATARIOTYPE(
            $destinatarioIdentifcacion,
            $destinatarioDatosDireccion,
            null,
            null,
            "423000",
            "RU",
            null,
            null,
            "879377790921",
            "admin@kazanworkout.ru",
            null
        );

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
            $date,
            $codEtiquetador,
            $numContrator,
            $numCliente,
            $care,
            "1",
            "1",
            $remitente,
            $destinatario,
            $envio,
            null,
            null,
            null
        );
        $pre = new Pre($this->correosConfig->getOptions()); // BUILD OBJECT
        $result = $pre->PreRegistro($preRegistroEnvio); // SOAP REQUEST

        echo "<pre>";
        var_dump($result); die;

        echo "<pre>";

        return $result;
    }

}