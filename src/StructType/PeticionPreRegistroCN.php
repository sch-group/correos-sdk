<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PeticionPreRegistroCN StructType
 * @subpackage Structs
 */
class PeticionPreRegistroCN extends AbstractStructBase
{
    /**
     * The NumContrato
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumContrato
     * @var string
     */
    public $NumContrato;
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
     * The FechaOperacion
     * Meta informations extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string
     */
    public $FechaOperacion;
    /**
     * The NumCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumCliente
     * @var string
     */
    public $NumCliente;
    /**
     * The Care
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Care
     * @var string
     */
    public $Care;
    /**
     * The TotalBultos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int
     */
    public $TotalBultos;
    /**
     * The Remitente
     * @var DATOSREMITENTECNTYPE
     */
    public $Remitente;
    /**
     * The Destinatarios
     * Meta informations extracted from the WSDL
     * - ref: xsd:Destinatarios
     * @var Destinatarios
     */
    public $Destinatarios;
    /**
     * Constructor method for PeticionPreRegistroCN
     * @uses PeticionPreRegistroCN::setNumContrato()
     * @uses PeticionPreRegistroCN::setCodEtiquetador()
     * @uses PeticionPreRegistroCN::setFechaOperacion()
     * @uses PeticionPreRegistroCN::setNumCliente()
     * @uses PeticionPreRegistroCN::setCare()
     * @uses PeticionPreRegistroCN::setTotalBultos()
     * @uses PeticionPreRegistroCN::setRemitente()
     * @uses PeticionPreRegistroCN::setDestinatarios()
     * @param string $numContrato
     * @param string $codEtiquetador
     * @param string $fechaOperacion
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param DATOSREMITENTECNTYPE $remitente
     * @param Destinatarios $destinatarios
     */
    public function __construct($numContrato = null, $codEtiquetador = null, $fechaOperacion = null, $numCliente = null, $care = null, $totalBultos = null, DATOSREMITENTECNTYPE $remitente = null, Destinatarios $destinatarios = null)
    {
        $this
            ->setNumContrato($numContrato)
            ->setCodEtiquetador($codEtiquetador)
            ->setFechaOperacion($fechaOperacion)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setRemitente($remitente)
            ->setDestinatarios($destinatarios);
    }
    /**
     * Get NumContrato value
     * @return string|null
     */
    public function getNumContrato()
    {
        return $this->NumContrato;
    }
    /**
     * Set NumContrato value
     * @param string $numContrato
     * @return PeticionPreRegistroCN
     */
    public function setNumContrato($numContrato = null)
    {
        // validation for constraint: string
        if (!is_null($numContrato) && !is_string($numContrato)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numContrato, true), gettype($numContrato)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numContrato) && mb_strlen($numContrato) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numContrato)), __LINE__);
        }
        $this->NumContrato = $numContrato;
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
     * @return PeticionPreRegistroCN
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
     * @return PeticionPreRegistroCN
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
     * Get NumCliente value
     * @return string|null
     */
    public function getNumCliente()
    {
        return $this->NumCliente;
    }
    /**
     * Set NumCliente value
     * @param string $numCliente
     * @return PeticionPreRegistroCN
     */
    public function setNumCliente($numCliente = null)
    {
        // validation for constraint: string
        if (!is_null($numCliente) && !is_string($numCliente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCliente, true), gettype($numCliente)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numCliente) && mb_strlen($numCliente) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numCliente)), __LINE__);
        }
        $this->NumCliente = $numCliente;
        return $this;
    }
    /**
     * Get Care value
     * @return string|null
     */
    public function getCare()
    {
        return $this->Care;
    }
    /**
     * Set Care value
     * @param string $care
     * @return PeticionPreRegistroCN
     */
    public function setCare($care = null)
    {
        // validation for constraint: string
        if (!is_null($care) && !is_string($care)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($care, true), gettype($care)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($care) && mb_strlen($care) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($care)), __LINE__);
        }
        $this->Care = $care;
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
     * @return PeticionPreRegistroCN
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
     * Get Remitente value
     * @return DATOSREMITENTECNTYPE|null
     */
    public function getRemitente()
    {
        return $this->Remitente;
    }
    /**
     * Set Remitente value
     * @param DATOSREMITENTECNTYPE $remitente
     * @return PeticionPreRegistroCN
     */
    public function setRemitente(DATOSREMITENTECNTYPE $remitente = null)
    {
        $this->Remitente = $remitente;
        return $this;
    }
    /**
     * Get Destinatarios value
     * @return Destinatarios|null
     */
    public function getDestinatarios()
    {
        return $this->Destinatarios;
    }
    /**
     * Set Destinatarios value
     * @param Destinatarios $destinatarios
     * @return PeticionPreRegistroCN
     */
    public function setDestinatarios(Destinatarios $destinatarios = null)
    {
        $this->Destinatarios = $destinatarios;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionPreRegistroCN
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
