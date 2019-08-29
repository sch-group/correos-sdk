<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\AutorizacionPreviaEntrega;
use CorreosSdk\EnumType\ComplejidadGestion;


/**
 * This class stands for VATYPE StructType
 * @subpackage Structs
 */
class VATYPE extends AbstractStructBase
{
    /**
     * The ImporteSeguro
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:ImporteSeguro
     * @var string
     */
    public $ImporteSeguro;
    /**
     * The Reembolso
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Reembolso
     * @var REEMBOLSOTYPE
     */
    public $Reembolso;
    /**
     * The EntregaExclusivaDestinatario
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaExclusivaDestinatario
     * @var string
     */
    public $EntregaExclusivaDestinatario;
    /**
     * The PruebaEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:PruebaEntrega
     * @var PRUEBAENTREGATYPE
     */
    public $PruebaEntrega;
    /**
     * The Recogidaadomicilio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Recogidaadomicilio
     * @var string
     */
    public $Recogidaadomicilio;
    /**
     * The DevolucionAlbaran
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DevolucionAlbaran
     * @var string
     */
    public $DevolucionAlbaran;
    /**
     * The RepartoenSabado
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:RepartoenSabado
     * @var string
     */
    public $RepartoenSabado;
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
     * The TiempoEnLista
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TiempoEnLista
     * @var int
     */
    public $TiempoEnLista;
    /**
     * The IntentosDeEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IntentosDeEntrega
     * @var int
     */
    public $IntentosDeEntrega;
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
     * Constructor method for VATYPE
     * @uses VATYPE::setImporteSeguro()
     * @uses VATYPE::setReembolso()
     * @uses VATYPE::setEntregaExclusivaDestinatario()
     * @uses VATYPE::setPruebaEntrega()
     * @uses VATYPE::setRecogidaadomicilio()
     * @uses VATYPE::setDevolucionAlbaran()
     * @uses VATYPE::setRepartoenSabado()
     * @uses VATYPE::setEntregaConcertada()
     * @uses VATYPE::setFranjaHorariaConcertada()
     * @uses VATYPE::setEntregaconRecogida()
     * @uses VATYPE::setIndImprimirEtiqueta()
     * @uses VATYPE::setTextoAdicional()
     * @uses VATYPE::setTiempoEnLista()
     * @uses VATYPE::setIntentosDeEntrega()
     * @uses VATYPE::setEntregaSinFirmar()
     * @uses VATYPE::setComplejidadGestion()
     * @uses VATYPE::setAutorizacionPreviaEntrega()
     * @param string $importeSeguro
     * @param REEMBOLSOTYPE $reembolso
     * @param string $entregaExclusivaDestinatario
     * @param PRUEBAENTREGATYPE $pruebaEntrega
     * @param string $recogidaadomicilio
     * @param string $devolucionAlbaran
     * @param string $repartoenSabado
     * @param string $entregaConcertada
     * @param string $franjaHorariaConcertada
     * @param string $entregaconRecogida
     * @param string $indImprimirEtiqueta
     * @param string $textoAdicional
     * @param int $tiempoEnLista
     * @param int $intentosDeEntrega
     * @param string $entregaSinFirmar
     * @param string $complejidadGestion
     * @param string $autorizacionPreviaEntrega
     */
    public function __construct(
        $importeSeguro = null,
        REEMBOLSOTYPE $reembolso = null,
        $entregaExclusivaDestinatario = null,
        PRUEBAENTREGATYPE $pruebaEntrega = null,
        $recogidaadomicilio = null,
        $devolucionAlbaran = null,
        $repartoenSabado = null,
        $entregaConcertada = null,
        $franjaHorariaConcertada = null,
        $entregaconRecogida = null,
        $indImprimirEtiqueta = null,
        $textoAdicional = null,
        $tiempoEnLista = null,
        $intentosDeEntrega = null,
        $entregaSinFirmar = null,
        $complejidadGestion = null,
        $autorizacionPreviaEntrega = null
    ) {
        $this
            ->setImporteSeguro($importeSeguro)
            ->setReembolso($reembolso)
            ->setEntregaExclusivaDestinatario($entregaExclusivaDestinatario)
            ->setPruebaEntrega($pruebaEntrega)
            ->setRecogidaadomicilio($recogidaadomicilio)
            ->setDevolucionAlbaran($devolucionAlbaran)
            ->setRepartoenSabado($repartoenSabado)
            ->setEntregaConcertada($entregaConcertada)
            ->setFranjaHorariaConcertada($franjaHorariaConcertada)
            ->setEntregaconRecogida($entregaconRecogida)
            ->setIndImprimirEtiqueta($indImprimirEtiqueta)
            ->setTextoAdicional($textoAdicional)
            ->setTiempoEnLista($tiempoEnLista)
            ->setIntentosDeEntrega($intentosDeEntrega)
            ->setEntregaSinFirmar($entregaSinFirmar)
            ->setComplejidadGestion($complejidadGestion)
            ->setAutorizacionPreviaEntrega($autorizacionPreviaEntrega);
    }
    /**
     * Get ImporteSeguro value
     * @return string|null
     */
    public function getImporteSeguro()
    {
        return $this->ImporteSeguro;
    }
    /**
     * Set ImporteSeguro value
     * @param string $importeSeguro
     * @return VATYPE
     */
    public function setImporteSeguro($importeSeguro = null)
    {
        // validation for constraint: string
        if (!is_null($importeSeguro) && !is_string($importeSeguro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeSeguro, true), gettype($importeSeguro)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($importeSeguro) && mb_strlen($importeSeguro) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($importeSeguro)), __LINE__);
        }
        $this->ImporteSeguro = $importeSeguro;
        return $this;
    }
    /**
     * Get Reembolso value
     * @return REEMBOLSOTYPE|null
     */
    public function getReembolso()
    {
        return $this->Reembolso;
    }
    /**
     * Set Reembolso value
     * @param REEMBOLSOTYPE $reembolso
     * @return VATYPE
     */
    public function setReembolso(REEMBOLSOTYPE $reembolso = null)
    {
        $this->Reembolso = $reembolso;
        return $this;
    }
    /**
     * Get EntregaExclusivaDestinatario value
     * @return string|null
     */
    public function getEntregaExclusivaDestinatario()
    {
        return $this->EntregaExclusivaDestinatario;
    }
    /**
     * Set EntregaExclusivaDestinatario value
     * @param string $entregaExclusivaDestinatario
     * @return VATYPE
     */
    public function setEntregaExclusivaDestinatario($entregaExclusivaDestinatario = null)
    {
        // validation for constraint: string
        if (!is_null($entregaExclusivaDestinatario) && !is_string($entregaExclusivaDestinatario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaExclusivaDestinatario, true), gettype($entregaExclusivaDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaExclusivaDestinatario) && mb_strlen($entregaExclusivaDestinatario) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($entregaExclusivaDestinatario)), __LINE__);
        }
        $this->EntregaExclusivaDestinatario = $entregaExclusivaDestinatario;
        return $this;
    }
    /**
     * Get PruebaEntrega value
     * @return PRUEBAENTREGATYPE|null
     */
    public function getPruebaEntrega()
    {
        return $this->PruebaEntrega;
    }
    /**
     * Set PruebaEntrega value
     * @param PRUEBAENTREGATYPE $pruebaEntrega
     * @return VATYPE
     */
    public function setPruebaEntrega(PRUEBAENTREGATYPE $pruebaEntrega = null)
    {
        $this->PruebaEntrega = $pruebaEntrega;
        return $this;
    }
    /**
     * Get Recogidaadomicilio value
     * @return string|null
     */
    public function getRecogidaadomicilio()
    {
        return $this->Recogidaadomicilio;
    }
    /**
     * Set Recogidaadomicilio value
     * @param string $recogidaadomicilio
     * @return VATYPE
     */
    public function setRecogidaadomicilio($recogidaadomicilio = null)
    {
        // validation for constraint: string
        if (!is_null($recogidaadomicilio) && !is_string($recogidaadomicilio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recogidaadomicilio, true), gettype($recogidaadomicilio)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($recogidaadomicilio) && mb_strlen($recogidaadomicilio) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($recogidaadomicilio)), __LINE__);
        }
        $this->Recogidaadomicilio = $recogidaadomicilio;
        return $this;
    }
    /**
     * Get DevolucionAlbaran value
     * @return string|null
     */
    public function getDevolucionAlbaran()
    {
        return $this->DevolucionAlbaran;
    }
    /**
     * Set DevolucionAlbaran value
     * @param string $devolucionAlbaran
     * @return VATYPE
     */
    public function setDevolucionAlbaran($devolucionAlbaran = null)
    {
        // validation for constraint: string
        if (!is_null($devolucionAlbaran) && !is_string($devolucionAlbaran)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devolucionAlbaran, true), gettype($devolucionAlbaran)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($devolucionAlbaran) && mb_strlen($devolucionAlbaran) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($devolucionAlbaran)), __LINE__);
        }
        $this->DevolucionAlbaran = $devolucionAlbaran;
        return $this;
    }
    /**
     * Get RepartoenSabado value
     * @return string|null
     */
    public function getRepartoenSabado()
    {
        return $this->RepartoenSabado;
    }
    /**
     * Set RepartoenSabado value
     * @param string $repartoenSabado
     * @return VATYPE
     */
    public function setRepartoenSabado($repartoenSabado = null)
    {
        // validation for constraint: string
        if (!is_null($repartoenSabado) && !is_string($repartoenSabado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repartoenSabado, true), gettype($repartoenSabado)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($repartoenSabado) && mb_strlen($repartoenSabado) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($repartoenSabado)), __LINE__);
        }
        $this->RepartoenSabado = $repartoenSabado;
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
     * @return VATYPE
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
     * @return VATYPE
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
     * @return VATYPE
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
     * @return VATYPE
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
     * @return VATYPE
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
     * Get TiempoEnLista value
     * @return int|null
     */
    public function getTiempoEnLista()
    {
        return $this->TiempoEnLista;
    }
    /**
     * Set TiempoEnLista value
     * @param int $tiempoEnLista
     * @return VATYPE
     */
    public function setTiempoEnLista($tiempoEnLista = null)
    {
        // validation for constraint: int
        if (!is_null($tiempoEnLista) && !(is_int($tiempoEnLista) || ctype_digit($tiempoEnLista))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tiempoEnLista, true), gettype($tiempoEnLista)), __LINE__);
        }
        $this->TiempoEnLista = $tiempoEnLista;
        return $this;
    }
    /**
     * Get IntentosDeEntrega value
     * @return int|null
     */
    public function getIntentosDeEntrega()
    {
        return $this->IntentosDeEntrega;
    }
    /**
     * Set IntentosDeEntrega value
     * @param int $intentosDeEntrega
     * @return VATYPE
     */
    public function setIntentosDeEntrega($intentosDeEntrega = null)
    {
        // validation for constraint: int
        if (!is_null($intentosDeEntrega) && !(is_int($intentosDeEntrega) || ctype_digit($intentosDeEntrega))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intentosDeEntrega, true), gettype($intentosDeEntrega)), __LINE__);
        }
        $this->IntentosDeEntrega = $intentosDeEntrega;
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
     * @return VATYPE
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
     * @return VATYPE
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
     * @return VATYPE
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
     * @return VATYPE
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
