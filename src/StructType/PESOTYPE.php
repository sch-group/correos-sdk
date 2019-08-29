<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\TipoPeso;


/**
 * This class stands for PESOTYPE StructType
 * @subpackage Structs
 */
class PESOTYPE extends AbstractStructBase
{
    /**
     * The TipoPeso
     * Meta informations extracted from the WSDL
     * - ref: xsd:TipoPeso
     * @var string
     */
    public $TipoPeso;
    /**
     * The Valor
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:Valor
     * @var string
     */
    public $Valor;
    /**
     * Constructor method for PESOTYPE
     * @uses PESOTYPE::setTipoPeso()
     * @uses PESOTYPE::setValor()
     * @param string $tipoPeso
     * @param string $valor
     */
    public function __construct($tipoPeso = null, $valor = null)
    {
        $this
            ->setTipoPeso($tipoPeso)
            ->setValor($valor);
    }
    /**
     * Get TipoPeso value
     * @return string|null
     */
    public function getTipoPeso()
    {
        return $this->TipoPeso;
    }
    /**
     * Set TipoPeso value
     * @uses TipoPeso::valueIsValid()
     * @uses TipoPeso::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoPeso
     * @return PESOTYPE
     */
    public function setTipoPeso($tipoPeso = null)
    {
        // validation for constraint: enumeration
        if (!TipoPeso::valueIsValid($tipoPeso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoPeso', is_array($tipoPeso) ? implode(', ', $tipoPeso) : var_export($tipoPeso, true), implode(', ', TipoPeso::getValidValues())), __LINE__);
        }
        $this->TipoPeso = $tipoPeso;
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
     * @return PESOTYPE
     */
    public function setValor($valor = null)
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($valor) && mb_strlen($valor) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($valor)), __LINE__);
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
     * @return PESOTYPE
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
