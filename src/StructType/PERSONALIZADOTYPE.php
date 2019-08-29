<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PERSONALIZADOTYPE StructType
 * @subpackage Structs
 */
class PERSONALIZADOTYPE extends AbstractStructBase
{
    /**
     * The Clave
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Clave;
    /**
     * The Valor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Valor;
    /**
     * Constructor method for PERSONALIZADOTYPE
     * @uses PERSONALIZADOTYPE::setClave()
     * @uses PERSONALIZADOTYPE::setValor()
     * @param string $clave
     * @param string $valor
     */
    public function __construct($clave = null, $valor = null)
    {
        $this
            ->setClave($clave)
            ->setValor($valor);
    }
    /**
     * Get Clave value
     * @return string|null
     */
    public function getClave()
    {
        return $this->Clave;
    }
    /**
     * Set Clave value
     * @param string $clave
     * @return PERSONALIZADOTYPE
     */
    public function setClave($clave = null)
    {
        // validation for constraint: string
        if (!is_null($clave) && !is_string($clave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clave, true), gettype($clave)), __LINE__);
        }
        $this->Clave = $clave;
        return $this;
    }
    /**
     * Get Valor value
     * @return string|null
     */
    public function getValor()
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param string $valor
     * @return PERSONALIZADOTYPE
     */
    public function setValor($valor = null)
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        $this->Valor = $valor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PERSONALIZADOTYPE
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
