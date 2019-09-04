<?php


namespace CorreosSdk\Tests;


use CorreosSdk\CorreosConnector\CorreosConfig;
use CorreosSdk\CorreosConnector\CorreosConnector;
use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\Factories\Address;
use CorreosSdk\Factories\Identification;
use CorreosSdk\Factories\SenderUnitedIdentity;
use Matomo\Ini\IniReader;

class PrintLabelTest extends InitTest
{


    public function testPrinting()
    {
        $invoice = $this->createShipment();

        $trackNumber = $invoice->getClippedTrackNumber();

        $dateTime = $invoice->getDateRequest();

        $labelPdfByteCode = $this->client->printLabel($trackNumber, $dateTime);

        $this->assertTrue(strlen($labelPdfByteCode) > 3);

    }

    /**
     * @expectedException \CorreosSdk\Exceptions\CorreosException
     */
    public function testfailedPrinting()
    {
        $shipment = $this->createShipment();

        $trackNumber = $shipment->getTrackNumber();

        $dateTime = $shipment->getDateRequest();

        $labelPdfByteCode = $this->client->printLabel($trackNumber, $dateTime);

        $this->assertTrue(strlen($labelPdfByteCode) > 3);

        $this->expectException(CorreosException::class);

    }

}