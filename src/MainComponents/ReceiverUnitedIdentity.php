<?php


namespace CorreosSdk\MainComponents;


use CorreosSdk\StructType\DATOSDESTINATARIOTYPE;

class ReceiverUnitedIdentity
{
    /**
     * @var Address
     */
    private $receiverAddress;

    /**
     * @var Identification
     */
    private $receiverIdentity;

    /**
     * CP
     * @var string
     */
    private $postcode;
    /**
     * zIP
     * @var string
     */
    private $internationalPostcode;
    /**
     * Pais
     * @var string
     */
    private $countryISO;

    /**
     * @var string
     */
    private $isInternationalPostBox;

    /**
     * @var string
     */
    private $spanishPostBoxNumber;

    /**
     * @var string
     */
    private $receiverPhone;

    /**
     * @var string
     */
    private $receiverEmail;

    /**
     * @var Sms
     */
    private $sms;

    /**
     * @var Address
     */
    private $secondReceiverAddress;

    /**
     * @param Address $secondReceiverAddress
     */
    public function setSecondReceiverAddress(Address $secondReceiverAddress): void
    {
        $this->secondReceiverAddress = $secondReceiverAddress;
    }

    /**
     * ReceiverUnitedIdentity constructor.
     * @param Address $receiverAddress
     * @param Identification $receiverIdentity
     * @param string $postcode
     * @param string $internationalPostcode
     * @param $countryISO
     * @param string $isInternationalPostBox
     * @param string $spanishPostBoxNumber
     * @param string $receiverPhone
     * @param $receiverEmail
     * @param Sms $sms
     */
    public function __construct(
        Address $receiverAddress,
        Identification $receiverIdentity,
        string $postcode,
        string $internationalPostcode,
        string $countryISO,
        string $receiverPhone = null,
        string $receiverEmail = null,
        string $isInternationalPostBox = null,
        string $spanishPostBoxNumber = null,
        Sms $sms = null
    ) {
        $this->receiverAddress = $receiverAddress;
        $this->receiverIdentity = $receiverIdentity;
        $this->postcode = $postcode;
        $this->internationalPostcode = $internationalPostcode;
        $this->countryISO = $countryISO;
        $this->isInternationalPostBox = $isInternationalPostBox;
        $this->spanishPostBoxNumber = $spanishPostBoxNumber;
        $this->receiverPhone = $receiverPhone;
        $this->receiverEmail = $receiverEmail;
        $this->sms = $sms;
    }



    public function buildReceiverIdentity() : DATOSDESTINATARIOTYPE
    {
        return new DATOSDESTINATARIOTYPE(
            $this->receiverIdentity->buildIdentification(),
            $this->receiverAddress->buildDirection(),
            $this->secondReceiverAddress,
            $this->postcode,
            $this->internationalPostcode,
            $this->countryISO,
            $this->isInternationalPostBox,
            $this->spanishPostBoxNumber,
            $this->receiverPhone,
            $this->receiverEmail,
            $this->sms
        );
    }

}