<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for ITEMORIGINALTYPE StructType
 * @subpackage Structs
 */
class ITEMORIGINALTYPE extends AbstractStructBase
{
    /**
     * The IdentificadorEnvioOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdentificadorEnvioOriginal;
    /**
     * The IdItemEnvioOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdItemEnvioOriginal;
    /**
     * The OperadorEnvioOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $OperadorEnvioOriginal;
    /**
     * Constructor method for ITEMORIGINALTYPE
     * @uses ITEMORIGINALTYPE::setIdentificadorEnvioOriginal()
     * @uses ITEMORIGINALTYPE::setIdItemEnvioOriginal()
     * @uses ITEMORIGINALTYPE::setOperadorEnvioOriginal()
     * @param string $identificadorEnvioOriginal
     * @param string $idItemEnvioOriginal
     * @param string $operadorEnvioOriginal
     */
    public function __construct($identificadorEnvioOriginal = null, $idItemEnvioOriginal = null, $operadorEnvioOriginal = null)
    {
        $this
            ->setIdentificadorEnvioOriginal($identificadorEnvioOriginal)
            ->setIdItemEnvioOriginal($idItemEnvioOriginal)
            ->setOperadorEnvioOriginal($operadorEnvioOriginal);
    }
    /**
     * Get IdentificadorEnvioOriginal value
     * @return string|null
     */
    public function getIdentificadorEnvioOriginal()
    {
        return $this->IdentificadorEnvioOriginal;
    }
    /**
     * Set IdentificadorEnvioOriginal value
     * @param string $identificadorEnvioOriginal
     * @return ITEMORIGINALTYPE
     */
    public function setIdentificadorEnvioOriginal($identificadorEnvioOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($identificadorEnvioOriginal) && !is_string($identificadorEnvioOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorEnvioOriginal, true), gettype($identificadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorEnvioOriginal) && mb_strlen($identificadorEnvioOriginal) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($identificadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorEnvioOriginal) && mb_strlen($identificadorEnvioOriginal) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($identificadorEnvioOriginal)), __LINE__);
        }
        $this->IdentificadorEnvioOriginal = $identificadorEnvioOriginal;
        return $this;
    }
    /**
     * Get IdItemEnvioOriginal value
     * @return string|null
     */
    public function getIdItemEnvioOriginal()
    {
        return $this->IdItemEnvioOriginal;
    }
    /**
     * Set IdItemEnvioOriginal value
     * @param string $idItemEnvioOriginal
     * @return ITEMORIGINALTYPE
     */
    public function setIdItemEnvioOriginal($idItemEnvioOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($idItemEnvioOriginal) && !is_string($idItemEnvioOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idItemEnvioOriginal, true), gettype($idItemEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($idItemEnvioOriginal) && mb_strlen($idItemEnvioOriginal) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($idItemEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($idItemEnvioOriginal) && mb_strlen($idItemEnvioOriginal) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($idItemEnvioOriginal)), __LINE__);
        }
        $this->IdItemEnvioOriginal = $idItemEnvioOriginal;
        return $this;
    }
    /**
     * Get OperadorEnvioOriginal value
     * @return string|null
     */
    public function getOperadorEnvioOriginal()
    {
        return $this->OperadorEnvioOriginal;
    }
    /**
     * Set OperadorEnvioOriginal value
     * @param string $operadorEnvioOriginal
     * @return ITEMORIGINALTYPE
     */
    public function setOperadorEnvioOriginal($operadorEnvioOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($operadorEnvioOriginal) && !is_string($operadorEnvioOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operadorEnvioOriginal, true), gettype($operadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($operadorEnvioOriginal) && mb_strlen($operadorEnvioOriginal) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($operadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($operadorEnvioOriginal) && mb_strlen($operadorEnvioOriginal) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($operadorEnvioOriginal)), __LINE__);
        }
        $this->OperadorEnvioOriginal = $operadorEnvioOriginal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ITEMORIGINALTYPE
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
