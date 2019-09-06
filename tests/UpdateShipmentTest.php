<?php


namespace CorreosSdk\Tests;

use CorreosSdk\Factories\Address;
use CorreosSdk\Factories\Identification;
use CorreosSdk\Factories\Shipment;
use CorreosSdk\Factories\PackageSize;
use CorreosSdk\Factories\ProductDescription;
use CorreosSdk\Factories\ProductList;
use CorreosSdk\Factories\ReceiverUnitedIdentity;
use CorreosSdk\Factories\SendingContent;
use CorreosSdk\Factories\SendingInsides;
use Matomo\Ini\IniReader;

class UpdateShipmentTest extends InitTest
{
    public function testUpdateShipment()
    {
//        $config = (new IniReader())->readFile(__DIR__ . '/config.ini');
//        $correosConfig = new CorreosConfig(
//            "w81099174",
//            "6pjUqAw4",
//            "69RH",
//            'prod');
//        $correosConfig->setClientContractNumber("54034824");
//        $correosConfig->setClientNumber("81099174");
//
//        $senderAddress = new Address(
//            $config['sender_city_name'],
//            $config['sender_street_name'],
//            $config['sender_province_name'],
//            $config['sender_street_number'],
//            null,
//            "C",
//            null,
//            null,
//            $config['sender_street_floor']
//        );
//        $senderIdentification = new Identification(
//            $config['sender_name']
//        );
//        $senderUnitedIdentity = new SenderUnitedIdentity(
//            $senderAddress,
//            $senderIdentification,
//            $config['sender_post_code']
//        );
//
//        $this->client = new CorreosConnector($correosConfig, $senderUnitedIdentity);

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

        $createdShipment = $this->client->createShipment($shipment);

        $totalPrice = 60000;

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

        $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);

        $shipment->setDateRequest($createdShipment->getDateRequest());

        $shipment = $this->client->updateShipment($shipment, $createdShipment->getClippedTrackNumber());

        $responseUpdate = $shipment->getResponse();

        $updatedPhone = $responseUpdate->Bulto->Etiqueta->Etiqueta_xml->DestinatarioEtiqueta->Telefono;
        $zip = $responseUpdate->Bulto->Etiqueta->Etiqueta_xml->DestinatarioEtiqueta->ZIP;

        $this->assertEquals($updatedPhone, $receiverUnitedIdentity->getReceiverPhone());
        $this->assertEquals($zip, $receiverUnitedIdentity->getInternationalPostcode());

    }
}