<?php


namespace CorreosSdk\MainComponents;


use CorreosSdk\StructType\DIRECCIONTYPE;

class Invoice
{
    /**
     * @var string
     */
    private $invoiceNumber;
    /**
     * @var ReceiverUnitedIdentity
     */
    private $receiverUnitedIdentity;

    /**
     * @var SendingContent
     */
    private $sendingContent;

    public function __construct(ReceiverUnitedIdentity $receiverUnitedIdentity, SendingContent $sendingContent)
    {
        $this->receiverUnitedIdentity = $receiverUnitedIdentity;
        $this->sendingContent = $sendingContent;
    }

    /**
     * @return ReceiverUnitedIdentity
     */
    public function getReceiverUnitedIdentity(): ReceiverUnitedIdentity
    {
        return $this->receiverUnitedIdentity;
    }

    /**
     * @return SendingContent
     */
    public function getSendingContent(): SendingContent
    {
        return $this->sendingContent;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     */
    public function setInvoiceNumber(string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

}