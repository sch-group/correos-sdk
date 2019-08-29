<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for Destinatarios StructType
 * @subpackage Structs
 */
class Destinatarios extends AbstractStructBase
{
    /**
     * The Destinatario
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * @var DATOSDESTINATARIOCNENVIOTYPE[]
     */
    public $Destinatario;
    /**
     * Constructor method for Destinatarios
     * @uses Destinatarios::setDestinatario()
     * @param DATOSDESTINATARIOCNENVIOTYPE[] $destinatario
     */
    public function __construct(array $destinatario = array())
    {
        $this
            ->setDestinatario($destinatario);
    }
    /**
     * Get Destinatario value
     * @return DATOSDESTINATARIOCNENVIOTYPE[]|null
     */
    public function getDestinatario()
    {
        return $this->Destinatario;
    }
    /**
     * This method is responsible for validating the values passed to the setDestinatario method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestinatario method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinatarioForArrayConstraintsFromSetDestinatario(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinatariosDestinatarioItem) {
            // validation for constraint: itemType
            if (!$destinatariosDestinatarioItem instanceof DATOSDESTINATARIOCNENVIOTYPE) {
                $invalidValues[] = is_object($destinatariosDestinatarioItem) ? get_class($destinatariosDestinatarioItem) : sprintf('%s(%s)', gettype($destinatariosDestinatarioItem), var_export($destinatariosDestinatarioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Destinatario property can only contain items of type DATOSDESTINATARIOCNENVIOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Destinatario value
     * @throws \InvalidArgumentException
     * @param DATOSDESTINATARIOCNENVIOTYPE[] $destinatario
     * @return Destinatarios
     */
    public function setDestinatario(array $destinatario = array())
    {
        // validation for constraint: array
        if ('' !== ($destinatarioArrayErrorMessage = self::validateDestinatarioForArrayConstraintsFromSetDestinatario($destinatario))) {
            throw new \InvalidArgumentException($destinatarioArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($destinatario) && count($destinatario) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($destinatario)), __LINE__);
        }
        $this->Destinatario = $destinatario;
        return $this;
    }
    /**
     * Add item to Destinatario value
     * @throws \InvalidArgumentException
     * @param DATOSDESTINATARIOCNENVIOTYPE $item
     * @return Destinatarios
     */
    public function addToDestinatario(DATOSDESTINATARIOCNENVIOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSDESTINATARIOCNENVIOTYPE) {
            throw new \InvalidArgumentException(sprintf('The Destinatario property can only contain items of type DATOSDESTINATARIOCNENVIOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->Destinatario) && count($this->Destinatario) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->Destinatario)), __LINE__);
        }
        $this->Destinatario[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return Destinatarios
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
