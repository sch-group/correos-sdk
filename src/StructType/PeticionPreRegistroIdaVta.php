<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\ModDevEtiqueta;


/**
 * This class stands for PeticionPreRegistroIdaVta StructType
 * @subpackage Structs
 */
class PeticionPreRegistroIdaVta extends AbstractStructBase
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
     * The ModDevEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string
     */
    public $ModDevEtiqueta;
    /**
     * The Remitente
     * Meta informations extracted from the WSDL
     * - ref: xsd:Remitente
     * @var DATOSREMITENTETYPE
     */
    public $Remitente;
    /**
     * The Destinatario
     * Meta informations extracted from the WSDL
     * - ref: xsd:Destinatario
     * @var DATOSDESTINATARIOTYPE
     */
    public $Destinatario;
    /**
     * The Envio
     * Meta informations extracted from the WSDL
     * - ref: xsd:Envio
     * @var DATOSENVIOTYPE
     */
    public $Envio;
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
     * Constructor method for PeticionPreRegistroIdaVta
     * @uses PeticionPreRegistroIdaVta::setFechaOperacion()
     * @uses PeticionPreRegistroIdaVta::setCodEtiquetador()
     * @uses PeticionPreRegistroIdaVta::setNumContrato()
     * @uses PeticionPreRegistroIdaVta::setNumCliente()
     * @uses PeticionPreRegistroIdaVta::setCare()
     * @uses PeticionPreRegistroIdaVta::setTotalBultos()
     * @uses PeticionPreRegistroIdaVta::setModDevEtiqueta()
     * @uses PeticionPreRegistroIdaVta::setRemitente()
     * @uses PeticionPreRegistroIdaVta::setDestinatario()
     * @uses PeticionPreRegistroIdaVta::setEnvio()
     * @uses PeticionPreRegistroIdaVta::setEntregaParcial()
     * @uses PeticionPreRegistroIdaVta::setCodExpedicion()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param DATOSREMITENTETYPE $remitente
     * @param DATOSDESTINATARIOTYPE $destinatario
     * @param DATOSENVIOTYPE $envio
     * @param string $entregaParcial
     * @param string $codExpedicion
     */
    public function __construct($fechaOperacion = null, $codEtiquetador = null, $numContrato = null, $numCliente = null, $care = null, $totalBultos = null, $modDevEtiqueta = null, DATOSREMITENTETYPE $remitente = null, DATOSDESTINATARIOTYPE $destinatario = null, DATOSENVIOTYPE $envio = null, $entregaParcial = null, $codExpedicion = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitente($remitente)
            ->setDestinatario($destinatario)
            ->setEnvio($envio)
            ->setEntregaParcial($entregaParcial)
            ->setCodExpedicion($codExpedicion);
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * Get Remitente value
     * @return DATOSREMITENTETYPE|null
     */
    public function getRemitente()
    {
        return $this->Remitente;
    }
    /**
     * Set Remitente value
     * @param DATOSREMITENTETYPE $remitente
     * @return PeticionPreRegistroIdaVta
     */
    public function setRemitente(DATOSREMITENTETYPE $remitente = null)
    {
        $this->Remitente = $remitente;
        return $this;
    }
    /**
     * Get Destinatario value
     * @return DATOSDESTINATARIOTYPE|null
     */
    public function getDestinatario()
    {
        return $this->Destinatario;
    }
    /**
     * Set Destinatario value
     * @param DATOSDESTINATARIOTYPE $destinatario
     * @return PeticionPreRegistroIdaVta
     */
    public function setDestinatario(DATOSDESTINATARIOTYPE $destinatario = null)
    {
        $this->Destinatario = $destinatario;
        return $this;
    }
    /**
     * Get Envio value
     * @return DATOSENVIOTYPE|null
     */
    public function getEnvio()
    {
        return $this->Envio;
    }
    /**
     * Set Envio value
     * @param DATOSENVIOTYPE $envio
     * @return PeticionPreRegistroIdaVta
     */
    public function setEnvio(DATOSENVIOTYPE $envio = null)
    {
        $this->Envio = $envio;
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
     * @return PeticionPreRegistroIdaVta
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
     * @return PeticionPreRegistroIdaVta
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionPreRegistroIdaVta
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
