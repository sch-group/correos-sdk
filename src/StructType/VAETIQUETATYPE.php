<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\AutorizacionPreviaEntrega;
use CorreosSdk\EnumType\ComplejidadGestion;
use CorreosSdk\EnumType\DUA;
use CorreosSdk\EnumType\EAR;
use CorreosSdk\EnumType\EntregaExclusiva;
use CorreosSdk\EnumType\RepartoSabado;


/**
 * This class stands for VAETIQUETATYPE StructType
 * @subpackage Structs
 */
class VAETIQUETATYPE extends AbstractStructBase
{
    /**
     * The ImporteReembolso
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ImporteReembolso
     * @var string
     */
    public $ImporteReembolso;
    /**
     * The DUA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DUA
     * @var string
     */
    public $DUA;
    /**
     * The eAR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:eAR
     * @var string
     */
    public $eAR;
    /**
     * The EntregaExclusiva
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:EntregaExclusiva
     * @var string
     */
    public $EntregaExclusiva;
    /**
     * The RepartoSabado
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:RepartoSabado
     * @var string
     */
    public $RepartoSabado;
    /**
     * The EntregaConcertada
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:EntregaConcertada
     * @var string
     */
    public $EntregaConcertada;
    /**
     * The FechaEntregaConcertada
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:FechaEntregaConcertada
     * @var string
     */
    public $FechaEntregaConcertada;
    /**
     * The FranjaHorariaConcertada
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:FranjaHorariaConcertada
     * @var string
     */
    public $FranjaHorariaConcertada;
    /**
     * The EntregaconRecogida
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaconRecogida
     * @var string
     */
    public $EntregaconRecogida;
    /**
     * The IndImprimirEtiqueta
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:IndImprimirEtiqueta
     * @var string
     */
    public $IndImprimirEtiqueta;
    /**
     * The TextoAdicional
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:TextoAdicional
     * @var string
     */
    public $TextoAdicional;
    /**
     * The EntregaSinFirmar
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaSinFirmar
     * @var string
     */
    public $EntregaSinFirmar;
    /**
     * The ComplejidadGestion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ComplejidadGestion
     * @var string
     */
    public $ComplejidadGestion;
    /**
     * The AutorizacionPreviaEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AutorizacionPreviaEntrega
     * @var string
     */
    public $AutorizacionPreviaEntrega;
    /**
     * Constructor method for VAETIQUETATYPE
     * @uses VAETIQUETATYPE::setImporteReembolso()
     * @uses VAETIQUETATYPE::setDUA()
     * @uses VAETIQUETATYPE::setEAR()
     * @uses VAETIQUETATYPE::setEntregaExclusiva()
     * @uses VAETIQUETATYPE::setRepartoSabado()
     * @uses VAETIQUETATYPE::setEntregaConcertada()
     * @uses VAETIQUETATYPE::setFechaEntregaConcertada()
     * @uses VAETIQUETATYPE::setFranjaHorariaConcertada()
     * @uses VAETIQUETATYPE::setEntregaconRecogida()
     * @uses VAETIQUETATYPE::setIndImprimirEtiqueta()
     * @uses VAETIQUETATYPE::setTextoAdicional()
     * @uses VAETIQUETATYPE::setEntregaSinFirmar()
     * @uses VAETIQUETATYPE::setComplejidadGestion()
     * @uses VAETIQUETATYPE::setAutorizacionPreviaEntrega()
     * @param string $importeReembolso
     * @param string $dUA
     * @param string $eAR
     * @param string $entregaExclusiva
     * @param string $repartoSabado
     * @param string $entregaConcertada
     * @param string $fechaEntregaConcertada
     * @param string $franjaHorariaConcertada
     * @param string $entregaconRecogida
     * @param string $indImprimirEtiqueta
     * @param string $textoAdicional
     * @param string $entregaSinFirmar
     * @param string $complejidadGestion
     * @param string $autorizacionPreviaEntrega
     */
    public function __construct($importeReembolso = null, $dUA = null, $eAR = null, $entregaExclusiva = null, $repartoSabado = null, $entregaConcertada = null, $fechaEntregaConcertada = null, $franjaHorariaConcertada = null, $entregaconRecogida = null, $indImprimirEtiqueta = null, $textoAdicional = null, $entregaSinFirmar = null, $complejidadGestion = null, $autorizacionPreviaEntrega = null)
    {
        $this
            ->setImporteReembolso($importeReembolso)
            ->setDUA($dUA)
            ->setEAR($eAR)
            ->setEntregaExclusiva($entregaExclusiva)
            ->setRepartoSabado($repartoSabado)
            ->setEntregaConcertada($entregaConcertada)
            ->setFechaEntregaConcertada($fechaEntregaConcertada)
            ->setFranjaHorariaConcertada($franjaHorariaConcertada)
            ->setEntregaconRecogida($entregaconRecogida)
            ->setIndImprimirEtiqueta($indImprimirEtiqueta)
            ->setTextoAdicional($textoAdicional)
            ->setEntregaSinFirmar($entregaSinFirmar)
            ->setComplejidadGestion($complejidadGestion)
            ->setAutorizacionPreviaEntrega($autorizacionPreviaEntrega);
    }
    /**
     * Get ImporteReembolso value
     * @return string|null
     */
    public function getImporteReembolso()
    {
        return $this->ImporteReembolso;
    }
    /**
     * Set ImporteReembolso value
     * @param string $importeReembolso
     * @return VAETIQUETATYPE
     */
    public function setImporteReembolso($importeReembolso = null)
    {
        // validation for constraint: string
        if (!is_null($importeReembolso) && !is_string($importeReembolso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolso, true), gettype($importeReembolso)), __LINE__);
        }
        $this->ImporteReembolso = $importeReembolso;
        return $this;
    }
    /**
     * Get DUA value
     * @return string|null
     */
    public function getDUA()
    {
        return $this->DUA;
    }
    /**
     * Set DUA value
     * @uses DUA::valueIsValid()
     * @uses DUA::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dUA
     * @return VAETIQUETATYPE
     */
    public function setDUA($dUA = null)
    {
        // validation for constraint: enumeration
        if (!DUA::valueIsValid($dUA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class DUA', is_array($dUA) ? implode(', ', $dUA) : var_export($dUA, true), implode(', ', DUA::getValidValues())), __LINE__);
        }
        $this->DUA = $dUA;
        return $this;
    }
    /**
     * Get eAR value
     * @return string|null
     */
    public function getEAR()
    {
        return $this->eAR;
    }
    /**
     * Set eAR value
     * @uses EAR::valueIsValid()
     * @uses EAR::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eAR
     * @return VAETIQUETATYPE
     */
    public function setEAR($eAR = null)
    {
        // validation for constraint: enumeration
        if (!EAR::valueIsValid($eAR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class EAR', is_array($eAR) ? implode(', ', $eAR) : var_export($eAR, true), implode(', ', EAR::getValidValues())), __LINE__);
        }
        $this->eAR = $eAR;
        return $this;
    }
    /**
     * Get EntregaExclusiva value
     * @return string|null
     */
    public function getEntregaExclusiva()
    {
        return $this->EntregaExclusiva;
    }
    /**
     * Set EntregaExclusiva value
     * @uses EntregaExclusiva::valueIsValid()
     * @uses EntregaExclusiva::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $entregaExclusiva
     * @return VAETIQUETATYPE
     */
    public function setEntregaExclusiva($entregaExclusiva = null)
    {
        // validation for constraint: enumeration
        if (!EntregaExclusiva::valueIsValid($entregaExclusiva)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class EntregaExclusiva', is_array($entregaExclusiva) ? implode(', ', $entregaExclusiva) : var_export($entregaExclusiva, true), implode(', ', EntregaExclusiva::getValidValues())), __LINE__);
        }
        $this->EntregaExclusiva = $entregaExclusiva;
        return $this;
    }
    /**
     * Get RepartoSabado value
     * @return string|null
     */
    public function getRepartoSabado()
    {
        return $this->RepartoSabado;
    }
    /**
     * Set RepartoSabado value
     * @uses RepartoSabado::valueIsValid()
     * @uses RepartoSabado::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $repartoSabado
     * @return VAETIQUETATYPE
     */
    public function setRepartoSabado($repartoSabado = null)
    {
        // validation for constraint: enumeration
        if (!RepartoSabado::valueIsValid($repartoSabado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class RepartoSabado', is_array($repartoSabado) ? implode(', ', $repartoSabado) : var_export($repartoSabado, true), implode(', ', RepartoSabado::getValidValues())), __LINE__);
        }
        $this->RepartoSabado = $repartoSabado;
        return $this;
    }
    /**
     * Get EntregaConcertada value
     * @return string|null
     */
    public function getEntregaConcertada()
    {
        return $this->EntregaConcertada;
    }
    /**
     * Set EntregaConcertada value
     * @param string $entregaConcertada
     * @return VAETIQUETATYPE
     */
    public function setEntregaConcertada($entregaConcertada = null)
    {
        // validation for constraint: string
        if (!is_null($entregaConcertada) && !is_string($entregaConcertada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaConcertada, true), gettype($entregaConcertada)), __LINE__);
        }
        $this->EntregaConcertada = $entregaConcertada;
        return $this;
    }
    /**
     * Get FechaEntregaConcertada value
     * @return string|null
     */
    public function getFechaEntregaConcertada()
    {
        return $this->FechaEntregaConcertada;
    }
    /**
     * Set FechaEntregaConcertada value
     * @param string $fechaEntregaConcertada
     * @return VAETIQUETATYPE
     */
    public function setFechaEntregaConcertada($fechaEntregaConcertada = null)
    {
        // validation for constraint: string
        if (!is_null($fechaEntregaConcertada) && !is_string($fechaEntregaConcertada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEntregaConcertada, true), gettype($fechaEntregaConcertada)), __LINE__);
        }
        $this->FechaEntregaConcertada = $fechaEntregaConcertada;
        return $this;
    }
    /**
     * Get FranjaHorariaConcertada value
     * @return string|null
     */
    public function getFranjaHorariaConcertada()
    {
        return $this->FranjaHorariaConcertada;
    }
    /**
     * Set FranjaHorariaConcertada value
     * @param string $franjaHorariaConcertada
     * @return VAETIQUETATYPE
     */
    public function setFranjaHorariaConcertada($franjaHorariaConcertada = null)
    {
        // validation for constraint: string
        if (!is_null($franjaHorariaConcertada) && !is_string($franjaHorariaConcertada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($franjaHorariaConcertada, true), gettype($franjaHorariaConcertada)), __LINE__);
        }
        $this->FranjaHorariaConcertada = $franjaHorariaConcertada;
        return $this;
    }
    /**
     * Get EntregaconRecogida value
     * @return string|null
     */
    public function getEntregaconRecogida()
    {
        return $this->EntregaconRecogida;
    }
    /**
     * Set EntregaconRecogida value
     * @param string $entregaconRecogida
     * @return VAETIQUETATYPE
     */
    public function setEntregaconRecogida($entregaconRecogida = null)
    {
        // validation for constraint: string
        if (!is_null($entregaconRecogida) && !is_string($entregaconRecogida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaconRecogida, true), gettype($entregaconRecogida)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaconRecogida) && mb_strlen($entregaconRecogida) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($entregaconRecogida)), __LINE__);
        }
        $this->EntregaconRecogida = $entregaconRecogida;
        return $this;
    }
    /**
     * Get IndImprimirEtiqueta value
     * @return string|null
     */
    public function getIndImprimirEtiqueta()
    {
        return $this->IndImprimirEtiqueta;
    }
    /**
     * Set IndImprimirEtiqueta value
     * @param string $indImprimirEtiqueta
     * @return VAETIQUETATYPE
     */
    public function setIndImprimirEtiqueta($indImprimirEtiqueta = null)
    {
        // validation for constraint: string
        if (!is_null($indImprimirEtiqueta) && !is_string($indImprimirEtiqueta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indImprimirEtiqueta, true), gettype($indImprimirEtiqueta)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($indImprimirEtiqueta) && mb_strlen($indImprimirEtiqueta) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($indImprimirEtiqueta)), __LINE__);
        }
        $this->IndImprimirEtiqueta = $indImprimirEtiqueta;
        return $this;
    }
    /**
     * Get TextoAdicional value
     * @return string|null
     */
    public function getTextoAdicional()
    {
        return $this->TextoAdicional;
    }
    /**
     * Set TextoAdicional value
     * @param string $textoAdicional
     * @return VAETIQUETATYPE
     */
    public function setTextoAdicional($textoAdicional = null)
    {
        // validation for constraint: string
        if (!is_null($textoAdicional) && !is_string($textoAdicional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textoAdicional, true), gettype($textoAdicional)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($textoAdicional) && mb_strlen($textoAdicional) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($textoAdicional)), __LINE__);
        }
        $this->TextoAdicional = $textoAdicional;
        return $this;
    }
    /**
     * Get EntregaSinFirmar value
     * @return string|null
     */
    public function getEntregaSinFirmar()
    {
        return $this->EntregaSinFirmar;
    }
    /**
     * Set EntregaSinFirmar value
     * @param string $entregaSinFirmar
     * @return VAETIQUETATYPE
     */
    public function setEntregaSinFirmar($entregaSinFirmar = null)
    {
        // validation for constraint: string
        if (!is_null($entregaSinFirmar) && !is_string($entregaSinFirmar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaSinFirmar, true), gettype($entregaSinFirmar)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaSinFirmar) && mb_strlen($entregaSinFirmar) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($entregaSinFirmar)), __LINE__);
        }
        $this->EntregaSinFirmar = $entregaSinFirmar;
        return $this;
    }
    /**
     * Get ComplejidadGestion value
     * @return string|null
     */
    public function getComplejidadGestion()
    {
        return $this->ComplejidadGestion;
    }
    /**
     * Set ComplejidadGestion value
     * @uses ComplejidadGestion::valueIsValid()
     * @uses ComplejidadGestion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $complejidadGestion
     * @return VAETIQUETATYPE
     */
    public function setComplejidadGestion($complejidadGestion = null)
    {
        // validation for constraint: enumeration
        if (!ComplejidadGestion::valueIsValid($complejidadGestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class ComplejidadGestion', is_array($complejidadGestion) ? implode(', ', $complejidadGestion) : var_export($complejidadGestion, true), implode(', ', ComplejidadGestion::getValidValues())), __LINE__);
        }
        $this->ComplejidadGestion = $complejidadGestion;
        return $this;
    }
    /**
     * Get AutorizacionPreviaEntrega value
     * @return string|null
     */
    public function getAutorizacionPreviaEntrega()
    {
        return $this->AutorizacionPreviaEntrega;
    }
    /**
     * Set AutorizacionPreviaEntrega value
     * @uses AutorizacionPreviaEntrega::valueIsValid()
     * @uses AutorizacionPreviaEntrega::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $autorizacionPreviaEntrega
     * @return VAETIQUETATYPE
     */
    public function setAutorizacionPreviaEntrega($autorizacionPreviaEntrega = null)
    {
        // validation for constraint: enumeration
        if (!AutorizacionPreviaEntrega::valueIsValid($autorizacionPreviaEntrega)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class AutorizacionPreviaEntrega', is_array($autorizacionPreviaEntrega) ? implode(', ', $autorizacionPreviaEntrega) : var_export($autorizacionPreviaEntrega, true), implode(', ', AutorizacionPreviaEntrega::getValidValues())), __LINE__);
        }
        $this->AutorizacionPreviaEntrega = $autorizacionPreviaEntrega;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return VAETIQUETATYPE
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
