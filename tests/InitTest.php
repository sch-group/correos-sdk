<?php

namespace CorreosSdk\Tests;

use CorreosSdk\ClassMap;
use CorreosSdk\Client\SoapClient;
use CorreosSdk\CorreosConnector\CorreosConfig;
use CorreosSdk\CorreosConnector\CorreosConnector;
use CorreosSdk\MainComponents\Address;
use CorreosSdk\MainComponents\Identification;
use CorreosSdk\MainComponents\Invoice;
use CorreosSdk\MainComponents\ReceiverUnitedIdentity;
use CorreosSdk\MainComponents\SenderIdentification;
use CorreosSdk\MainComponents\SenderUnitedIdentity;
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
use Matomo\Ini\IniReader;
use PHPUnit\Framework\TestCase;

class InitTest extends TestCase
{

    /** @var CorreosConnector $client */
    protected $client;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $config = (new IniReader())->readFile(__DIR__ . '/config.ini');
        $correosConfig = new CorreosConfig(
            $config['login'],
            $config['password'],
            $config['client_code'],
            'dev');

        $senderAddress = new Address(
            $config['sender_city_name'],
            $config['sender_street_name'],
            $config['sender_province_name'],
            $config['sender_street_number']
        );
        $senderIdentification = new Identification(
            $config['sender_name'],
            $config['sender_company_name'],
            $config['sender_name'],
            $config['sender_first_name'],
            $config['sender_second_name']
        );
        $senderUnitedIdentity = new SenderUnitedIdentity(
            $senderAddress,
            $senderIdentification,
            $config['sender_postcode'],
            $config['sender_phone'],
            $config['sender_email']
        );

        $this->client = new CorreosConnector($correosConfig, $senderUnitedIdentity);
    }

    public function testAuth()
    {
//        $byteCode = $this->client->printReceipt();
        $receiverAddress = new Address(
            "Barcelona",
            "Delpotro street",
            "Catalonia",
            "20"
        );
        $receiverIdentity = new Identification(
            "Ainuro Mainurio"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "42300", // must be less than < 6
            "423000",
            "RU",
            "89274269594",
            "ainur_ahmetgalie@mail.ru"
        );
        $invoice = new Invoice($receiverUnitedIdentity);
        $response = $this->client->createShipment($invoice);
        print_r($response);
        die();
        print_r(__DIR__);
        return;


        $date = (new \DateTime('now'))->format('d-m-Y H:m:s'); // CURRENT TIME
        $codEtiquetador = "69RH"; // CLIENT CODE
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
            "+79377790921",
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
        /*$pre = new ServiceType\Pre($options); // BUILD OBJECT
        $result = $pre->PreRegistro($preRegistroEnvio); // SOAP REQUEST

        echo "<pre>";
        var_dump($result); die;*/

//echo "<pre>";
//var_dump($result); die;
//

// CN 23
        /*$documentationService = new Documentacion($options);
        $customsResult = $documentationService->DocumentacionAduaneraCN23CP71Op($documentId);
        $documentId = new SolicitudDocumentacionAduaneraCN23CP71("LX403740280ES");*/


        $documentationService = new Solicitud($options);

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
        print_r($file);
    }

    /**
     * @param $file
     */
    function asFile($file): void
    {
        $name = 'file.pdf';
        header('Content-Type: application/pdf');
        header('Content-Length: ' . strlen($file));
        header('Content-disposition: inline; filename="' . $name . '"');
        header('Cache-Control: public, must-revalidate, max-age=0');
        header('Pragma: public');
        header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        echo $file;
    }


}