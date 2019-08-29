<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for ADUANAIPCTYPE StructType
 * @subpackage Structs
 */
class ADUANAIPCTYPE extends AbstractStructBase
{
    /**
     * The Moneda
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * @var string
     */
    public $Moneda;
    /**
     * The PiezasDelContenido
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var PIEZASDELCONTENIDOTYPE
     */
    public $PiezasDelContenido;
    /**
     * The ItemsOrginales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var ITEMSORIGINALESTYPE
     */
    public $ItemsOrginales;
    /**
     * The DocumentosAdjuntos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DOCUMENTOSADJUNTOSTYPE
     */
    public $DocumentosAdjuntos;
    /**
     * The FacturasOriginales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var FACTURASORIGINALESTYPE
     */
    public $FacturasOriginales;
    /**
     * The NaturalezaCodigoTransaccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NaturalezaCodigoTransaccion;
    /**
     * The Comentarios
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comentarios;
    /**
     * The Incoterm
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * @var string
     */
    public $Incoterm;
    /**
     * Constructor method for ADUANAIPCTYPE
     * @uses ADUANAIPCTYPE::setMoneda()
     * @uses ADUANAIPCTYPE::setPiezasDelContenido()
     * @uses ADUANAIPCTYPE::setItemsOrginales()
     * @uses ADUANAIPCTYPE::setDocumentosAdjuntos()
     * @uses ADUANAIPCTYPE::setFacturasOriginales()
     * @uses ADUANAIPCTYPE::setNaturalezaCodigoTransaccion()
     * @uses ADUANAIPCTYPE::setComentarios()
     * @uses ADUANAIPCTYPE::setIncoterm()
     * @param string $moneda
     * @param PIEZASDELCONTENIDOTYPE $piezasDelContenido
     * @param ITEMSORIGINALESTYPE $itemsOrginales
     * @param DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos
     * @param FACTURASORIGINALESTYPE $facturasOriginales
     * @param string $naturalezaCodigoTransaccion
     * @param string $comentarios
     * @param string $incoterm
     */
    public function __construct($moneda = null, PIEZASDELCONTENIDOTYPE $piezasDelContenido = null, ITEMSORIGINALESTYPE $itemsOrginales = null, DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos = null, FACTURASORIGINALESTYPE $facturasOriginales = null, $naturalezaCodigoTransaccion = null, $comentarios = null, $incoterm = null)
    {
        $this
            ->setMoneda($moneda)
            ->setPiezasDelContenido($piezasDelContenido)
            ->setItemsOrginales($itemsOrginales)
            ->setDocumentosAdjuntos($documentosAdjuntos)
            ->setFacturasOriginales($facturasOriginales)
            ->setNaturalezaCodigoTransaccion($naturalezaCodigoTransaccion)
            ->setComentarios($comentarios)
            ->setIncoterm($incoterm);
    }
    /**
     * Get Moneda value
     * @return string|null
     */
    public function getMoneda()
    {
        return $this->Moneda;
    }
    /**
     * Set Moneda value
     * @param string $moneda
     * @return ADUANAIPCTYPE
     */
    public function setMoneda($moneda = null)
    {
        // validation for constraint: string
        if (!is_null($moneda) && !is_string($moneda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moneda, true), gettype($moneda)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($moneda) && mb_strlen($moneda) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($moneda)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($moneda) && mb_strlen($moneda) < 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen($moneda)), __LINE__);
        }
        $this->Moneda = $moneda;
        return $this;
    }
    /**
     * Get PiezasDelContenido value
     * @return PIEZASDELCONTENIDOTYPE|null
     */
    public function getPiezasDelContenido()
    {
        return $this->PiezasDelContenido;
    }
    /**
     * Set PiezasDelContenido value
     * @param PIEZASDELCONTENIDOTYPE $piezasDelContenido
     * @return ADUANAIPCTYPE
     */
    public function setPiezasDelContenido(PIEZASDELCONTENIDOTYPE $piezasDelContenido = null)
    {
        $this->PiezasDelContenido = $piezasDelContenido;
        return $this;
    }
    /**
     * Get ItemsOrginales value
     * @return ITEMSORIGINALESTYPE|null
     */
    public function getItemsOrginales()
    {
        return $this->ItemsOrginales;
    }
    /**
     * Set ItemsOrginales value
     * @param ITEMSORIGINALESTYPE $itemsOrginales
     * @return ADUANAIPCTYPE
     */
    public function setItemsOrginales(ITEMSORIGINALESTYPE $itemsOrginales = null)
    {
        $this->ItemsOrginales = $itemsOrginales;
        return $this;
    }
    /**
     * Get DocumentosAdjuntos value
     * @return DOCUMENTOSADJUNTOSTYPE|null
     */
    public function getDocumentosAdjuntos()
    {
        return $this->DocumentosAdjuntos;
    }
    /**
     * Set DocumentosAdjuntos value
     * @param DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos
     * @return ADUANAIPCTYPE
     */
    public function setDocumentosAdjuntos(DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos = null)
    {
        $this->DocumentosAdjuntos = $documentosAdjuntos;
        return $this;
    }
    /**
     * Get FacturasOriginales value
     * @return FACTURASORIGINALESTYPE|null
     */
    public function getFacturasOriginales()
    {
        return $this->FacturasOriginales;
    }
    /**
     * Set FacturasOriginales value
     * @param FACTURASORIGINALESTYPE $facturasOriginales
     * @return ADUANAIPCTYPE
     */
    public function setFacturasOriginales(FACTURASORIGINALESTYPE $facturasOriginales = null)
    {
        $this->FacturasOriginales = $facturasOriginales;
        return $this;
    }
    /**
     * Get NaturalezaCodigoTransaccion value
     * @return string|null
     */
    public function getNaturalezaCodigoTransaccion()
    {
        return $this->NaturalezaCodigoTransaccion;
    }
    /**
     * Set NaturalezaCodigoTransaccion value
     * @param string $naturalezaCodigoTransaccion
     * @return ADUANAIPCTYPE
     */
    public function setNaturalezaCodigoTransaccion($naturalezaCodigoTransaccion = null)
    {
        // validation for constraint: string
        if (!is_null($naturalezaCodigoTransaccion) && !is_string($naturalezaCodigoTransaccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($naturalezaCodigoTransaccion, true), gettype($naturalezaCodigoTransaccion)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($naturalezaCodigoTransaccion) && mb_strlen($naturalezaCodigoTransaccion) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($naturalezaCodigoTransaccion)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($naturalezaCodigoTransaccion) && mb_strlen($naturalezaCodigoTransaccion) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($naturalezaCodigoTransaccion)), __LINE__);
        }
        $this->NaturalezaCodigoTransaccion = $naturalezaCodigoTransaccion;
        return $this;
    }
    /**
     * Get Comentarios value
     * @return string|null
     */
    public function getComentarios()
    {
        return $this->Comentarios;
    }
    /**
     * Set Comentarios value
     * @param string $comentarios
     * @return ADUANAIPCTYPE
     */
    public function setComentarios($comentarios = null)
    {
        // validation for constraint: string
        if (!is_null($comentarios) && !is_string($comentarios)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comentarios, true), gettype($comentarios)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($comentarios) && mb_strlen($comentarios) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($comentarios)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($comentarios) && mb_strlen($comentarios) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($comentarios)), __LINE__);
        }
        $this->Comentarios = $comentarios;
        return $this;
    }
    /**
     * Get Incoterm value
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->Incoterm;
    }
    /**
     * Set Incoterm value
     * @param string $incoterm
     * @return ADUANAIPCTYPE
     */
    public function setIncoterm($incoterm = null)
    {
        // validation for constraint: string
        if (!is_null($incoterm) && !is_string($incoterm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incoterm, true), gettype($incoterm)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($incoterm) && mb_strlen($incoterm) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($incoterm)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($incoterm) && mb_strlen($incoterm) < 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen($incoterm)), __LINE__);
        }
        $this->Incoterm = $incoterm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ADUANAIPCTYPE
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
