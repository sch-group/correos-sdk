<?php

namespace CorreosSdk\Tests;

use Matomo\Ini\IniReader;
use PHPUnit\Framework\TestCase;
use CorreosSdk\CorreosConnector\{CorreosConfig, CorreosConnector};
use CorreosSdk\Factories\{Address,
    Identification,
    PackageSize,
    ProductDescription,
    ProductList,
    ReceiverUnitedIdentity,
    SenderUnitedIdentity,
    SendingContent,
    SendingInsides,
    Shipment};


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
            $config['sender_street_number'],
            null,
            "C",
            null,
            null,
            $config['sender_street_floor']
        );
        $senderIdentification = new Identification(
            $config['sender_name']
        );
        $senderUnitedIdentity = new SenderUnitedIdentity(
            $senderAddress,
            $senderIdentification,
            $config['sender_post_code']
        );

        $this->client = new CorreosConnector($correosConfig, $senderUnitedIdentity);
    }

    protected function createShipment() : Shipment
    {
        $totalPrice = 5000.32;
        $totalPrice = $totalPrice * 100;
        $receiverAddress = new Address(
            "TEST LAKEPORT",
            "TEST STREET NAME",
            "TEST NAME",
            "20"
        );
        $receiverIdentity = new Identification(
            "TEST TEST"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "48059", // must be less than < 6
            "US",
            "ainur_ahmetgalie@mail.ru",
            null,
            null
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
            SendingInsides::GOODS_CONTENT_TYPE, // GOODS,
            SendingInsides::YES_CHOICE, // Y
             SendingInsides::YES_CHOICE,
            $productList,
            SendingInsides::NO_CHOICE
        );
        $packageSize = new PackageSize(
            15,
            15,
            15,
            500
        );

        $sendingContent = new SendingContent(
            SendingContent::PAQ_LIGHT_INTERNATIONAL_TARIFF, // PAQ LIGHT INTERNATIONAL(I)
            SendingContent::POSTAGE_PAID_PAYMENT_TYPE,
            SendingContent::STANDARD_DELIVERY_MODE,
            $packageSize,
            $sendingInsides
        );

        $sendingContent->setCustomerShipmentCode("test order: 123456");

        $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);

        $createdInvoice = $this->client->createShipment($shipment);

        return $createdInvoice;
    }

}