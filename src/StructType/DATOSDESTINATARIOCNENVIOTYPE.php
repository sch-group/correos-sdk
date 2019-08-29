<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSDESTINATARIOCNENVIOTYPE StructType
 * @subpackage Structs
 */
class DATOSDESTINATARIOCNENVIOTYPE extends DATOSDESTINATARIOCNTYPE
{
    /**
     * The Envio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DATOSENVIOCNCODENVIOTYPE
     */
    public $Envio;
    /**
     * Constructor method for DATOSDESTINATARIOCNENVIOTYPE
     * @uses DATOSDESTINATARIOCNENVIOTYPE::setEnvio()
     * @param DATOSENVIOCNCODENVIOTYPE $envio
     */
    public function __construct(DATOSENVIOCNCODENVIOTYPE $envio = null)
    {
        $this
            ->setEnvio($envio);
    }
    /**
     * Get Envio value
     * @return DATOSENVIOCNCODENVIOTYPE|null
     */
    public function getEnvio()
    {
        return $this->Envio;
    }
    /**
     * Set Envio value
     * @param DATOSENVIOCNCODENVIOTYPE $envio
     * @return DATOSDESTINATARIOCNENVIOTYPE
     */
    public function setEnvio(DATOSENVIOCNCODENVIOTYPE $envio = null)
    {
        $this->Envio = $envio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSDESTINATARIOCNENVIOTYPE
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
