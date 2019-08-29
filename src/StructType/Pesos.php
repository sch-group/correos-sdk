<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for Pesos StructType
 * @subpackage Structs
 */
class Pesos extends AbstractStructBase
{
    /**
     * The Peso
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * @var PESOTYPE[]
     */
    public $Peso;
    /**
     * Constructor method for Pesos
     * @uses Pesos::setPeso()
     * @param PESOTYPE[] $peso
     */
    public function __construct(array $peso = array())
    {
        $this
            ->setPeso($peso);
    }
    /**
     * Get Peso value
     * @return PESOTYPE[]|null
     */
    public function getPeso()
    {
        return $this->Peso;
    }
    /**
     * This method is responsible for validating the values passed to the setPeso method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeso method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePesoForArrayConstraintsFromSetPeso(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pesosPesoItem) {
            // validation for constraint: itemType
            if (!$pesosPesoItem instanceof PESOTYPE) {
                $invalidValues[] = is_object($pesosPesoItem) ? get_class($pesosPesoItem) : sprintf('%s(%s)', gettype($pesosPesoItem), var_export($pesosPesoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Peso property can only contain items of type PESOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Peso value
     * @throws \InvalidArgumentException
     * @param PESOTYPE[] $peso
     * @return Pesos
     */
    public function setPeso(array $peso = array())
    {
        // validation for constraint: array
        if ('' !== ($pesoArrayErrorMessage = self::validatePesoForArrayConstraintsFromSetPeso($peso))) {
            throw new \InvalidArgumentException($pesoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($peso) && count($peso) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($peso)), __LINE__);
        }
        $this->Peso = $peso;
        return $this;
    }
    /**
     * Add item to Peso value
     * @throws \InvalidArgumentException
     * @param PESOTYPE $item
     * @return Pesos
     */
    public function addToPeso(PESOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof PESOTYPE) {
            throw new \InvalidArgumentException(sprintf('The Peso property can only contain items of type PESOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Peso) && count($this->Peso) >= 2) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Peso)), __LINE__);
        }
        $this->Peso[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return Pesos
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
