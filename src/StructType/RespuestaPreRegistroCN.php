<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaPreRegistroCN StructType
 * @subpackage Structs
 */
class RespuestaPreRegistroCN extends AbstractStructBase
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
     * The BultosSimples
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultosSimples
     * @var BultosSimples
     */
    public $BultosSimples;
    /**
     * The BultosError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultosError
     * @var BultosError
     */
    public $BultosError;
    /**
     * Constructor method for RespuestaPreRegistroCN
     * @uses RespuestaPreRegistroCN::setFechaRespuesta()
     * @uses RespuestaPreRegistroCN::setResultado()
     * @uses RespuestaPreRegistroCN::setTotalBultos()
     * @uses RespuestaPreRegistroCN::setBultosSimples()
     * @uses RespuestaPreRegistroCN::setBultosError()
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param BultosSimples $bultosSimples
     * @param BultosError $bultosError
     */
    public function __construct($fechaRespuesta = null, $resultado = null, $totalBultos = null, BultosSimples $bultosSimples = null, BultosError $bultosError = null)
    {
        $this
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBultosSimples($bultosSimples)
            ->setBultosError($bultosError);
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
     * @return RespuestaPreRegistroCN
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
     * @return RespuestaPreRegistroCN
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
     * @return RespuestaPreRegistroCN
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
     * Get BultosSimples value
     * @return BultosSimples|null
     */
    public function getBultosSimples()
    {
        return $this->BultosSimples;
    }
    /**
     * Set BultosSimples value
     * @param BultosSimples $bultosSimples
     * @return RespuestaPreRegistroCN
     */
    public function setBultosSimples(BultosSimples $bultosSimples = null)
    {
        $this->BultosSimples = $bultosSimples;
        return $this;
    }
    /**
     * Get BultosError value
     * @return BultosError|null
     */
    public function getBultosError()
    {
        return $this->BultosError;
    }
    /**
     * Set BultosError value
     * @param BultosError $bultosError
     * @return RespuestaPreRegistroCN
     */
    public function setBultosError(BultosError $bultosError = null)
    {
        $this->BultosError = $bultosError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaPreRegistroCN
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
