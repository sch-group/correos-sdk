<?php

namespace CorreosSdk\Tests;

use CorreosSdk\ClassMap;
use CorreosSdk\Client\SoapClient;
use CorreosSdk\CorreosConnector\CorreosConfig;
use CorreosSdk\CorreosConnector\CorreosConnector;
use CorreosSdk\MainComponents\Address;
use CorreosSdk\MainComponents\Identification;
use CorreosSdk\MainComponents\Invoice;
use CorreosSdk\MainComponents\PackageSize;
use CorreosSdk\MainComponents\ProductDescription;
use CorreosSdk\MainComponents\ProductList;
use CorreosSdk\MainComponents\ReceiverUnitedIdentity;
use CorreosSdk\MainComponents\SenderIdentification;
use CorreosSdk\MainComponents\SenderUnitedIdentity;
use CorreosSdk\MainComponents\SendingContent;
use CorreosSdk\MainComponents\SendingInsides;
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
        $totalPrice = 5000.32;
        $totalPrice = $totalPrice * 100;
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

        $product = new ProductDescription(
            '1',
            '189',
            '200',
            '96000'
        );
        $productList = new ProductList();
        $productList->addProduct($product);

        $sendingInsides = new SendingInsides(
            "2", // GOODS,
            "S", // Y
            $totalPrice > 50000 ? "S" : null,
            $productList,
            $totalPrice > 50000 ? "N" : null
        );
        $packageSize = new PackageSize(
            15,
            15,
            15,
            "500"
        );

        $sendingContent = new SendingContent(
            SendingContent::PAQ_LIGHT_INTERNATIONAL_TARIFF, // PAQ LIGHT INTERNATIONAL(I)
            SendingContent::POSTAGE_PAID_PAYMENT_TYPE,
            SendingContent::STANDARD_DELIVERY_MODE,
            $packageSize,
            $sendingInsides
        );
        $sendingContent->setCustomerShipmentCode("order: 123456");
        $invoice = new Invoice($receiverUnitedIdentity, $sendingContent);
        $response = $this->client->createShipment($invoice);
        print_r($response);
    }

}