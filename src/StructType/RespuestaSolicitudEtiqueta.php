<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaSolicitudEtiqueta StructType
 * @subpackage Structs
 */
class RespuestaSolicitudEtiqueta extends AbstractStructBase
{
    /**
     * The CodExpedicion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minOccurs: 0
     * - ref: xsd:CodExpedicion
     * @var string
     */
    public $CodExpedicion;
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
     * Constructor method for RespuestaSolicitudEtiqueta
     * @uses RespuestaSolicitudEtiqueta::setCodExpedicion()
     * @uses RespuestaSolicitudEtiqueta::setFechaRespuesta()
     * @uses RespuestaSolicitudEtiqueta::setResultado()
     * @uses RespuestaSolicitudEtiqueta::setTotalBultos()
     * @uses RespuestaSolicitudEtiqueta::setBulto()
     * @param string $codExpedicion
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param DATOSBULTOTYPE $bulto
     */
    public function __construct($codExpedicion = null, $fechaRespuesta = null, $resultado = null, $totalBultos = null, DATOSBULTOTYPE $bulto = null)
    {
        $this
            ->setCodExpedicion($codExpedicion)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBulto($bulto);
    }
    /**
     * Get CodExpedicion value
     * @return string|null
     */
    public function getCodExpedicion()
    {
        return $this->CodExpedicion;
    }
    /**
     * Set CodExpedicion value
     * @param string $codExpedicion
     * @return RespuestaSolicitudEtiqueta
     */
    public function setCodExpedicion($codExpedicion = null)
    {
        // validation for constraint: string
        if (!is_null($codExpedicion) && !is_string($codExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codExpedicion, true), gettype($codExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($codExpedicion) && mb_strlen($codExpedicion) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen($codExpedicion)), __LINE__);
        }
        $this->CodExpedicion = $codExpedicion;
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
     * @return RespuestaSolicitudEtiqueta
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
     * @return RespuestaSolicitudEtiqueta
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
     * @return RespuestaSolicitudEtiqueta
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
     * @return RespuestaSolicitudEtiqueta
     */
    public function setBulto(DATOSBULTOTYPE $bulto = null)
    {
        $this->Bulto = $bulto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return RespuestaSolicitudEtiqueta
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
