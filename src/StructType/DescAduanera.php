<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DescAduanera StructType
 * @subpackage Structs
 */
class DescAduanera extends AbstractStructBase
{
    /**
     * The DATOSADUANA
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * @var DATOSADUANATYPE[]
     */
    public $DATOSADUANA;
    /**
     * Constructor method for DescAduanera
     * @uses DescAduanera::setDATOSADUANA()
     * @param DATOSADUANATYPE[] $dATOSADUANA
     */
    public function __construct(array $dATOSADUANA = array())
    {
        $this
            ->setDATOSADUANA($dATOSADUANA);
    }
    /**
     * Get DATOSADUANA value
     * @return DATOSADUANATYPE[]|null
     */
    public function getDATOSADUANA()
    {
        return $this->DATOSADUANA;
    }
    /**
     * This method is responsible for validating the values passed to the setDATOSADUANA method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDATOSADUANA method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDATOSADUANAForArrayConstraintsFromSetDATOSADUANA(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $descAduaneraDATOSADUANAItem) {
            // validation for constraint: itemType
            if (!$descAduaneraDATOSADUANAItem instanceof DATOSADUANATYPE) {
                $invalidValues[] = is_object($descAduaneraDATOSADUANAItem) ? get_class($descAduaneraDATOSADUANAItem) : sprintf('%s(%s)', gettype($descAduaneraDATOSADUANAItem), var_export($descAduaneraDATOSADUANAItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DATOSADUANA property can only contain items of type DATOSADUANATYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DATOSADUANA value
     * @throws \InvalidArgumentException
     * @param DATOSADUANATYPE[] $dATOSADUANA
     * @return DescAduanera
     */
    public function setDATOSADUANA(array $dATOSADUANA = array())
    {
        // validation for constraint: array
        if ('' !== ($dATOSADUANAArrayErrorMessage = self::validateDATOSADUANAForArrayConstraintsFromSetDATOSADUANA($dATOSADUANA))) {
            throw new \InvalidArgumentException($dATOSADUANAArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($dATOSADUANA) && count($dATOSADUANA) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($dATOSADUANA)), __LINE__);
        }
        $this->DATOSADUANA = $dATOSADUANA;
        return $this;
    }
    /**
     * Add item to DATOSADUANA value
     * @throws \InvalidArgumentException
     * @param DATOSADUANATYPE $item
     * @return DescAduanera
     */
    public function addToDATOSADUANA(DATOSADUANATYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSADUANATYPE) {
            throw new \InvalidArgumentException(sprintf('The DATOSADUANA property can only contain items of type DATOSADUANATYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->DATOSADUANA) && count($this->DATOSADUANA) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->DATOSADUANA)), __LINE__);
        }
        $this->DATOSADUANA[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DescAduanera
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
