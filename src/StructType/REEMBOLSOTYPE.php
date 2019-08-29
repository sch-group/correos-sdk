<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for REEMBOLSOTYPE StructType
 * @subpackage Structs
 */
class REEMBOLSOTYPE extends AbstractStructBase
{
    /**
     * The TipoReembolso
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - ref: xsd:TipoReembolso
     * @var string
     */
    public $TipoReembolso;
    /**
     * The Importe
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Importe
     * @var string
     */
    public $Importe;
    /**
     * The NumeroCuenta
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:NumeroCuenta
     * @var string
     */
    public $NumeroCuenta;
    /**
     * The Transferagrupada
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Transferagrupada
     * @var string
     */
    public $Transferagrupada;
    /**
     * Constructor method for REEMBOLSOTYPE
     * @uses REEMBOLSOTYPE::setTipoReembolso()
     * @uses REEMBOLSOTYPE::setImporte()
     * @uses REEMBOLSOTYPE::setNumeroCuenta()
     * @uses REEMBOLSOTYPE::setTransferagrupada()
     * @param string $tipoReembolso
     * @param string $importe
     * @param string $numeroCuenta
     * @param string $transferagrupada
     */
    public function __construct($tipoReembolso = null, $importe = null, $numeroCuenta = null, $transferagrupada = null)
    {
        $this
            ->setTipoReembolso($tipoReembolso)
            ->setImporte($importe)
            ->setNumeroCuenta($numeroCuenta)
            ->setTransferagrupada($transferagrupada);
    }
    /**
     * Get TipoReembolso value
     * @return string|null
     */
    public function getTipoReembolso()
    {
        return $this->TipoReembolso;
    }
    /**
     * Set TipoReembolso value
     * @param string $tipoReembolso
     * @return REEMBOLSOTYPE
     */
    public function setTipoReembolso($tipoReembolso = null)
    {
        // validation for constraint: string
        if (!is_null($tipoReembolso) && !is_string($tipoReembolso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoReembolso, true), gettype($tipoReembolso)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($tipoReembolso) && mb_strlen($tipoReembolso) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($tipoReembolso)), __LINE__);
        }
        $this->TipoReembolso = $tipoReembolso;
        return $this;
    }
    /**
     * Get Importe value
     * @return string|null
     */
    public function getImporte()
    {
        return $this->Importe;
    }
    /**
     * Set Importe value
     * @param string $importe
     * @return REEMBOLSOTYPE
     */
    public function setImporte($importe = null)
    {
        // validation for constraint: string
        if (!is_null($importe) && !is_string($importe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importe, true), gettype($importe)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($importe) && mb_strlen($importe) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($importe)), __LINE__);
        }
        $this->Importe = $importe;
        return $this;
    }
    /**
     * Get NumeroCuenta value
     * @return string|null
     */
    public function getNumeroCuenta()
    {
        return $this->NumeroCuenta;
    }
    /**
     * Set NumeroCuenta value
     * @param string $numeroCuenta
     * @return REEMBOLSOTYPE
     */
    public function setNumeroCuenta($numeroCuenta = null)
    {
        // validation for constraint: string
        if (!is_null($numeroCuenta) && !is_string($numeroCuenta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCuenta, true), gettype($numeroCuenta)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numeroCuenta) && mb_strlen($numeroCuenta) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numeroCuenta)), __LINE__);
        }
        $this->NumeroCuenta = $numeroCuenta;
        return $this;
    }
    /**
     * Get Transferagrupada value
     * @return string|null
     */
    public function getTransferagrupada()
    {
        return $this->Transferagrupada;
    }
    /**
     * Set Transferagrupada value
     * @param string $transferagrupada
     * @return REEMBOLSOTYPE
     */
    public function setTransferagrupada($transferagrupada = null)
    {
        // validation for constraint: string
        if (!is_null($transferagrupada) && !is_string($transferagrupada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferagrupada, true), gettype($transferagrupada)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($transferagrupada) && mb_strlen($transferagrupada) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($transferagrupada)), __LINE__);
        }
        $this->Transferagrupada = $transferagrupada;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return REEMBOLSOTYPE
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
