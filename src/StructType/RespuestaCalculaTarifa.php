<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaCalculaTarifa StructType
 * @subpackage Structs
 */
class RespuestaCalculaTarifa extends AbstractStructBase
{
    /**
     * The FechaRespuesta
     * Meta informations extracted from the WSDL
     * - ref: xsd:FechaRespuesta
     * @var string
     */
    public $FechaRespuesta;
    /**
     * The Resultado
     * Meta informations extracted from the WSDL
     * - ref: xsd:Resultado
     * @var string
     */
    public $Resultado;
    /**
     * The Tarifa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Tarifa
     * @var string
     */
    public $Tarifa;
    /**
     * The ErroresValidacion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ErroresValidacion
     * @var LISTAERRORESVALIDACIONTYPE
     */
    public $ErroresValidacion;
    /**
     * Constructor method for RespuestaCalculaTarifa
     * @uses RespuestaCalculaTarifa::setFechaRespuesta()
     * @uses RespuestaCalculaTarifa::setResultado()
     * @uses RespuestaCalculaTarifa::setTarifa()
     * @uses RespuestaCalculaTarifa::setErroresValidacion()
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param string $tarifa
     * @param LISTAERRORESVALIDACIONTYPE $erroresValidacion
     */
    public function __construct($fechaRespuesta = null, $resultado = null, $tarifa = null, LISTAERRORESVALIDACIONTYPE $erroresValidacion = null)
    {
        $this
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTarifa($tarifa)
            ->setErroresValidacion($erroresValidacion);
    }
    /**
     * Get FechaRespuesta value
     * @return string|null
     */
    public function getFechaRespuesta()
    {
        return $this->FechaRespuesta;
    }
    /**
     * Set FechaRespuesta value
     * @param string $fechaRespuesta
     * @return RespuestaCalculaTarifa
     */
    public function setFechaRespuesta($fechaRespuesta = null)
    {
        // validation for constraint: string
        if (!is_null($fechaRespuesta) && !is_string($fechaRespuesta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRespuesta, true), gettype($fechaRespuesta)), __LINE__);
        }
        $this->FechaRespuesta = $fechaRespuesta;
        return $this;
    }
    /**
     * Get Resultado value
     * @return string|null
     */
    public function getResultado()
    {
        return $this->Resultado;
    }
    /**
     * Set Resultado value
     * @uses Resultado::valueIsValid()
     * @uses Resultado::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resultado
     * @return RespuestaCalculaTarifa
     */
    public function setResultado($resultado = null)
    {
        // validation for constraint: enumeration
        if (!Resultado::valueIsValid($resultado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Resultado', is_array($resultado) ? implode(', ', $resultado) : var_export($resultado, true), implode(', ', Resultado::getValidValues())), __LINE__);
        }
        $this->Resultado = $resultado;
        return $this;
    }
    /**
     * Get Tarifa value
     * @return string|null
     */
    public function getTarifa()
    {
        return $this->Tarifa;
    }
    /**
     * Set Tarifa value
     * @param string $tarifa
     * @return RespuestaCalculaTarifa
     */
    public function setTarifa($tarifa = null)
    {
        // validation for constraint: string
        if (!is_null($tarifa) && !is_string($tarifa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tarifa, true), gettype($tarifa)), __LINE__);
        }
        $this->Tarifa = $tarifa;
        return $this;
    }
    /**
     * Get ErroresValidacion value
     * @return LISTAERRORESVALIDACIONTYPE|null
     */
    public function getErroresValidacion()
    {
        return $this->ErroresValidacion;
    }
    /**
     * Set ErroresValidacion value
     * @param LISTAERRORESVALIDACIONTYPE $erroresValidacion
     * @return RespuestaCalculaTarifa
     */
    public function setErroresValidacion(LISTAERRORESVALIDACIONTYPE $erroresValidacion = null)
    {
        $this->ErroresValidacion = $erroresValidacion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaCalculaTarifa
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
