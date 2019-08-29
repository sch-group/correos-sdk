<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Resultado;


/**
 * This class stands for RespuestaPreregistroEnvioMultibulto StructType
 * @subpackage Structs
 */
class RespuestaPreregistroEnvioMultibulto extends AbstractStructBase
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
     * The ReferenciaExpedicion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:ReferenciaExpedicion
     * @var string
     */
    public $ReferenciaExpedicion;
    /**
     * The EntregaParcial
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaParcial
     * @var string
     */
    public $EntregaParcial;
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
     * The Bultos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Bultos
     * @var Bultos
     */
    public $Bultos;
    /**
     * The BultosError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultosError
     * @var BultosError
     */
    public $BultosError;
    /**
     * Constructor method for RespuestaPreregistroEnvioMultibulto
     * @uses RespuestaPreregistroEnvioMultibulto::setCodExpedicion()
     * @uses RespuestaPreregistroEnvioMultibulto::setReferenciaExpedicion()
     * @uses RespuestaPreregistroEnvioMultibulto::setEntregaParcial()
     * @uses RespuestaPreregistroEnvioMultibulto::setFechaRespuesta()
     * @uses RespuestaPreregistroEnvioMultibulto::setResultado()
     * @uses RespuestaPreregistroEnvioMultibulto::setTotalBultos()
     * @uses RespuestaPreregistroEnvioMultibulto::setBultos()
     * @uses RespuestaPreregistroEnvioMultibulto::setBultosError()
     * @param string $codExpedicion
     * @param string $referenciaExpedicion
     * @param string $entregaParcial
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param Bultos $bultos
     * @param BultosError $bultosError
     */
    public function __construct($codExpedicion = null, $referenciaExpedicion = null, $entregaParcial = null, $fechaRespuesta = null, $resultado = null, $totalBultos = null, Bultos $bultos = null, BultosError $bultosError = null)
    {
        $this
            ->setCodExpedicion($codExpedicion)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setEntregaParcial($entregaParcial)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBultos($bultos)
            ->setBultosError($bultosError);
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
     * @return RespuestaPreregistroEnvioMultibulto
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
     * Get ReferenciaExpedicion value
     * @return string|null
     */
    public function getReferenciaExpedicion()
    {
        return $this->ReferenciaExpedicion;
    }
    /**
     * Set ReferenciaExpedicion value
     * @param string $referenciaExpedicion
     * @return RespuestaPreregistroEnvioMultibulto
     */
    public function setReferenciaExpedicion($referenciaExpedicion = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaExpedicion) && !is_string($referenciaExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaExpedicion, true), gettype($referenciaExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referenciaExpedicion) && mb_strlen($referenciaExpedicion) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($referenciaExpedicion)), __LINE__);
        }
        $this->ReferenciaExpedicion = $referenciaExpedicion;
        return $this;
    }
    /**
     * Get EntregaParcial value
     * @return string|null
     */
    public function getEntregaParcial()
    {
        return $this->EntregaParcial;
    }
    /**
     * Set EntregaParcial value
     * @param string $entregaParcial
     * @return RespuestaPreregistroEnvioMultibulto
     */
    public function setEntregaParcial($entregaParcial = null)
    {
        // validation for constraint: string
        if (!is_null($entregaParcial) && !is_string($entregaParcial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaParcial, true), gettype($entregaParcial)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaParcial) && mb_strlen($entregaParcial) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($entregaParcial)), __LINE__);
        }
        $this->EntregaParcial = $entregaParcial;
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
     * @return RespuestaPreregistroEnvioMultibulto
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
     * @return RespuestaPreregistroEnvioMultibulto
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
     * @return RespuestaPreregistroEnvioMultibulto
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
     * Get Bultos value
     * @return Bultos|null
     */
    public function getBultos()
    {
        return $this->Bultos;
    }
    /**
     * Set Bultos value
     * @param Bultos $bultos
     * @return RespuestaPreregistroEnvioMultibulto
     */
    public function setBultos(Bultos $bultos = null)
    {
        $this->Bultos = $bultos;
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
     * @return RespuestaPreregistroEnvioMultibulto
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
     * @return RespuestaPreregistroEnvioMultibulto
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
