<?php

namespace CorreosSdk\Factories;

use CorreosSdk\StructType\SMSTYPE;

class Sms
{
    const SPANISH_CODE = '1';

    const CATALAN_CODE = '2';

    const BASQUE_CODE = '3';

    const GALICIAN_CODE = '4';

    private $phoneNumber;

    private $languageCode;

    /**
     * Sms constructor.
     * @param $phoneNumber
     * @param $language
     */
    public function __construct(string $phoneNumber = null, string $languageCode = null)
    {
        $this->phoneNumber = $phoneNumber;
        $this->languageCode = $languageCode;
    }

    /**
     * @return SMSTYPE
     */
    public function buildSMS() : SMSTYPE
    {
        return new SMSTYPE(
          $this->phoneNumber,
          $this->languageCode
        );
    }

    /**
     * @return string|null
     */
    private function getLanguageCode() : ?string
    {
        return !empty($this->phoneNumber) ? $this->languageCode ?? self::SPANISH_CODE : null;
    }

}