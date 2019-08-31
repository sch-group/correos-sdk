<?php


namespace CorreosSdk\MainComponents;


use CorreosSdk\StructType\DIRECCIONTYPE;

class Invoice
{
    /**
     * @var ReceiverUnitedIdentity $receiverUnitedIdentity
     */
    private $receiverUnitedIdentity;

    public function __construct(ReceiverUnitedIdentity $receiverUnitedIdentity)
    {
        $this->receiverUnitedIdentity = $receiverUnitedIdentity;
    }

    /**
     * @return ReceiverUnitedIdentity
     */
    public function getReceiverUnitedIdentity(): ReceiverUnitedIdentity
    {
        return $this->receiverUnitedIdentity;
    }

}