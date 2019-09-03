<?php

namespace CorreosSdk\Tests;

use Matomo\Ini\IniReader;
use PHPUnit\Framework\TestCase;
use CorreosSdk\CorreosConnector\{CorreosConfig, CorreosConnector};
use CorreosSdk\Factories\ {Address,
    Identification,
    Invoice,
    PackageSize,
    ProductDescription,
    ProductList,
    ReceiverUnitedIdentity,
    SenderUnitedIdentity,
    SendingContent,
    SendingInsides
};


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
            $config['sender_first_name'],
            $config['sender_second_name'],
            $config['sender_company_name'],
            $config['sender_name']
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

    protected function createShipment() : Invoice
    {
        $totalPrice = 5000.32;
        $totalPrice = $totalPrice * 100;
        $receiverAddress = new Address(
            "TEST CITY NAME",
            "TEST STREET NAME",
            "TEST NAME",
            "20"
        );
        $receiverIdentity = new Identification(
            "TEST TEST",
            null,
            null,
            null,
            null
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
            500
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

        $createdInvoice = $this->client->createShipment($invoice);

        return $createdInvoice;
    }

}