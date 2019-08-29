<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for IDENTIFICACIONREDUCIDOTYPE StructType
 * @subpackage Structs
 */
class IDENTIFICACIONREDUCIDOTYPE extends AbstractStructBase
{
    /**
     * The Nombre
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - minOccurs: 0
     * - ref: xsd:Nombre
     * @var string
     */
    public $Nombre;
    /**
     * The Apellido1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Apellido1
     * @var string
     */
    public $Apellido1;
    /**
     * The Apellido2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Apellido2
     * @var string
     */
    public $Apellido2;
    /**
     * The Nif
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Nif
     * @var string
     */
    public $Nif;
    /**
     * The Empresa
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:Empresa
     * @var string
     */
    public $Empresa;
    /**
     * Constructor method for IDENTIFICACIONREDUCIDOTYPE
     * @uses IDENTIFICACIONREDUCIDOTYPE::setNombre()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setApellido1()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setApellido2()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setNif()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setEmpresa()
     * @param string $nombre
     * @param string $apellido1
     * @param string $apellido2
     * @param string $nif
     * @param string $empresa
     */
    public function __construct($nombre = null, $apellido1 = null, $apellido2 = null, $nif = null, $empresa = null)
    {
        $this
            ->setNombre($nombre)
            ->setApellido1($apellido1)
            ->setApellido2($apellido2)
            ->setNif($nif)
            ->setEmpresa($empresa);
    }
    /**
     * Get Nombre value
     * @return string|null
     */
    public function getNombre()
    {
        return $this->Nombre;
    }
    /**
     * Set Nombre value
     * @param string $nombre
     * @return IDENTIFICACIONREDUCIDOTYPE
     */
    public function setNombre($nombre = null)
    {
        // validation for constraint: string
        if (!is_null($nombre) && !is_string($nombre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($nombre) && mb_strlen($nombre) > 300) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen($nombre)), __LINE__);
        }
        $this->Nombre = $nombre;
        return $this;
    }
    /**
     * Get Apellido1 value
     * @return string|null
     */
    public function getApellido1()
    {
        return $this->Apellido1;
    }
    /**
     * Set Apellido1 value
     * @param string $apellido1
     * @return IDENTIFICACIONREDUCIDOTYPE
     */
    public function setApellido1($apellido1 = null)
    {
        // validation for constraint: string
        if (!is_null($apellido1) && !is_string($apellido1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido1, true), gettype($apellido1)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($apellido1) && mb_strlen($apellido1) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($apellido1)), __LINE__);
        }
        $this->Apellido1 = $apellido1;
        return $this;
    }
    /**
     * Get Apellido2 value
     * @return string|null
     */
    public function getApellido2()
    {
        return $this->Apellido2;
    }
    /**
     * Set Apellido2 value
     * @param string $apellido2
     * @return IDENTIFICACIONREDUCIDOTYPE
     */
    public function setApellido2($apellido2 = null)
    {
        // validation for constraint: string
        if (!is_null($apellido2) && !is_string($apellido2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido2, true), gettype($apellido2)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($apellido2) && mb_strlen($apellido2) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($apellido2)), __LINE__);
        }
        $this->Apellido2 = $apellido2;
        return $this;
    }
    /**
     * Get Nif value
     * @return string|null
     */
    public function getNif()
    {
        return $this->Nif;
    }
    /**
     * Set Nif value
     * @param string $nif
     * @return IDENTIFICACIONREDUCIDOTYPE
     */
    public function setNif($nif = null)
    {
        // validation for constraint: string
        if (!is_null($nif) && !is_string($nif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($nif) && mb_strlen($nif) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($nif)), __LINE__);
        }
        $this->Nif = $nif;
        return $this;
    }
    /**
     * Get Empresa value
     * @return string|null
     */
    public function getEmpresa()
    {
        return $this->Empresa;
    }
    /**
     * Set Empresa value
     * @param string $empresa
     * @return IDENTIFICACIONREDUCIDOTYPE
     */
    public function setEmpresa($empresa = null)
    {
        // validation for constraint: string
        if (!is_null($empresa) && !is_string($empresa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($empresa, true), gettype($empresa)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($empresa) && mb_strlen($empresa) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($empresa)), __LINE__);
        }
        $this->Empresa = $empresa;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return IDENTIFICACIONREDUCIDOTYPE
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
