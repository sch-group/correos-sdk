<?php


namespace CorreosSdk\Tests;


use CorreosSdk\CorreosConnector\CorreosConfig;
use CorreosSdk\CorreosConnector\CorreosConnector;
use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\Factories\Address;
use CorreosSdk\Factories\Identification;
use CorreosSdk\Factories\SenderUnitedIdentity;
use CorreosSdk\StructType\PeticionAnular;
use Matomo\Ini\IniReader;

class CancelShipmentTest extends InitTest
{
    /**
     * @throws \CorreosSdk\Exceptions\CorreosException
     */
    public function testCancelShipment()
    {
        $shipment = $this->createShipment();

        $trackNumber = $shipment->getClippedTrackNumber();
        echo "track number =" . $trackNumber;
        $isCancelShipment = $this->client->cancelShipment($trackNumber);

        $this->assertTrue($isCancelShipment);
    }

    /**
     * @expectedException \CorreosSdk\Exceptions\CorreosException
     */
    public function testFailedCancel()
    {
        $trackNumber = "LX055886939ESL";

        $isCancelShipment = $this->client->cancelShipment($trackNumber);

        $this->expectException(CorreosException::class);

    }

    public function testProdCancel()
    {

//        $shipment = $this->createShipment();

//        print_r($shipment->getResponse());

//        echo $trackNumber = $shipment->getClippedTrackNumber();

//        $isCancelShipment = $this->client->cancelShipment("LX504912338ES");

//        $this->assertTrue($isCancelShipment);

    }

}