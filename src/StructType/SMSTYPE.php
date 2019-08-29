<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Idioma;


/**
 * This class stands for SMSTYPE StructType
 * @subpackage Structs
 */
class SMSTYPE extends AbstractStructBase
{
    /**
     * The NumeroSMS
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * - ref: xsd:NumeroSMS
     * @var string
     */
    public $NumeroSMS;
    /**
     * The Idioma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Idioma
     * @var string
     */
    public $Idioma;
    /**
     * Constructor method for SMSTYPE
     * @uses SMSTYPE::setNumeroSMS()
     * @uses SMSTYPE::setIdioma()
     * @param string $numeroSMS
     * @param string $idioma
     */
    public function __construct($numeroSMS = null, $idioma = null)
    {
        $this
            ->setNumeroSMS($numeroSMS)
            ->setIdioma($idioma);
    }
    /**
     * Get NumeroSMS value
     * @return string|null
     */
    public function getNumeroSMS()
    {
        return $this->NumeroSMS;
    }
    /**
     * Set NumeroSMS value
     * @param string $numeroSMS
     * @return SMSTYPE
     */
    public function setNumeroSMS($numeroSMS = null)
    {
        // validation for constraint: string
        if (!is_null($numeroSMS) && !is_string($numeroSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSMS, true), gettype($numeroSMS)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($numeroSMS) && mb_strlen($numeroSMS) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen($numeroSMS)), __LINE__);
        }
        $this->NumeroSMS = $numeroSMS;
        return $this;
    }
    /**
     * Get Idioma value
     * @return string|null
     */
    public function getIdioma()
    {
        return $this->Idioma;
    }
    /**
     * Set Idioma value
     * @uses Idioma::valueIsValid()
     * @uses Idioma::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $idioma
     * @return SMSTYPE
     */
    public function setIdioma($idioma = null)
    {
        // validation for constraint: enumeration
        if (!Idioma::valueIsValid($idioma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Idioma', is_array($idioma) ? implode(', ', $idioma) : var_export($idioma, true), implode(', ', Idioma::getValidValues())), __LINE__);
        }
        $this->Idioma = $idioma;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return SMSTYPE
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
