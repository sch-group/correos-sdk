<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Tipo_Doc;


/**
 * This class stands for FICHEROADJUNTOTYPE StructType
 * @subpackage Structs
 */
class FICHEROADJUNTOTYPE extends AbstractStructBase
{
    /**
     * The NombreF
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:NombreF
     * @var string
     */
    public $NombreF;
    /**
     * The Tipo_Doc
     * Meta informations extracted from the WSDL
     * - ref: xsd:Tipo_Doc
     * @var string
     */
    public $Tipo_Doc;
    /**
     * The Fichero
     * Meta informations extracted from the WSDL
     * - ref: xsd:Fichero
     * @var string
     */
    public $Fichero;
    /**
     * Constructor method for FICHEROADJUNTOTYPE
     * @uses FICHEROADJUNTOTYPE::setNombreF()
     * @uses FICHEROADJUNTOTYPE::setTipo_Doc()
     * @uses FICHEROADJUNTOTYPE::setFichero()
     * @param string $nombreF
     * @param string $tipo_Doc
     * @param string $fichero
     */
    public function __construct($nombreF = null, $tipo_Doc = null, $fichero = null)
    {
        $this
            ->setNombreF($nombreF)
            ->setTipo_Doc($tipo_Doc)
            ->setFichero($fichero);
    }
    /**
     * Get NombreF value
     * @return string|null
     */
    public function getNombreF()
    {
        return $this->NombreF;
    }
    /**
     * Set NombreF value
     * @param string $nombreF
     * @return FICHEROADJUNTOTYPE
     */
    public function setNombreF($nombreF = null)
    {
        // validation for constraint: string
        if (!is_null($nombreF) && !is_string($nombreF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreF, true), gettype($nombreF)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($nombreF) && mb_strlen($nombreF) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($nombreF)), __LINE__);
        }
        $this->NombreF = $nombreF;
        return $this;
    }
    /**
     * Get Tipo_Doc value
     * @return string|null
     */
    public function getTipo_Doc()
    {
        return $this->Tipo_Doc;
    }
    /**
     * Set Tipo_Doc value
     * @uses Tipo_Doc::valueIsValid()
     * @uses Tipo_Doc::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipo_Doc
     * @return FICHEROADJUNTOTYPE
     */
    public function setTipo_Doc($tipo_Doc = null)
    {
        // validation for constraint: enumeration
        if (!Tipo_Doc::valueIsValid($tipo_Doc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Tipo_Doc', is_array($tipo_Doc) ? implode(', ', $tipo_Doc) : var_export($tipo_Doc, true), implode(', ', Tipo_Doc::getValidValues())), __LINE__);
        }
        $this->Tipo_Doc = $tipo_Doc;
        return $this;
    }
    /**
     * Get Fichero value
     * @return string|null
     */
    public function getFichero()
    {
        return $this->Fichero;
    }
    /**
     * Set Fichero value
     * @param string $fichero
     * @return FICHEROADJUNTOTYPE
     */
    public function setFichero($fichero = null)
    {
        // validation for constraint: string
        if (!is_null($fichero) && !is_string($fichero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fichero, true), gettype($fichero)), __LINE__);
        }
        $this->Fichero = $fichero;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return FICHEROADJUNTOTYPE
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
