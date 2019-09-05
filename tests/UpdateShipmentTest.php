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

class UpdateShipmentTest extends InitTest
{
    public function testUpdateShipment()
    {
        $createdShipment = $this->createShipment();
        $totalPrice = 60000;

        $receiverAddress = new Address(
            "TEST CITY NAME",
            "TEST STREET NAME",
            "MADRIDO",
            "20"
        );
        $receiverIdentity = new Identification(
            "TEST TEST"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "42300", // must be less than < 6
            "US",
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
            $totalPrice > 50000 ? SendingInsides::YES_CHOICE : null,
            $productList,
            $totalPrice > 50000 ? SendingInsides::NO_CHOICE : null
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
        $shipment->setTrackNumber($createdShipment->getTrackNumber());
        $shipment->setDateRequest($createdShipment->getDateRequest());

        $shipment = $this->client->updateShipment($shipment);

        $responseUpdate = $shipment->getResponse();

        $updatedPhone = $responseUpdate->Bulto->Etiqueta->Etiqueta_xml->DestinatarioEtiqueta->Telefono;
        $zip = $responseUpdate->Bulto->Etiqueta->Etiqueta_xml->DestinatarioEtiqueta->ZIP;

        $this->assertEquals($updatedPhone, $receiverUnitedIdentity->getReceiverPhone());
        $this->assertEquals($zip, $receiverUnitedIdentity->getInternationalPostcode());

    }
}