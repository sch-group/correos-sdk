<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DIRECCIONADICIPCTYPE StructType
 * @subpackage Structs
 */
class DIRECCIONADICIPCTYPE extends AbstractStructBase
{
    /**
     * The Calle
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 2
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    public $Calle;
    /**
     * The NumeroCalle
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumeroCalle;
    /**
     * The ApartadoCorreos
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApartadoCorreos;
    /**
     * Constructor method for DIRECCIONADICIPCTYPE
     * @uses DIRECCIONADICIPCTYPE::setCalle()
     * @uses DIRECCIONADICIPCTYPE::setNumeroCalle()
     * @uses DIRECCIONADICIPCTYPE::setApartadoCorreos()
     * @param string[] $calle
     * @param string $numeroCalle
     * @param string $apartadoCorreos
     */
    public function __construct(array $calle = array(), $numeroCalle = null, $apartadoCorreos = null)
    {
        $this
            ->setCalle($calle)
            ->setNumeroCalle($numeroCalle)
            ->setApartadoCorreos($apartadoCorreos);
    }
    /**
     * Get Calle value
     * @return string[]|null
     */
    public function getCalle()
    {
        return $this->Calle;
    }
    /**
     * This method is responsible for validating the values passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForArrayConstraintsFromSetCalle(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: itemType
            if (!is_string($dIRECCIONADICIPCTYPECalleItem)) {
                $invalidValues[] = is_object($dIRECCIONADICIPCTYPECalleItem) ? get_class($dIRECCIONADICIPCTYPECalleItem) : sprintf('%s(%s)', gettype($dIRECCIONADICIPCTYPECalleItem), var_export($dIRECCIONADICIPCTYPECalleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Calle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMaxLengthConstraintFromSetCalle($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: maxLength(40)
            if (mb_strlen($dIRECCIONADICIPCTYPECalleItem) > 40) {
                $invalidValues[] = var_export($dIRECCIONADICIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 40', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMinLengthConstraintFromSetCalle($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen($dIRECCIONADICIPCTYPECalleItem) < 1) {
                $invalidValues[] = var_export($dIRECCIONADICIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Calle value
     * @throws \InvalidArgumentException
     * @param string[] $calle
     * @return DIRECCIONADICIPCTYPE
     */
    public function setCalle(array $calle = array())
    {
        // validation for constraint: array
        if ('' !== ($calleArrayErrorMessage = self::validateCalleForArrayConstraintsFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(40)
        if ('' !== ($calleMaxLengthErrorMessage = self::validateCalleForMaxLengthConstraintFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($calle) && count($calle) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($calleMinLengthErrorMessage = self::validateCalleForMinLengthConstraintFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleMinLengthErrorMessage, __LINE__);
        }
        $this->Calle = $calle;
        return $this;
    }
    /**
     * Add item to Calle value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return DIRECCIONADICIPCTYPE
     */
    public function addToCalle($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Calle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (mb_strlen($item) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Calle) && count($this->Calle) >= 2) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen($item) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($item)), __LINE__);
        }
        $this->Calle[] = $item;
        return $this;
    }
    /**
     * Get NumeroCalle value
     * @return string|null
     */
    public function getNumeroCalle()
    {
        return $this->NumeroCalle;
    }
    /**
     * Set NumeroCalle value
     * @param string $numeroCalle
     * @return DIRECCIONADICIPCTYPE
     */
    public function setNumeroCalle($numeroCalle = null)
    {
        // validation for constraint: string
        if (!is_null($numeroCalle) && !is_string($numeroCalle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCalle, true), gettype($numeroCalle)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numeroCalle) && mb_strlen($numeroCalle) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numeroCalle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroCalle) && mb_strlen($numeroCalle) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numeroCalle)), __LINE__);
        }
        $this->NumeroCalle = $numeroCalle;
        return $this;
    }
    /**
     * Get ApartadoCorreos value
     * @return string|null
     */
    public function getApartadoCorreos()
    {
        return $this->ApartadoCorreos;
    }
    /**
     * Set ApartadoCorreos value
     * @param string $apartadoCorreos
     * @return DIRECCIONADICIPCTYPE
     */
    public function setApartadoCorreos($apartadoCorreos = null)
    {
        // validation for constraint: string
        if (!is_null($apartadoCorreos) && !is_string($apartadoCorreos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoCorreos, true), gettype($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($apartadoCorreos) && mb_strlen($apartadoCorreos) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartadoCorreos) && mb_strlen($apartadoCorreos) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($apartadoCorreos)), __LINE__);
        }
        $this->ApartadoCorreos = $apartadoCorreos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DIRECCIONADICIPCTYPE
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
