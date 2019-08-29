<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Formato;


/**
 * This class stands for PRUEBAENTREGAREDUCIDOTYPE StructType
 * @subpackage Structs
 */
class PRUEBAENTREGAREDUCIDOTYPE extends AbstractStructBase
{
    /**
     * The Formato
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Formato
     * @var string
     */
    public $Formato;
    /**
     * Constructor method for PRUEBAENTREGAREDUCIDOTYPE
     * @uses PRUEBAENTREGAREDUCIDOTYPE::setFormato()
     * @param string $formato
     */
    public function __construct($formato = null)
    {
        $this
            ->setFormato($formato);
    }
    /**
     * Get Formato value
     * @return string|null
     */
    public function getFormato()
    {
        return $this->Formato;
    }
    /**
     * Set Formato value
     * @uses Formato::valueIsValid()
     * @uses Formato::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $formato
     * @return PRUEBAENTREGAREDUCIDOTYPE
     */
    public function setFormato($formato = null)
    {
        // validation for constraint: enumeration
        if (!Formato::valueIsValid($formato)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Formato', is_array($formato) ? implode(', ', $formato) : var_export($formato, true), implode(', ', Formato::getValidValues())), __LINE__);
        }
        $this->Formato = $formato;
        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see  AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WsdlToPhp\PackageBase\Struct
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
