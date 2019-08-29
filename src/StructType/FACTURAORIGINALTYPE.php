<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for FACTURAORIGINALTYPE StructType
 * @subpackage Structs
 */
class FACTURAORIGINALTYPE extends AbstractStructBase
{
    /**
     * The IdentificadorFacturaOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdentificadorFacturaOriginal;
    /**
     * The NumeroFacturaOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumeroFacturaOriginal;
    /**
     * The FechaFacturaOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $FechaFacturaOriginal;
    /**
     * Constructor method for FACTURAORIGINALTYPE
     * @uses FACTURAORIGINALTYPE::setIdentificadorFacturaOriginal()
     * @uses FACTURAORIGINALTYPE::setNumeroFacturaOriginal()
     * @uses FACTURAORIGINALTYPE::setFechaFacturaOriginal()
     * @param string $identificadorFacturaOriginal
     * @param string $numeroFacturaOriginal
     * @param string $fechaFacturaOriginal
     */
    public function __construct($identificadorFacturaOriginal = null, $numeroFacturaOriginal = null, $fechaFacturaOriginal = null)
    {
        $this
            ->setIdentificadorFacturaOriginal($identificadorFacturaOriginal)
            ->setNumeroFacturaOriginal($numeroFacturaOriginal)
            ->setFechaFacturaOriginal($fechaFacturaOriginal);
    }
    /**
     * Get IdentificadorFacturaOriginal value
     * @return string|null
     */
    public function getIdentificadorFacturaOriginal()
    {
        return $this->IdentificadorFacturaOriginal;
    }
    /**
     * Set IdentificadorFacturaOriginal value
     * @param string $identificadorFacturaOriginal
     * @return FACTURAORIGINALTYPE
     */
    public function setIdentificadorFacturaOriginal($identificadorFacturaOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($identificadorFacturaOriginal) && !is_string($identificadorFacturaOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorFacturaOriginal, true), gettype($identificadorFacturaOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorFacturaOriginal) && mb_strlen($identificadorFacturaOriginal) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($identificadorFacturaOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorFacturaOriginal) && mb_strlen($identificadorFacturaOriginal) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($identificadorFacturaOriginal)), __LINE__);
        }
        $this->IdentificadorFacturaOriginal = $identificadorFacturaOriginal;
        return $this;
    }
    /**
     * Get NumeroFacturaOriginal value
     * @return string|null
     */
    public function getNumeroFacturaOriginal()
    {
        return $this->NumeroFacturaOriginal;
    }
    /**
     * Set NumeroFacturaOriginal value
     * @param string $numeroFacturaOriginal
     * @return FACTURAORIGINALTYPE
     */
    public function setNumeroFacturaOriginal($numeroFacturaOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($numeroFacturaOriginal) && !is_string($numeroFacturaOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroFacturaOriginal, true), gettype($numeroFacturaOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($numeroFacturaOriginal) && mb_strlen($numeroFacturaOriginal) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($numeroFacturaOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroFacturaOriginal) && mb_strlen($numeroFacturaOriginal) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numeroFacturaOriginal)), __LINE__);
        }
        $this->NumeroFacturaOriginal = $numeroFacturaOriginal;
        return $this;
    }
    /**
     * Get FechaFacturaOriginal value
     * @return string|null
     */
    public function getFechaFacturaOriginal()
    {
        return $this->FechaFacturaOriginal;
    }
    /**
     * Set FechaFacturaOriginal value
     * @param string $fechaFacturaOriginal
     * @return FACTURAORIGINALTYPE
     */
    public function setFechaFacturaOriginal($fechaFacturaOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($fechaFacturaOriginal) && !is_string($fechaFacturaOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaFacturaOriginal, true), gettype($fechaFacturaOriginal)), __LINE__);
        }
        $this->FechaFacturaOriginal = $fechaFacturaOriginal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return FACTURAORIGINALTYPE
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
