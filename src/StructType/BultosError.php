<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for BultosError StructType
 * @subpackage Structs
 */
class BultosError extends AbstractStructBase
{
    /**
     * The BultoError
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var DATOSBULTOERRORTYPE[]
     */
    public $BultoError;
    /**
     * Constructor method for BultosError
     * @uses BultosError::setBultoError()
     * @param DATOSBULTOERRORTYPE[] $bultoError
     */
    public function __construct(array $bultoError = array())
    {
        $this
            ->setBultoError($bultoError);
    }
    /**
     * Get BultoError value
     * @return DATOSBULTOERRORTYPE[]|null
     */
    public function getBultoError()
    {
        return $this->BultoError;
    }
    /**
     * This method is responsible for validating the values passed to the setBultoError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoErrorForArrayConstraintsFromSetBultoError(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosErrorBultoErrorItem) {
            // validation for constraint: itemType
            if (!$bultosErrorBultoErrorItem instanceof DATOSBULTOERRORTYPE) {
                $invalidValues[] = is_object($bultosErrorBultoErrorItem) ? get_class($bultosErrorBultoErrorItem) : sprintf('%s(%s)', gettype($bultosErrorBultoErrorItem), var_export($bultosErrorBultoErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BultoError property can only contain items of type DATOSBULTOERRORTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BultoError value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOERRORTYPE[] $bultoError
     * @return BultosError
     */
    public function setBultoError(array $bultoError = array())
    {
        // validation for constraint: array
        if ('' !== ($bultoErrorArrayErrorMessage = self::validateBultoErrorForArrayConstraintsFromSetBultoError($bultoError))) {
            throw new \InvalidArgumentException($bultoErrorArrayErrorMessage, __LINE__);
        }
        $this->BultoError = $bultoError;
        return $this;
    }
    /**
     * Add item to BultoError value
     * @throws \InvalidArgumentException
     * @param DATOSBULTOERRORTYPE $item
     * @return BultosError
     */
    public function addToBultoError(DATOSBULTOERRORTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSBULTOERRORTYPE) {
            throw new \InvalidArgumentException(sprintf('The BultoError property can only contain items of type DATOSBULTOERRORTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BultoError[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return BultosError
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
