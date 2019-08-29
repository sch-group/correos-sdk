<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\TipoPeso;


/**
 * This class stands for CalculaTarifa StructType
 * @subpackage Structs
 */
class CalculaTarifa extends AbstractStructBase
{
    /**
     * The FechaOperacion
     * Meta informations extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string
     */
    public $FechaOperacion;
    /**
     * The CodEtiquetador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:CodEtiquetador
     * @var string
     */
    public $CodEtiquetador;
    /**
     * The CPRemitente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * @var string
     */
    public $CPRemitente;
    /**
     * The CPDestinatario
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * @var string
     */
    public $CPDestinatario;
    /**
     * The CodProducto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string
     */
    public $CodProducto;
    /**
     * The TipoPeso
     * Meta informations extracted from the WSDL
     * - ref: xsd:TipoPeso
     * @var string
     */
    public $TipoPeso;
    /**
     * The Valor
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:Valor
     * @var string
     */
    public $Valor;
    /**
     * Constructor method for CalculaTarifa
     * @uses CalculaTarifa::setFechaOperacion()
     * @uses CalculaTarifa::setCodEtiquetador()
     * @uses CalculaTarifa::setCPRemitente()
     * @uses CalculaTarifa::setCPDestinatario()
     * @uses CalculaTarifa::setCodProducto()
     * @uses CalculaTarifa::setTipoPeso()
     * @uses CalculaTarifa::setValor()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $cPRemitente
     * @param string $cPDestinatario
     * @param string $codProducto
     * @param string $tipoPeso
     * @param string $valor
     */
    public function __construct($fechaOperacion = null, $codEtiquetador = null, $cPRemitente = null, $cPDestinatario = null, $codProducto = null, $tipoPeso = null, $valor = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setCPRemitente($cPRemitente)
            ->setCPDestinatario($cPDestinatario)
            ->setCodProducto($codProducto)
            ->setTipoPeso($tipoPeso)
            ->setValor($valor);
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion()
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return CalculaTarifa
     */
    public function setFechaOperacion($fechaOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
        return $this;
    }
    /**
     * Get CodEtiquetador value
     * @return string|null
     */
    public function getCodEtiquetador()
    {
        return $this->CodEtiquetador;
    }
    /**
     * Set CodEtiquetador value
     * @param string $codEtiquetador
     * @return CalculaTarifa
     */
    public function setCodEtiquetador($codEtiquetador = null)
    {
        // validation for constraint: string
        if (!is_null($codEtiquetador) && !is_string($codEtiquetador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEtiquetador, true), gettype($codEtiquetador)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($codEtiquetador) && mb_strlen($codEtiquetador) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen($codEtiquetador)), __LINE__);
        }
        $this->CodEtiquetador = $codEtiquetador;
        return $this;
    }
    /**
     * Get CPRemitente value
     * @return string|null
     */
    public function getCPRemitente()
    {
        return $this->CPRemitente;
    }
    /**
     * Set CPRemitente value
     * @param string $cPRemitente
     * @return CalculaTarifa
     */
    public function setCPRemitente($cPRemitente = null)
    {
        // validation for constraint: string
        if (!is_null($cPRemitente) && !is_string($cPRemitente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPRemitente, true), gettype($cPRemitente)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cPRemitente) && mb_strlen($cPRemitente) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($cPRemitente)), __LINE__);
        }
        $this->CPRemitente = $cPRemitente;
        return $this;
    }
    /**
     * Get CPDestinatario value
     * @return string|null
     */
    public function getCPDestinatario()
    {
        return $this->CPDestinatario;
    }
    /**
     * Set CPDestinatario value
     * @param string $cPDestinatario
     * @return CalculaTarifa
     */
    public function setCPDestinatario($cPDestinatario = null)
    {
        // validation for constraint: string
        if (!is_null($cPDestinatario) && !is_string($cPDestinatario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPDestinatario, true), gettype($cPDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cPDestinatario) && mb_strlen($cPDestinatario) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($cPDestinatario)), __LINE__);
        }
        $this->CPDestinatario = $cPDestinatario;
        return $this;
    }
    /**
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto()
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return CalculaTarifa
     */
    public function setCodProducto($codProducto = null)
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen($codProducto) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        return $this;
    }
    /**
     * Get TipoPeso value
     * @return string|null
     */
    public function getTipoPeso()
    {
        return $this->TipoPeso;
    }
    /**
     * Set TipoPeso value
     * @uses TipoPeso::valueIsValid()
     * @uses TipoPeso::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoPeso
     * @return CalculaTarifa
     */
    public function setTipoPeso($tipoPeso = null)
    {
        // validation for constraint: enumeration
        if (!TipoPeso::valueIsValid($tipoPeso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoPeso', is_array($tipoPeso) ? implode(', ', $tipoPeso) : var_export($tipoPeso, true), implode(', ', TipoPeso::getValidValues())), __LINE__);
        }
        $this->TipoPeso = $tipoPeso;
        return $this;
    }
    /**
     * Get Valor value
     * @return string|null
     */
    public function getValor()
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param string $valor
     * @return CalculaTarifa
     */
    public function setValor($valor = null)
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($valor) && mb_strlen($valor) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($valor)), __LINE__);
        }
        $this->Valor = $valor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return CalculaTarifa
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
