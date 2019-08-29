<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PIEZASDELCONTENIDOTYPE StructType
 * @subpackage Structs
 */
class PIEZASDELCONTENIDOTYPE extends AbstractStructBase
{
    /**
     * The PiezaDelContenido
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * - nillable: true
     * @var PIEZADELCONTENIDOTYPE[]
     */
    public $PiezaDelContenido;
    /**
     * Constructor method for PIEZASDELCONTENIDOTYPE
     * @uses PIEZASDELCONTENIDOTYPE::setPiezaDelContenido()
     * @param PIEZADELCONTENIDOTYPE[] $piezaDelContenido
     */
    public function __construct(array $piezaDelContenido = array())
    {
        $this
            ->setPiezaDelContenido($piezaDelContenido);
    }
    /**
     * Get PiezaDelContenido value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return PIEZADELCONTENIDOTYPE[]|null
     */
    public function getPiezaDelContenido()
    {
        return isset($this->PiezaDelContenido) ? $this->PiezaDelContenido : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPiezaDelContenido method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPiezaDelContenido method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePiezaDelContenidoForArrayConstraintsFromSetPiezaDelContenido(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem) {
            // validation for constraint: itemType
            if (!$pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem instanceof PIEZADELCONTENIDOTYPE) {
                $invalidValues[] = is_object($pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem) ? get_class($pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem) : sprintf('%s(%s)', gettype($pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem), var_export($pIEZASDELCONTENIDOTYPEPiezaDelContenidoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PiezaDelContenido property can only contain items of type PIEZADELCONTENIDOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PiezaDelContenido value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param PIEZADELCONTENIDOTYPE[] $piezaDelContenido
     * @return PIEZASDELCONTENIDOTYPE
     */
    public function setPiezaDelContenido(array $piezaDelContenido = array())
    {
        // validation for constraint: array
        if ('' !== ($piezaDelContenidoArrayErrorMessage = self::validatePiezaDelContenidoForArrayConstraintsFromSetPiezaDelContenido($piezaDelContenido))) {
            throw new \InvalidArgumentException($piezaDelContenidoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($piezaDelContenido) && count($piezaDelContenido) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 20', count($piezaDelContenido)), __LINE__);
        }
        if (is_null($piezaDelContenido) || (is_array($piezaDelContenido) && empty($piezaDelContenido))) {
            unset($this->PiezaDelContenido);
        } else {
            $this->PiezaDelContenido = $piezaDelContenido;
        }
        return $this;
    }
    /**
     * Add item to PiezaDelContenido value
     * @throws \InvalidArgumentException
     * @param PIEZADELCONTENIDOTYPE $item
     * @return PIEZASDELCONTENIDOTYPE
     */
    public function addToPiezaDelContenido(PIEZADELCONTENIDOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof PIEZADELCONTENIDOTYPE) {
            throw new \InvalidArgumentException(sprintf('The PiezaDelContenido property can only contain items of type PIEZADELCONTENIDOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($this->PiezaDelContenido) && count($this->PiezaDelContenido) >= 20) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 20', count($this->PiezaDelContenido)), __LINE__);
        }
        $this->PiezaDelContenido[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PIEZASDELCONTENIDOTYPE
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
