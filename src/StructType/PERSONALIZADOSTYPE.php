<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PERSONALIZADOSTYPE StructType
 * @subpackage Structs
 */
class PERSONALIZADOSTYPE extends AbstractStructBase
{
    /**
     * The Personalizado
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var PERSONALIZADOTYPE[]
     */
    public $Personalizado;
    /**
     * Constructor method for PERSONALIZADOSTYPE
     * @uses PERSONALIZADOSTYPE::setPersonalizado()
     * @param PERSONALIZADOTYPE[] $personalizado
     */
    public function __construct(array $personalizado = array())
    {
        $this
            ->setPersonalizado($personalizado);
    }
    /**
     * Get Personalizado value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return PERSONALIZADOTYPE[]|null
     */
    public function getPersonalizado()
    {
        return isset($this->Personalizado) ? $this->Personalizado : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonalizado method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonalizado method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonalizadoForArrayConstraintsFromSetPersonalizado(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pERSONALIZADOSTYPEPersonalizadoItem) {
            // validation for constraint: itemType
            if (!$pERSONALIZADOSTYPEPersonalizadoItem instanceof PERSONALIZADOTYPE) {
                $invalidValues[] = is_object($pERSONALIZADOSTYPEPersonalizadoItem) ? get_class($pERSONALIZADOSTYPEPersonalizadoItem) : sprintf('%s(%s)', gettype($pERSONALIZADOSTYPEPersonalizadoItem), var_export($pERSONALIZADOSTYPEPersonalizadoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Personalizado property can only contain items of type PERSONALIZADOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Personalizado value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param PERSONALIZADOTYPE[] $personalizado
     * @return PERSONALIZADOSTYPE
     */
    public function setPersonalizado(array $personalizado = array())
    {
        // validation for constraint: array
        if ('' !== ($personalizadoArrayErrorMessage = self::validatePersonalizadoForArrayConstraintsFromSetPersonalizado($personalizado))) {
            throw new \InvalidArgumentException($personalizadoArrayErrorMessage, __LINE__);
        }
        if (is_null($personalizado) || (is_array($personalizado) && empty($personalizado))) {
            unset($this->Personalizado);
        } else {
            $this->Personalizado = $personalizado;
        }
        return $this;
    }
    /**
     * Add item to Personalizado value
     * @throws \InvalidArgumentException
     * @param PERSONALIZADOTYPE $item
     * @return PERSONALIZADOSTYPE
     */
    public function addToPersonalizado(PERSONALIZADOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof PERSONALIZADOTYPE) {
            throw new \InvalidArgumentException(sprintf('The Personalizado property can only contain items of type PERSONALIZADOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Personalizado[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PERSONALIZADOSTYPE
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
