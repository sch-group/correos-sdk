<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for Envios StructType
 * @subpackage Structs
 */
class Envios extends AbstractStructBase
{
    /**
     * The Envio
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var DATOSENVIOMULTIBULTOTYPE[]
     */
    public $Envio;
    /**
     * Constructor method for Envios
     * @uses Envios::setEnvio()
     * @param DATOSENVIOMULTIBULTOTYPE[] $envio
     */
    public function __construct(array $envio = array())
    {
        $this
            ->setEnvio($envio);
    }
    /**
     * Get Envio value
     * @return DATOSENVIOMULTIBULTOTYPE[]|null
     */
    public function getEnvio()
    {
        return $this->Envio;
    }
    /**
     * This method is responsible for validating the values passed to the setEnvio method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvio method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvioForArrayConstraintsFromSetEnvio(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $enviosEnvioItem) {
            // validation for constraint: itemType
            if (!$enviosEnvioItem instanceof DATOSENVIOMULTIBULTOTYPE) {
                $invalidValues[] = is_object($enviosEnvioItem) ? get_class($enviosEnvioItem) : sprintf('%s(%s)', gettype($enviosEnvioItem), var_export($enviosEnvioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Envio property can only contain items of type DATOSENVIOMULTIBULTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Envio value
     * @throws \InvalidArgumentException
     * @param DATOSENVIOMULTIBULTOTYPE[] $envio
     * @return Envios
     */
    public function setEnvio(array $envio = array())
    {
        // validation for constraint: array
        if ('' !== ($envioArrayErrorMessage = self::validateEnvioForArrayConstraintsFromSetEnvio($envio))) {
            throw new \InvalidArgumentException($envioArrayErrorMessage, __LINE__);
        }
        $this->Envio = $envio;
        return $this;
    }
    /**
     * Add item to Envio value
     * @throws \InvalidArgumentException
     * @param DATOSENVIOMULTIBULTOTYPE $item
     * @return Envios
     */
    public function addToEnvio(DATOSENVIOMULTIBULTOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DATOSENVIOMULTIBULTOTYPE) {
            throw new \InvalidArgumentException(sprintf('The Envio property can only contain items of type DATOSENVIOMULTIBULTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Envio[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return Envios
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
