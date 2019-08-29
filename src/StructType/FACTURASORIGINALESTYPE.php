<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for FACTURASORIGINALESTYPE StructType
 * @subpackage Structs
 */
class FACTURASORIGINALESTYPE extends AbstractStructBase
{
    /**
     * The FacturaOriginal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - nillable: true
     * @var FACTURAORIGINALTYPE[]
     */
    public $FacturaOriginal;
    /**
     * Constructor method for FACTURASORIGINALESTYPE
     * @uses FACTURASORIGINALESTYPE::setFacturaOriginal()
     * @param FACTURAORIGINALTYPE[] $facturaOriginal
     */
    public function __construct(array $facturaOriginal = array())
    {
        $this
            ->setFacturaOriginal($facturaOriginal);
    }
    /**
     * Get FacturaOriginal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return FACTURAORIGINALTYPE[]|null
     */
    public function getFacturaOriginal()
    {
        return isset($this->FacturaOriginal) ? $this->FacturaOriginal : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFacturaOriginal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFacturaOriginal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFacturaOriginalForArrayConstraintsFromSetFacturaOriginal(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fACTURASORIGINALESTYPEFacturaOriginalItem) {
            // validation for constraint: itemType
            if (!$fACTURASORIGINALESTYPEFacturaOriginalItem instanceof FACTURAORIGINALTYPE) {
                $invalidValues[] = is_object($fACTURASORIGINALESTYPEFacturaOriginalItem) ? get_class($fACTURASORIGINALESTYPEFacturaOriginalItem) : sprintf('%s(%s)', gettype($fACTURASORIGINALESTYPEFacturaOriginalItem), var_export($fACTURASORIGINALESTYPEFacturaOriginalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FacturaOriginal property can only contain items of type FACTURAORIGINALTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FacturaOriginal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param FACTURAORIGINALTYPE[] $facturaOriginal
     * @return FACTURASORIGINALESTYPE
     */
    public function setFacturaOriginal(array $facturaOriginal = array())
    {
        // validation for constraint: array
        if ('' !== ($facturaOriginalArrayErrorMessage = self::validateFacturaOriginalForArrayConstraintsFromSetFacturaOriginal($facturaOriginal))) {
            throw new \InvalidArgumentException($facturaOriginalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($facturaOriginal) && count($facturaOriginal) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($facturaOriginal)), __LINE__);
        }
        if (is_null($facturaOriginal) || (is_array($facturaOriginal) && empty($facturaOriginal))) {
            unset($this->FacturaOriginal);
        } else {
            $this->FacturaOriginal = $facturaOriginal;
        }
        return $this;
    }
    /**
     * Add item to FacturaOriginal value
     * @throws \InvalidArgumentException
     * @param FACTURAORIGINALTYPE $item
     * @return FACTURASORIGINALESTYPE
     */
    public function addToFacturaOriginal(FACTURAORIGINALTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof FACTURAORIGINALTYPE) {
            throw new \InvalidArgumentException(sprintf('The FacturaOriginal property can only contain items of type FACTURAORIGINALTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->FacturaOriginal) && count($this->FacturaOriginal) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->FacturaOriginal)), __LINE__);
        }
        $this->FacturaOriginal[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return FACTURASORIGINALESTYPE
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
