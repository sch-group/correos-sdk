<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaSolicitudDocumentacionAduanera StructType
 * @subpackage Structs
 */
class RespuestaSolicitudDocumentacionAduanera extends AbstractStructBase
{
    /**
     * The Fichero
     * Meta informations extracted from the WSDL
     * - ref: xsd:Fichero
     * @var string
     */
    public $Fichero;
    /**
     * The CodEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string
     */
    public $CodEnvio;
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
     * Constructor method for RespuestaSolicitudDocumentacionAduanera
     * @uses RespuestaSolicitudDocumentacionAduanera::setFichero()
     * @uses RespuestaSolicitudDocumentacionAduanera::setCodEnvio()
     * @uses RespuestaSolicitudDocumentacionAduanera::setResultado()
     * @uses RespuestaSolicitudDocumentacionAduanera::setMotivoError()
     * @param string $fichero
     * @param string $codEnvio
     * @param string $resultado
     * @param string $motivoError
     */
    public function __construct($fichero = null, $codEnvio = null, $resultado = null, $motivoError = null)
    {
        $this
            ->setFichero($fichero)
            ->setCodEnvio($codEnvio)
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
     * @return RespuestaSolicitudDocumentacionAduanera
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
     * @return RespuestaSolicitudDocumentacionAduanera
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
     * @return RespuestaSolicitudDocumentacionAduanera
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
     * @return RespuestaSolicitudDocumentacionAduanera
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
     * @return RespuestaSolicitudDocumentacionAduanera
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
