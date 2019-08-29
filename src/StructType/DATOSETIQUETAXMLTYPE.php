<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\InstruccionesDevolucion;


/**
 * This class stands for DATOSETIQUETAXMLTYPE StructType
 * @subpackage Structs
 */
class DATOSETIQUETAXMLTYPE extends AbstractStructBase
{
    /**
     * The RemitenteEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:RemitenteEtiqueta
     * @var DATOSREMITENTEETIQUETATYPE
     */
    public $RemitenteEtiqueta;
    /**
     * The DestinatarioEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:DestinatarioEtiqueta
     * @var DATOSDESTINATARIOETIQUETATYPE
     */
    public $DestinatarioEtiqueta;
    /**
     * The Referencia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:Referencia
     * @var string
     */
    public $Referencia;
    /**
     * The PesoReal
     * Meta informations extracted from the WSDL
     * - ref: xsd:PesoReal
     * @var string
     */
    public $PesoReal;
    /**
     * The PesoVol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:PesoVol
     * @var string
     */
    public $PesoVol;
    /**
     * The Observaciones
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 90
     * - minOccurs: 0
     * - ref: xsd:Observaciones
     * @var string
     */
    public $Observaciones;
    /**
     * The FechaEtiquetado
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaEtiquetado
     * @var string
     */
    public $FechaEtiquetado;
    /**
     * The CodigoBarras
     * Meta informations extracted from the WSDL
     * - ref: xsd:CodigoBarras
     * @var FICHEROADJUNTOTYPE
     */
    public $CodigoBarras;
    /**
     * The InstruccionesDevolucion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:InstruccionesDevolucion
     * @var string
     */
    public $InstruccionesDevolucion;
    /**
     * The VA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:VA
     * @var VAETIQUETATYPE
     */
    public $VA;
    /**
     * Constructor method for DATOSETIQUETAXMLTYPE
     * @uses DATOSETIQUETAXMLTYPE::setRemitenteEtiqueta()
     * @uses DATOSETIQUETAXMLTYPE::setDestinatarioEtiqueta()
     * @uses DATOSETIQUETAXMLTYPE::setReferencia()
     * @uses DATOSETIQUETAXMLTYPE::setPesoReal()
     * @uses DATOSETIQUETAXMLTYPE::setPesoVol()
     * @uses DATOSETIQUETAXMLTYPE::setObservaciones()
     * @uses DATOSETIQUETAXMLTYPE::setFechaEtiquetado()
     * @uses DATOSETIQUETAXMLTYPE::setCodigoBarras()
     * @uses DATOSETIQUETAXMLTYPE::setInstruccionesDevolucion()
     * @uses DATOSETIQUETAXMLTYPE::setVA()
     * @param DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta
     * @param DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @param string $referencia
     * @param string $pesoReal
     * @param string $pesoVol
     * @param string $observaciones
     * @param string $fechaEtiquetado
     * @param FICHEROADJUNTOTYPE $codigoBarras
     * @param string $instruccionesDevolucion
     * @param VAETIQUETATYPE $vA
     */
    public function __construct(DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta = null, DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null, $referencia = null, $pesoReal = null, $pesoVol = null, $observaciones = null, $fechaEtiquetado = null, FICHEROADJUNTOTYPE $codigoBarras = null, $instruccionesDevolucion = null, VAETIQUETATYPE $vA = null)
    {
        $this
            ->setRemitenteEtiqueta($remitenteEtiqueta)
            ->setDestinatarioEtiqueta($destinatarioEtiqueta)
            ->setReferencia($referencia)
            ->setPesoReal($pesoReal)
            ->setPesoVol($pesoVol)
            ->setObservaciones($observaciones)
            ->setFechaEtiquetado($fechaEtiquetado)
            ->setCodigoBarras($codigoBarras)
            ->setInstruccionesDevolucion($instruccionesDevolucion)
            ->setVA($vA);
    }
    /**
     * Get RemitenteEtiqueta value
     * @return DATOSREMITENTEETIQUETATYPE|null
     */
    public function getRemitenteEtiqueta()
    {
        return $this->RemitenteEtiqueta;
    }
    /**
     * Set RemitenteEtiqueta value
     * @param DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setRemitenteEtiqueta(DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta = null)
    {
        $this->RemitenteEtiqueta = $remitenteEtiqueta;
        return $this;
    }
    /**
     * Get DestinatarioEtiqueta value
     * @return DATOSDESTINATARIOETIQUETATYPE|null
     */
    public function getDestinatarioEtiqueta()
    {
        return $this->DestinatarioEtiqueta;
    }
    /**
     * Set DestinatarioEtiqueta value
     * @param DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setDestinatarioEtiqueta(DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null)
    {
        $this->DestinatarioEtiqueta = $destinatarioEtiqueta;
        return $this;
    }
    /**
     * Get Referencia value
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }
    /**
     * Set Referencia value
     * @param string $referencia
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setReferencia($referencia = null)
    {
        // validation for constraint: string
        if (!is_null($referencia) && !is_string($referencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referencia) && mb_strlen($referencia) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($referencia)), __LINE__);
        }
        $this->Referencia = $referencia;
        return $this;
    }
    /**
     * Get PesoReal value
     * @return string|null
     */
    public function getPesoReal()
    {
        return $this->PesoReal;
    }
    /**
     * Set PesoReal value
     * @param string $pesoReal
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setPesoReal($pesoReal = null)
    {
        // validation for constraint: string
        if (!is_null($pesoReal) && !is_string($pesoReal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoReal, true), gettype($pesoReal)), __LINE__);
        }
        $this->PesoReal = $pesoReal;
        return $this;
    }
    /**
     * Get PesoVol value
     * @return string|null
     */
    public function getPesoVol()
    {
        return $this->PesoVol;
    }
    /**
     * Set PesoVol value
     * @param string $pesoVol
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setPesoVol($pesoVol = null)
    {
        // validation for constraint: string
        if (!is_null($pesoVol) && !is_string($pesoVol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoVol, true), gettype($pesoVol)), __LINE__);
        }
        $this->PesoVol = $pesoVol;
        return $this;
    }
    /**
     * Get Observaciones value
     * @return string|null
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }
    /**
     * Set Observaciones value
     * @param string $observaciones
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setObservaciones($observaciones = null)
    {
        // validation for constraint: string
        if (!is_null($observaciones) && !is_string($observaciones)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones, true), gettype($observaciones)), __LINE__);
        }
        // validation for constraint: maxLength(90)
        if (!is_null($observaciones) && mb_strlen($observaciones) > 90) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 90', mb_strlen($observaciones)), __LINE__);
        }
        $this->Observaciones = $observaciones;
        return $this;
    }
    /**
     * Get FechaEtiquetado value
     * @return string|null
     */
    public function getFechaEtiquetado()
    {
        return $this->FechaEtiquetado;
    }
    /**
     * Set FechaEtiquetado value
     * @param string $fechaEtiquetado
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setFechaEtiquetado($fechaEtiquetado = null)
    {
        // validation for constraint: string
        if (!is_null($fechaEtiquetado) && !is_string($fechaEtiquetado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEtiquetado, true), gettype($fechaEtiquetado)), __LINE__);
        }
        $this->FechaEtiquetado = $fechaEtiquetado;
        return $this;
    }
    /**
     * Get CodigoBarras value
     * @return FICHEROADJUNTOTYPE|null
     */
    public function getCodigoBarras()
    {
        return $this->CodigoBarras;
    }
    /**
     * Set CodigoBarras value
     * @param FICHEROADJUNTOTYPE $codigoBarras
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setCodigoBarras(FICHEROADJUNTOTYPE $codigoBarras = null)
    {
        $this->CodigoBarras = $codigoBarras;
        return $this;
    }
    /**
     * Get InstruccionesDevolucion value
     * @return string|null
     */
    public function getInstruccionesDevolucion()
    {
        return $this->InstruccionesDevolucion;
    }
    /**
     * Set InstruccionesDevolucion value
     * @uses InstruccionesDevolucion::valueIsValid()
     * @uses InstruccionesDevolucion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $instruccionesDevolucion
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setInstruccionesDevolucion($instruccionesDevolucion = null)
    {
        // validation for constraint: enumeration
        if (!InstruccionesDevolucion::valueIsValid($instruccionesDevolucion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class InstruccionesDevolucion', is_array($instruccionesDevolucion) ? implode(', ', $instruccionesDevolucion) : var_export($instruccionesDevolucion, true), implode(', ', InstruccionesDevolucion::getValidValues())), __LINE__);
        }
        $this->InstruccionesDevolucion = $instruccionesDevolucion;
        return $this;
    }
    /**
     * Get VA value
     * @return VAETIQUETATYPE|null
     */
    public function getVA()
    {
        return $this->VA;
    }
    /**
     * Set VA value
     * @param VAETIQUETATYPE $vA
     * @return DATOSETIQUETAXMLTYPE
     */
    public function setVA(VAETIQUETATYPE $vA = null)
    {
        $this->VA = $vA;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSETIQUETAXMLTYPE
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
