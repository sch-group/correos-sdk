<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for Bultos StructType
 * @subpackage Structs
 */
class Bultos extends AbstractStructBase
{
    /**
     * The Bulto
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var DATOSBULTOTYPE[]
     */
    public $Bulto;
    /**
     * Constructor method for Bultos
     * @uses Bultos::setBulto()
     * @param DATOSBULTOTYPE[] $bulto
     */
    public function __construct(array $bulto = array())
    {
        $this
            ->setBulto($bulto);
    }
    /**
     * Get Bulto value
     * @return DATOSBULTOTYPE[]|null
     */
    public function getBulto()
    {
        return $this->Bulto;
    }
    /**
     * This method is responsible for validating the values passed to the setBulto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBulto method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoForArrayConstraintsFromSetBulto(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosBultoItem) {
            // validation for constraint: itemType
            if (!$bultosBultoItem instanceof DATOSBULTOTYPE) {
                $invalidValues[] = is_object($bultosBultoItem) ? get_class($bultosBultoItem) : sprintf('%s(%s)', gettype($bultosBultoItem), var_export($bultosBultoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bulto property can only contain items of type DATOSBULTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Bulto value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOTYPE[] $bulto
     * @return Bultos
     */
    public function setBulto(array $bulto = array())
    {
        // validation for constraint: array
        if ('' !== ($bultoArrayErrorMessage = self::validateBultoForArrayConstraintsFromSetBulto($bulto))) {
            throw new \InvalidArgumentException($bultoArrayErrorMessage, __LINE__);
        }
        $this->Bulto = $bulto;
        return $this;
    }
    /**
     * Add item to Bulto value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOTYPE $item
     * @return Bultos
     */
    public function addToBulto(DATOSBULTOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSBULTOTYPE) {
            throw new \InvalidArgumentException(sprintf('The Bulto property can only contain items of type DATOSBULTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bulto[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return Bultos
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
