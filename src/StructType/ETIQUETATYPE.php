<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Modo;


/**
 * This class stands for ETIQUETATYPE StructType
 * @subpackage Structs
 */
class ETIQUETATYPE extends AbstractStructBase
{
    /**
     * The Modo
     * Meta informations extracted from the WSDL
     * - ref: xsd:Modo
     * @var string
     */
    public $Modo;
    /**
     * The Etiqueta_xml
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_xml
     * @var DATOSETIQUETAXMLTYPE
     */
    public $Etiqueta_xml;
    /**
     * The Etiqueta_pdf
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_pdf
     * @var FICHEROADJUNTOTYPE
     */
    public $Etiqueta_pdf;
    /**
     * The Etiqueta_zpl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_zpl
     * @var FICHEROADJUNTOTYPE
     */
    public $Etiqueta_zpl;
    /**
     * Constructor method for ETIQUETATYPE
     * @uses ETIQUETATYPE::setModo()
     * @uses ETIQUETATYPE::setEtiqueta_xml()
     * @uses ETIQUETATYPE::setEtiqueta_pdf()
     * @uses ETIQUETATYPE::setEtiqueta_zpl()
     * @param string $modo
     * @param DATOSETIQUETAXMLTYPE $etiqueta_xml
     * @param FICHEROADJUNTOTYPE $etiqueta_pdf
     * @param FICHEROADJUNTOTYPE $etiqueta_zpl
     */
    public function __construct($modo = null, DATOSETIQUETAXMLTYPE $etiqueta_xml = null, FICHEROADJUNTOTYPE $etiqueta_pdf = null, FICHEROADJUNTOTYPE $etiqueta_zpl = null)
    {
        $this
            ->setModo($modo)
            ->setEtiqueta_xml($etiqueta_xml)
            ->setEtiqueta_pdf($etiqueta_pdf)
            ->setEtiqueta_zpl($etiqueta_zpl);
    }
    /**
     * Get Modo value
     * @return string|null
     */
    public function getModo()
    {
        return $this->Modo;
    }
    /**
     * Set Modo value
     * @uses Modo::valueIsValid()
     * @uses Modo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modo
     * @return ETIQUETATYPE
     */
    public function setModo($modo = null)
    {
        // validation for constraint: enumeration
        if (!Modo::valueIsValid($modo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Modo', is_array($modo) ? implode(', ', $modo) : var_export($modo, true), implode(', ', Modo::getValidValues())), __LINE__);
        }
        $this->Modo = $modo;
        return $this;
    }
    /**
     * Get Etiqueta_xml value
     * @return DATOSETIQUETAXMLTYPE|null
     */
    public function getEtiqueta_xml()
    {
        return $this->Etiqueta_xml;
    }
    /**
     * Set Etiqueta_xml value
     * @param DATOSETIQUETAXMLTYPE $etiqueta_xml
     * @return ETIQUETATYPE
     */
    public function setEtiqueta_xml(DATOSETIQUETAXMLTYPE $etiqueta_xml = null)
    {
        $this->Etiqueta_xml = $etiqueta_xml;
        return $this;
    }
    /**
     * Get Etiqueta_pdf value
     * @return FICHEROADJUNTOTYPE|null
     */
    public function getEtiqueta_pdf()
    {
        return $this->Etiqueta_pdf;
    }
    /**
     * Set Etiqueta_pdf value
     * @param FICHEROADJUNTOTYPE $etiqueta_pdf
     * @return ETIQUETATYPE
     */
    public function setEtiqueta_pdf(FICHEROADJUNTOTYPE $etiqueta_pdf = null)
    {
        $this->Etiqueta_pdf = $etiqueta_pdf;
        return $this;
    }
    /**
     * Get Etiqueta_zpl value
     * @return FICHEROADJUNTOTYPE|null
     */
    public function getEtiqueta_zpl()
    {
        return $this->Etiqueta_zpl;
    }
    /**
     * Set Etiqueta_zpl value
     * @param FICHEROADJUNTOTYPE $etiqueta_zpl
     * @return ETIQUETATYPE
     */
    public function setEtiqueta_zpl(FICHEROADJUNTOTYPE $etiqueta_zpl = null)
    {
        $this->Etiqueta_zpl = $etiqueta_zpl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ETIQUETATYPE
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
