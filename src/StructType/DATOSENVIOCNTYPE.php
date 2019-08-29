<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSENVIOCNTYPE StructType
 * @subpackage Structs
 */
class DATOSENVIOCNTYPE extends DATOSENVIOREDUCIDOTYPE
{
    /**
     * The ValoresAnadidos
     * @var VACNTYPE
     */
    public $ValoresAnadidos;
    /**
     * Constructor method for DATOSENVIOCNTYPE
     * @uses DATOSENVIOCNTYPE::setValoresAnadidos()
     * @param VACNTYPE $valoresAnadidos
     */
    public function __construct(VACNTYPE $valoresAnadidos = null)
    {
        $this
            ->setValoresAnadidos($valoresAnadidos);
    }
    /**
     * Get ValoresAnadidos value
     * @return VACNTYPE|null
     */
    public function getValoresAnadidos()
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param VACNTYPE $valoresAnadidos
     * @return DATOSENVIOCNTYPE
     */
    public function setValoresAnadidos(VACNTYPE $valoresAnadidos = null)
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSENVIOCNTYPE
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
