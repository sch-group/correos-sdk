<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for BultosSimples StructType
 * @subpackage Structs
 */
class BultosSimples extends AbstractStructBase
{
    /**
     * The BultoSimple
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var DATOSBULTOSIMPLETYPE[]
     */
    public $BultoSimple;
    /**
     * Constructor method for BultosSimples
     * @uses BultosSimples::setBultoSimple()
     * @param DATOSBULTOSIMPLETYPE[] $bultoSimple
     */
    public function __construct(array $bultoSimple = array())
    {
        $this
            ->setBultoSimple($bultoSimple);
    }
    /**
     * Get BultoSimple value
     * @return DATOSBULTOSIMPLETYPE[]|null
     */
    public function getBultoSimple()
    {
        return $this->BultoSimple;
    }
    /**
     * This method is responsible for validating the values passed to the setBultoSimple method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoSimple method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoSimpleForArrayConstraintsFromSetBultoSimple(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosSimplesBultoSimpleItem) {
            // validation for constraint: itemType
            if (!$bultosSimplesBultoSimpleItem instanceof DATOSBULTOSIMPLETYPE) {
                $invalidValues[] = is_object($bultosSimplesBultoSimpleItem) ? get_class($bultosSimplesBultoSimpleItem) : sprintf('%s(%s)', gettype($bultosSimplesBultoSimpleItem), var_export($bultosSimplesBultoSimpleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BultoSimple property can only contain items of type DATOSBULTOSIMPLETYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BultoSimple value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOSIMPLETYPE[] $bultoSimple
     * @return BultosSimples
     */
    public function setBultoSimple(array $bultoSimple = array())
    {
        // validation for constraint: array
        if ('' !== ($bultoSimpleArrayErrorMessage = self::validateBultoSimpleForArrayConstraintsFromSetBultoSimple($bultoSimple))) {
            throw new \InvalidArgumentException($bultoSimpleArrayErrorMessage, __LINE__);
        }
        $this->BultoSimple = $bultoSimple;
        return $this;
    }
    /**
     * Add item to BultoSimple value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOSIMPLETYPE $item
     * @return BultosSimples
     */
    public function addToBultoSimple(DATOSBULTOSIMPLETYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSBULTOSIMPLETYPE) {
            throw new \InvalidArgumentException(sprintf('The BultoSimple property can only contain items of type DATOSBULTOSIMPLETYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BultoSimple[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return BultosSimples
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
