<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaPreRegistroCNCodEnvio StructType
 * @subpackage Structs
 */
class RespuestaPreRegistroCNCodEnvio extends AbstractStructBase
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
     * The TotalBultos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int
     */
    public $TotalBultos;
    /**
     * The Bulto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Bulto
     * @var DATOSBULTOTYPE
     */
    public $Bulto;
    /**
     * The BultoError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultoError
     * @var DATOSBULTOERRORTYPE
     */
    public $BultoError;
    /**
     * Constructor method for RespuestaPreRegistroCNCodEnvio
     * @uses RespuestaPreRegistroCNCodEnvio::setFechaRespuesta()
     * @uses RespuestaPreRegistroCNCodEnvio::setResultado()
     * @uses RespuestaPreRegistroCNCodEnvio::setTotalBultos()
     * @uses RespuestaPreRegistroCNCodEnvio::setBulto()
     * @uses RespuestaPreRegistroCNCodEnvio::setBultoError()
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param DATOSBULTOTYPE $bulto
     * @param DATOSBULTOERRORTYPE $bultoError
     */
    public function __construct($fechaRespuesta = null, $resultado = null, $totalBultos = null, DATOSBULTOTYPE $bulto = null, DATOSBULTOERRORTYPE $bultoError = null)
    {
        $this
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBulto($bulto)
            ->setBultoError($bultoError);
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
     * @return RespuestaPreRegistroCNCodEnvio
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
     * @return RespuestaPreRegistroCNCodEnvio
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
     * Get TotalBultos value
     * @return int|null
     */
    public function getTotalBultos()
    {
        return $this->TotalBultos;
    }
    /**
     * Set TotalBultos value
     * @param int $totalBultos
     * @return RespuestaPreRegistroCNCodEnvio
     */
    public function setTotalBultos($totalBultos = null)
    {
        // validation for constraint: int
        if (!is_null($totalBultos) && !(is_int($totalBultos) || ctype_digit($totalBultos))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBultos, true), gettype($totalBultos)), __LINE__);
        }
        $this->TotalBultos = $totalBultos;
        return $this;
    }
    /**
     * Get Bulto value
     * @return DATOSBULTOTYPE|null
     */
    public function getBulto()
    {
        return $this->Bulto;
    }
    /**
     * Set Bulto value
     * @param DATOSBULTOTYPE $bulto
     * @return RespuestaPreRegistroCNCodEnvio
     */
    public function setBulto(DATOSBULTOTYPE $bulto = null)
    {
        $this->Bulto = $bulto;
        return $this;
    }
    /**
     * Get BultoError value
     * @return DATOSBULTOERRORTYPE|null
     */
    public function getBultoError()
    {
        return $this->BultoError;
    }
    /**
     * Set BultoError value
     * @param DATOSBULTOERRORTYPE $bultoError
     * @return RespuestaPreRegistroCNCodEnvio
     */
    public function setBultoError(DATOSBULTOERRORTYPE $bultoError = null)
    {
        $this->BultoError = $bultoError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaPreRegistroCNCodEnvio
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
