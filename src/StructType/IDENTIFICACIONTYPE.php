<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for IDENTIFICACIONTYPE StructType
 * @subpackage Structs
 */
class IDENTIFICACIONTYPE extends IDENTIFICACIONREDUCIDOTYPE
{
    /**
     * The PersonaContacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:PersonaContacto
     * @var string
     */
    public $PersonaContacto;
    /**
     * Constructor method for IDENTIFICACIONTYPE
     * @uses IDENTIFICACIONTYPE::setPersonaContacto()
     * @param string $personaContacto
     */
    public function __construct($personaContacto = null)
    {
        $this
            ->setPersonaContacto($personaContacto);
    }
    /**
     * Get PersonaContacto value
     * @return string|null
     */
    public function getPersonaContacto()
    {
        return $this->PersonaContacto;
    }
    /**
     * Set PersonaContacto value
     * @param string $personaContacto
     * @return IDENTIFICACIONTYPE
     */
    public function setPersonaContacto($personaContacto = null)
    {
        // validation for constraint: string
        if (!is_null($personaContacto) && !is_string($personaContacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaContacto, true), gettype($personaContacto)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($personaContacto) && mb_strlen($personaContacto) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($personaContacto)), __LINE__);
        }
        $this->PersonaContacto = $personaContacto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return IDENTIFICACIONTYPE
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
