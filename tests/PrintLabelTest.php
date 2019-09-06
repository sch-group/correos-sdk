<?php


namespace CorreosSdk\Tests;

use CorreosSdk\Exceptions\CorreosException;

class PrintLabelTest extends InitTest
{


    public function testPrinting()
    {
        $invoice = $this->createShipment();

        $trackNumber = $invoice->getClippedTrackNumber();

        $dateTime = $invoice->getDateRequest();

        $dateTime = new \DateTime('tomorrow');

        $labelPdfByteCode = $this->client->printLabel($trackNumber, null);

        $this->assertTrue(strlen($labelPdfByteCode) > 3);

    }

    /**
     * @expectedException \CorreosSdk\Exceptions\CorreosException
     */
    public function testfailedPrinting()
    {
        $shipment = $this->createShipment();

        $trackNumber = $shipment->getTrackNumber();

        $dateTime = new \DateTime('tomorrow');

        $labelPdfByteCode = $this->client->printLabel($trackNumber, $dateTime);

        $this->assertTrue(strlen($labelPdfByteCode) > 3);

        $this->expectException(CorreosException::class);

    }

    public function testPrintCustomDocument()
    {

        $typeDocument = "DDP"; // DCAF
        $countryIso = "RU";
        $numberOfShipments = "2";
        $companyName = "test";

        $documentCode = $this->client->printCustomsDocument($typeDocument, $countryIso, $numberOfShipments, $companyName);

        $this->assertTrue(strlen($documentCode) > 3);
    }

    public function testCustomDocumentCN23CP71()
    {
        $invoice = $this->createShipment();

        $trackNumber = $invoice->getClippedTrackNumber();

        $documentCode = $this->client->printCustomDocumentCN23CP71($trackNumber);

        $this->assertTrue(strlen($documentCode) > 3);

    }

    public function testExpeditionPrint()
    {
        $invoice = $this->createShipment();

        $trackNumber = $invoice->getTrackNumber();

//        $labelPdfByteCode = $this->client->printExpeditionLabel($trackNumber, $invoice->getDateRequest());
    }
}