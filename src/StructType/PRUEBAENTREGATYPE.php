<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PRUEBAENTREGATYPE StructType
 * @subpackage Structs
 */
class PRUEBAENTREGATYPE extends PRUEBAENTREGAREDUCIDOTYPE
{
    /**
     * The ReferenciaeAR
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 55
     * - minOccurs: 0
     * - ref: xsd:ReferenciaeAR
     * @var string
     */
    public $ReferenciaeAR;
    /**
     * The InfRemitenteEAr
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 350
     * - minOccurs: 0
     * - ref: xsd:InfRemitenteEAr
     * @var string
     */
    public $InfRemitenteEAr;
    /**
     * Constructor method for PRUEBAENTREGATYPE
     * @uses PRUEBAENTREGATYPE::setReferenciaeAR()
     * @uses PRUEBAENTREGATYPE::setInfRemitenteEAr()
     * @param string $referenciaeAR
     * @param string $infRemitenteEAr
     */
    public function __construct($referenciaeAR = null, $infRemitenteEAr = null)
    {
        $this
            ->setReferenciaeAR($referenciaeAR)
            ->setInfRemitenteEAr($infRemitenteEAr);
    }
    /**
     * Get ReferenciaeAR value
     * @return string|null
     */
    public function getReferenciaeAR()
    {
        return $this->ReferenciaeAR;
    }
    /**
     * Set ReferenciaeAR value
     * @param string $referenciaeAR
     * @return PRUEBAENTREGATYPE
     */
    public function setReferenciaeAR($referenciaeAR = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaeAR) && !is_string($referenciaeAR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaeAR, true), gettype($referenciaeAR)), __LINE__);
        }
        // validation for constraint: maxLength(55)
        if (!is_null($referenciaeAR) && mb_strlen($referenciaeAR) > 55) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 55', mb_strlen($referenciaeAR)), __LINE__);
        }
        $this->ReferenciaeAR = $referenciaeAR;
        return $this;
    }
    /**
     * Get InfRemitenteEAr value
     * @return string|null
     */
    public function getInfRemitenteEAr()
    {
        return $this->InfRemitenteEAr;
    }
    /**
     * Set InfRemitenteEAr value
     * @param string $infRemitenteEAr
     * @return PRUEBAENTREGATYPE
     */
    public function setInfRemitenteEAr($infRemitenteEAr = null)
    {
        // validation for constraint: string
        if (!is_null($infRemitenteEAr) && !is_string($infRemitenteEAr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infRemitenteEAr, true), gettype($infRemitenteEAr)), __LINE__);
        }
        // validation for constraint: maxLength(350)
        if (!is_null($infRemitenteEAr) && mb_strlen($infRemitenteEAr) > 350) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 350', mb_strlen($infRemitenteEAr)), __LINE__);
        }
        $this->InfRemitenteEAr = $infRemitenteEAr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PRUEBAENTREGATYPE
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
