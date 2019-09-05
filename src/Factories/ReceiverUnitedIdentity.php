<?php


namespace CorreosSdk\Factories;


use CorreosSdk\StructType\DATOSDESTINATARIOMODIFTYPE;
use CorreosSdk\StructType\DATOSDESTINATARIOTYPE;

class ReceiverUnitedIdentity
{

    const YES_INTERNATIONAL_SHIPMENT = "S";
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
     * DestinoApartadoPostalinternacional
     * @var string
     */
    private $isInternationalPostBox;

    /**
     * ApartadoPostaldestino
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
        string $internationalPostcode,
        string $countryISO,
        string $postcode = null,
        string $receiverPhone = null,
        string $receiverEmail = null,
        string $isInternationalPostBox = null,
        string $spanishPostBoxNumber = null,
        Sms $sms = null
    )
    {
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

    /**
     * @return DATOSDESTINATARIOTYPE
     */
    public function buildReceiverIdentity(): DATOSDESTINATARIOTYPE
    {
        return new DATOSDESTINATARIOTYPE(
            $this->receiverIdentity->buildIdentification(),
            $this->receiverAddress->buildDirection(),
            !empty($this->secondReceiverAddress) ? $this->secondReceiverAddress->buildDirection() : null,
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

    public function buildUpdateReceiverIdentity(): DATOSDESTINATARIOMODIFTYPE
    {
        return new DATOSDESTINATARIOMODIFTYPE(
            $this->receiverIdentity->buildIdentification(),
            $this->receiverAddress->buildDirection(),
            $this->getInternationalPostcode(),
            $this->getCountryISO(),
            $this->getIsInternationalPostBox(),
            $this->getSpanishPostBoxNumber(),
            $this->getReceiverPhone(),
            $this->getReceiverEmail(),
            !empty($this->getSms()) ? $this->getSms()->buildSMS() : null
        );
    }

    /**
     * @return Address
     */
    public function getReceiverAddress(): Address
    {
        return $this->receiverAddress;
    }

    /**
     * @return Identification
     */
    public function getReceiverIdentity(): Identification
    {
        return $this->receiverIdentity;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getInternationalPostcode(): string
    {
        return $this->internationalPostcode;
    }

    /**
     * @return string
     */
    public function getCountryISO(): string
    {
        return $this->countryISO;
    }

    /**
     * @return string
     */
    public function getIsInternationalPostBox(): ?string
    {
        return $this->isInternationalPostBox;
    }

    /**
     * @return string
     */
    public function getSpanishPostBoxNumber(): ?string
    {
        return $this->spanishPostBoxNumber;
    }

    /**
     * @return string
     */
    public function getReceiverPhone(): ?string
    {
        return $this->receiverPhone;
    }

    /**
     * @return string
     */
    public function getReceiverEmail(): ?string
    {
        return $this->receiverEmail;
    }

    /**
     * @return Sms
     */
    public function getSms(): ?Sms
    {
        return $this->sms;
    }

    /**
     * @return Address
     */
    public function getSecondReceiverAddress(): Address
    {
        return $this->secondReceiverAddress;
    }

}