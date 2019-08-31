<?php

namespace CorreosSdk\MainComponents;

use CorreosSdk\StructType\DATOSREMITENTETYPE;

class SenderUnitedIdentity
{
    /**
     * TypoIdentification
     * @var Address
     */
    private $senderAddress;

    /**
     * TypoDirection
     * @var SenderIdentification
     */
    private $senderIdentification;

    /**
     * CP
     * @var string
     */
    private $postcode;

    /**
     * Telefonocontacto
     * @var string
     */
    private $contactPhone;

    /**
     * Email
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $internationalPostcode;

    /**
     * DatosSMS
     * @var Sms
     */
    private $sms;

    /**
     * SenderUnitedIdentity constructor.
     * @param Address $senderAddress
     * @param Identification $senderIdentification
     * @param string $postcode
     * @param string $contactPhone
     * @param string $email
     * @param string $internationalPostcode
     * @param Sms $sms
     */
    public function __construct(Address $senderAddress, Identification $senderIdentification, string $postcode, string $contactPhone = null, string $email = null, string $internationalPostcode = null, Sms $sms = null)
    {
        $this->senderAddress = $senderAddress;
        $this->senderIdentification = $senderIdentification;
        $this->postcode = $postcode;
        $this->internationalPostcode = $internationalPostcode;
        $this->contactPhone = $contactPhone;
        $this->email = $email;
        $this->sms = $sms;
    }

    public function buildSenderIdentity() : DATOSREMITENTETYPE
    {
        return new DATOSREMITENTETYPE(
            $this->senderIdentification->buildIdentification(),
            $this->senderAddress->buildDirection(),
            $this->postcode,
            $this->internationalPostcode,
            $this->contactPhone,
            $this->email,
            $this->sms ? $this->sms->buildSMS() : null
        );
    }
}