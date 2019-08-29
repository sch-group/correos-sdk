<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\ModDevEtiqueta;


/**
 * This class stands for PeticionPreRegistroCNCodEnvio StructType
 * @subpackage Structs
 */
class PeticionPreRegistroCNCodEnvio extends AbstractStructBase
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
     * The Destinatario
     * @var DATOSDESTINATARIOCNTYPE
     */
    public $Destinatario;
    /**
     * The Envio
     * @var DATOSENVIOCNTYPE
     */
    public $Envio;
    /**
     * The ModDevEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string
     */
    public $ModDevEtiqueta;
    /**
     * Constructor method for PeticionPreRegistroCNCodEnvio
     * @uses PeticionPreRegistroCNCodEnvio::setNumContrato()
     * @uses PeticionPreRegistroCNCodEnvio::setCodEtiquetador()
     * @uses PeticionPreRegistroCNCodEnvio::setFechaOperacion()
     * @uses PeticionPreRegistroCNCodEnvio::setNumCliente()
     * @uses PeticionPreRegistroCNCodEnvio::setCare()
     * @uses PeticionPreRegistroCNCodEnvio::setTotalBultos()
     * @uses PeticionPreRegistroCNCodEnvio::setRemitente()
     * @uses PeticionPreRegistroCNCodEnvio::setDestinatario()
     * @uses PeticionPreRegistroCNCodEnvio::setEnvio()
     * @uses PeticionPreRegistroCNCodEnvio::setModDevEtiqueta()
     * @param string $numContrato
     * @param string $codEtiquetador
     * @param string $fechaOperacion
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param DATOSREMITENTECNTYPE $remitente
     * @param DATOSDESTINATARIOCNTYPE $destinatario
     * @param DATOSENVIOCNTYPE $envio
     * @param string $modDevEtiqueta
     */
    public function __construct($numContrato = null, $codEtiquetador = null, $fechaOperacion = null, $numCliente = null, $care = null, $totalBultos = null, DATOSREMITENTECNTYPE $remitente = null, DATOSDESTINATARIOCNTYPE $destinatario = null, DATOSENVIOCNTYPE $envio = null, $modDevEtiqueta = null)
    {
        $this
            ->setNumContrato($numContrato)
            ->setCodEtiquetador($codEtiquetador)
            ->setFechaOperacion($fechaOperacion)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setRemitente($remitente)
            ->setDestinatario($destinatario)
            ->setEnvio($envio)
            ->setModDevEtiqueta($modDevEtiqueta);
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
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
     * @return PeticionPreRegistroCNCodEnvio
     */
    public function setRemitente(DATOSREMITENTECNTYPE $remitente = null)
    {
        $this->Remitente = $remitente;
        return $this;
    }
    /**
     * Get Destinatario value
     * @return DATOSDESTINATARIOCNTYPE|null
     */
    public function getDestinatario()
    {
        return $this->Destinatario;
    }
    /**
     * Set Destinatario value
     * @param DATOSDESTINATARIOCNTYPE $destinatario
     * @return PeticionPreRegistroCNCodEnvio
     */
    public function setDestinatario(DATOSDESTINATARIOCNTYPE $destinatario = null)
    {
        $this->Destinatario = $destinatario;
        return $this;
    }
    /**
     * Get Envio value
     * @return DATOSENVIOCNTYPE|null
     */
    public function getEnvio()
    {
        return $this->Envio;
    }
    /**
     * Set Envio value
     * @param DATOSENVIOCNTYPE $envio
     * @return PeticionPreRegistroCNCodEnvio
     */
    public function setEnvio(DATOSENVIOCNTYPE $envio = null)
    {
        $this->Envio = $envio;
        return $this;
    }
    /**
     * Get ModDevEtiqueta value
     * @return string|null
     */
    public function getModDevEtiqueta()
    {
        return $this->ModDevEtiqueta;
    }
    /**
     * Set ModDevEtiqueta value
     * @uses ModDevEtiqueta::valueIsValid()
     * @uses ModDevEtiqueta::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modDevEtiqueta
     * @return PeticionPreRegistroCNCodEnvio
     */
    public function setModDevEtiqueta($modDevEtiqueta = null)
    {
        // validation for constraint: enumeration
        if (!ModDevEtiqueta::valueIsValid($modDevEtiqueta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class ModDevEtiqueta', is_array($modDevEtiqueta) ? implode(', ', $modDevEtiqueta) : var_export($modDevEtiqueta, true), implode(', ', ModDevEtiqueta::getValidValues())), __LINE__);
        }
        $this->ModDevEtiqueta = $modDevEtiqueta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionPreRegistroCNCodEnvio
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
