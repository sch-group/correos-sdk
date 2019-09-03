<?php


namespace CorreosSdk\Tests;


use CorreosSdk\Exceptions\CorreosException;
use CorreosSdk\StructType\PeticionAnular;

class CancelShipmentTest extends InitTest
{
    /**
     * @throws \CorreosSdk\Exceptions\CorreosException
     */
    public function testCancelShipment()
    {
        $invoice = $this->createShipment();

        $trackNumber = $invoice->getClippedTrackNumber();

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
}