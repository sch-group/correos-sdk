<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaSolicitudDocumentacionAduaneraCN23CP71 StructType
 * @subpackage Structs
 */
class RespuestaSolicitudDocumentacionAduaneraCN23CP71 extends AbstractStructBase
{
    /**
     * The Fichero
     * Meta informations extracted from the WSDL
     * - ref: xsd:Fichero
     * @var string
     */
    public $Fichero;
    /**
     * The Resultado
     * Meta informations extracted from the WSDL
     * - ref: xsd:Resultado
     * @var string
     */
    public $Resultado;
    /**
     * The MotivoError
     * Meta informations extracted from the WSDL
     * - ref: xsd:MotivoError
     * @var string
     */
    public $MotivoError;
    /**
     * Constructor method for RespuestaSolicitudDocumentacionAduaneraCN23CP71
     * @uses RespuestaSolicitudDocumentacionAduaneraCN23CP71::setFichero()
     * @uses RespuestaSolicitudDocumentacionAduaneraCN23CP71::setResultado()
     * @uses RespuestaSolicitudDocumentacionAduaneraCN23CP71::setMotivoError()
     * @param string $fichero
     * @param string $resultado
     * @param string $motivoError
     */
    public function __construct($fichero = null, $resultado = null, $motivoError = null)
    {
        $this
            ->setFichero($fichero)
            ->setResultado($resultado)
            ->setMotivoError($motivoError);
    }
    /**
     * Get Fichero value
     * @return string|null
     */
    public function getFichero()
    {
        return $this->Fichero;
    }
    /**
     * Set Fichero value
     * @param string $fichero
     * @return RespuestaSolicitudDocumentacionAduaneraCN23CP71
     */
    public function setFichero($fichero = null)
    {
        // validation for constraint: string
        if (!is_null($fichero) && !is_string($fichero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fichero, true), gettype($fichero)), __LINE__);
        }
        $this->Fichero = $fichero;
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
     * @return RespuestaSolicitudDocumentacionAduaneraCN23CP71
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
     * Get MotivoError value
     * @return string|null
     */
    public function getMotivoError()
    {
        return $this->MotivoError;
    }
    /**
     * Set MotivoError value
     * @param string $motivoError
     * @return RespuestaSolicitudDocumentacionAduaneraCN23CP71
     */
    public function setMotivoError($motivoError = null)
    {
        // validation for constraint: string
        if (!is_null($motivoError) && !is_string($motivoError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($motivoError, true), gettype($motivoError)), __LINE__);
        }
        $this->MotivoError = $motivoError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaSolicitudDocumentacionAduaneraCN23CP71
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
