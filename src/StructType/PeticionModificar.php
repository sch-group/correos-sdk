<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\ModDevEtiqueta;


/**
 * This class stands for PeticionModificar StructType
 * @subpackage Structs
 */
class PeticionModificar extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: xsd:codCertificado
     * @var string
     */
    public $codCertificado;
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
     * The RemitenteModif
     * Meta informations extracted from the WSDL
     * - ref: xsd:RemitenteModif
     * @var DATOSREMITENTEMODIFTYPE
     */
    public $RemitenteModif;
    /**
     * The DestinatarioModif
     * Meta informations extracted from the WSDL
     * - ref: xsd:DestinatarioModif
     * @var DATOSDESTINATARIOMODIFTYPE
     */
    public $DestinatarioModif;
    /**
     * The EnvioModif
     * Meta informations extracted from the WSDL
     * - ref: xsd:EnvioModif
     * @var DATOSENVIOMODIFTYPE
     */
    public $EnvioModif;
    /**
     * Constructor method for PeticionModificar
     * @uses PeticionModificar::setCodCertificado()
     * @uses PeticionModificar::setFechaOperacion()
     * @uses PeticionModificar::setCodEtiquetador()
     * @uses PeticionModificar::setNumContrato()
     * @uses PeticionModificar::setNumCliente()
     * @uses PeticionModificar::setCare()
     * @uses PeticionModificar::setTotalBultos()
     * @uses PeticionModificar::setModDevEtiqueta()
     * @uses PeticionModificar::setRemitenteModif()
     * @uses PeticionModificar::setDestinatarioModif()
     * @uses PeticionModificar::setEnvioModif()
     * @param string $codCertificado
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param DATOSREMITENTEMODIFTYPE $remitenteModif
     * @param DATOSDESTINATARIOMODIFTYPE $destinatarioModif
     * @param DATOSENVIOMODIFTYPE $envioModif
     */
    public function __construct($codCertificado = null, $fechaOperacion = null, $codEtiquetador = null, $numContrato = null, $numCliente = null, $care = null, $totalBultos = null, $modDevEtiqueta = null, DATOSREMITENTEMODIFTYPE $remitenteModif = null, DATOSDESTINATARIOMODIFTYPE $destinatarioModif = null, DATOSENVIOMODIFTYPE $envioModif = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitenteModif($remitenteModif)
            ->setDestinatarioModif($destinatarioModif)
            ->setEnvioModif($envioModif);
    }
    /**
     * Get codCertificado value
     * @return string
     */
    public function getCodCertificado()
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return PeticionModificar
     */
    public function setCodCertificado($codCertificado = null)
    {
        // validation for constraint: string
        if (!is_null($codCertificado) && !is_string($codCertificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCertificado, true), gettype($codCertificado)), __LINE__);
        }
        $this->codCertificado = $codCertificado;
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * @return PeticionModificar
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
     * Get RemitenteModif value
     * @return DATOSREMITENTEMODIFTYPE|null
     */
    public function getRemitenteModif()
    {
        return $this->RemitenteModif;
    }
    /**
     * Set RemitenteModif value
     * @param DATOSREMITENTEMODIFTYPE $remitenteModif
     * @return PeticionModificar
     */
    public function setRemitenteModif(DATOSREMITENTEMODIFTYPE $remitenteModif = null)
    {
        $this->RemitenteModif = $remitenteModif;
        return $this;
    }
    /**
     * Get DestinatarioModif value
     * @return DATOSDESTINATARIOMODIFTYPE|null
     */
    public function getDestinatarioModif()
    {
        return $this->DestinatarioModif;
    }
    /**
     * Set DestinatarioModif value
     * @param DATOSDESTINATARIOMODIFTYPE $destinatarioModif
     * @return PeticionModificar
     */
    public function setDestinatarioModif(DATOSDESTINATARIOMODIFTYPE $destinatarioModif = null)
    {
        $this->DestinatarioModif = $destinatarioModif;
        return $this;
    }
    /**
     * Get EnvioModif value
     * @return DATOSENVIOMODIFTYPE|null
     */
    public function getEnvioModif()
    {
        return $this->EnvioModif;
    }
    /**
     * Set EnvioModif value
     * @param DATOSENVIOMODIFTYPE $envioModif
     * @return PeticionModificar
     */
    public function setEnvioModif(DATOSENVIOMODIFTYPE $envioModif = null)
    {
        $this->EnvioModif = $envioModif;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionModificar
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
