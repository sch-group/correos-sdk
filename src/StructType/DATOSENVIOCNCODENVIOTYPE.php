<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSENVIOCNCODENVIOTYPE StructType
 * @subpackage Structs
 */
class DATOSENVIOCNCODENVIOTYPE extends DATOSENVIOCNTYPE
{
    /**
     * The CodEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string
     */
    public $CodEnvio;
    /**
     * Constructor method for DATOSENVIOCNCODENVIOTYPE
     * @uses DATOSENVIOCNCODENVIOTYPE::setCodEnvio()
     * @param string $codEnvio
     */
    public function __construct($codEnvio = null)
    {
        $this
            ->setCodEnvio($codEnvio);
    }
    /**
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio()
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return DATOSENVIOCNCODENVIOTYPE
     */
    public function setCodEnvio($codEnvio = null)
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen($codEnvio) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSENVIOCNCODENVIOTYPE
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
