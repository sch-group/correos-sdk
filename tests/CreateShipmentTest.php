<?php


namespace CorreosSdk\Tests;


use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\Factories\Address;
use CorreosSdk\Factories\Identification;
use CorreosSdk\Factories\PackageSize;
use CorreosSdk\Factories\ProductDescription;
use CorreosSdk\Factories\ProductList;
use CorreosSdk\Factories\ReceiverUnitedIdentity;
use CorreosSdk\Factories\SendingContent;
use CorreosSdk\Factories\SendingInsides;
use CorreosSdk\Factories\Shipment;

class CreateShipmentTest extends InitTest
{
    public function testCreateShipment()
    {
        $shipment = $this->createShipment();

        $invoiceNumber = $shipment->getTrackNumber();

        $this->assertNotEmpty($invoiceNumber);

        $this->assertTrue(strlen($invoiceNumber) > 3);

    }

    /**
     * @expectedException \CorreosSdk\Exceptions\CorreosException
     */
    public function testCreateShipmentException()
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
            "TEST TEST"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "423",
            "RU",
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

        $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);

        $createdShipment = $this->client->createShipment($shipment);

        $this->expectException(CorreosException::class);

    }

    /**
     * @expectedException \CorreosSdk\Exceptions\CorreosException
     */
    public function testFailShipmentException()
    {
        $totalPrice = 5000.32;
        $totalPrice = $totalPrice * 100;
        $receiverAddress = new Address(
            "Barcelona",
            "Delpotro street",
            "Catalonia",
            "dfg"
        );
        $receiverIdentity = new Identification(
            "Ainuro Mainurio"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "42300", // must be less than < 6
            "RU",
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
            SendingInsides::GOODS_CONTENT_TYPE, // GOODS,
            SendingInsides::YES_CHOICE, // Y
            SendingInsides::YES_CHOICE,
            $productList,
            SendingInsides::NO_CHOICE
        );

        $packageSize = new PackageSize(
            10,
            10,
            10,
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

        $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);

        $createdShipment = $this->client->createShipment($shipment);

        $this->expectException(CorreosException::class);
    }
}