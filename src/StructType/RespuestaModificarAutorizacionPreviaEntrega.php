<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaModificarAutorizacionPreviaEntrega StructType
 * @subpackage Structs
 */
class RespuestaModificarAutorizacionPreviaEntrega extends AbstractStructBase
{
    /**
     * The CodEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodEnvio
     * @var string
     */
    public $CodEnvio;
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
     * The Error
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Error
     * @var string
     */
    public $Error;
    /**
     * The DescError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescError
     * @var string
     */
    public $DescError;
    /**
     * Constructor method for RespuestaModificarAutorizacionPreviaEntrega
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setCodEnvio()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setFechaRespuesta()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setResultado()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setError()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setDescError()
     * @param string $codEnvio
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param string $error
     * @param string $descError
     */
    public function __construct($codEnvio = null, $fechaRespuesta = null, $resultado = null, $error = null, $descError = null)
    {
        $this
            ->setCodEnvio($codEnvio)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setError($error)
            ->setDescError($descError);
    }
    /**
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio()
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return RespuestaModificarAutorizacionPreviaEntrega
     */
    public function setCodEnvio($codEnvio = null)
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen($codEnvio) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        return $this;
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
     * @return RespuestaModificarAutorizacionPreviaEntrega
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
     * @return RespuestaModificarAutorizacionPreviaEntrega
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
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $error
     * @return RespuestaModificarAutorizacionPreviaEntrega
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Get DescError value
     * @return string|null
     */
    public function getDescError()
    {
        return $this->DescError;
    }
    /**
     * Set DescError value
     * @param string $descError
     * @return RespuestaModificarAutorizacionPreviaEntrega
     */
    public function setDescError($descError = null)
    {
        // validation for constraint: string
        if (!is_null($descError) && !is_string($descError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descError, true), gettype($descError)), __LINE__);
        }
        $this->DescError = $descError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaModificarAutorizacionPreviaEntrega
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
