<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSREMITENTEETIQUETATYPE StructType
 * @subpackage Structs
 */
class DATOSREMITENTEETIQUETATYPE extends AbstractStructBase
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
     * The Direccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Direccion
     * @var string
     */
    public $Direccion;
    /**
     * The Localidad
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Localidad
     * @var string
     */
    public $Localidad;
    /**
     * The Provincia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minOccurs: 0
     * - ref: xsd:Provincia
     * @var string
     */
    public $Provincia;
    /**
     * The PersonaContacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:PersonaContacto
     * @var string
     */
    public $PersonaContacto;
    /**
     * The CP
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:CP
     * @var string
     */
    public $CP;
    /**
     * Constructor method for DATOSREMITENTEETIQUETATYPE
     * @uses DATOSREMITENTEETIQUETATYPE::setNombre()
     * @uses DATOSREMITENTEETIQUETATYPE::setDireccion()
     * @uses DATOSREMITENTEETIQUETATYPE::setLocalidad()
     * @uses DATOSREMITENTEETIQUETATYPE::setProvincia()
     * @uses DATOSREMITENTEETIQUETATYPE::setPersonaContacto()
     * @uses DATOSREMITENTEETIQUETATYPE::setCP()
     * @param string $nombre
     * @param string $direccion
     * @param string $localidad
     * @param string $provincia
     * @param string $personaContacto
     * @param string $cP
     */
    public function __construct($nombre = null, $direccion = null, $localidad = null, $provincia = null, $personaContacto = null, $cP = null)
    {
        $this
            ->setNombre($nombre)
            ->setDireccion($direccion)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setPersonaContacto($personaContacto)
            ->setCP($cP);
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
     * @return DATOSREMITENTEETIQUETATYPE
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
     * Get Direccion value
     * @return string|null
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }
    /**
     * Set Direccion value
     * @param string $direccion
     * @return DATOSREMITENTEETIQUETATYPE
     */
    public function setDireccion($direccion = null)
    {
        // validation for constraint: string
        if (!is_null($direccion) && !is_string($direccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccion, true), gettype($direccion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($direccion) && mb_strlen($direccion) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($direccion)), __LINE__);
        }
        $this->Direccion = $direccion;
        return $this;
    }
    /**
     * Get Localidad value
     * @return string|null
     */
    public function getLocalidad()
    {
        return $this->Localidad;
    }
    /**
     * Set Localidad value
     * @param string $localidad
     * @return DATOSREMITENTEETIQUETATYPE
     */
    public function setLocalidad($localidad = null)
    {
        // validation for constraint: string
        if (!is_null($localidad) && !is_string($localidad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidad, true), gettype($localidad)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($localidad) && mb_strlen($localidad) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($localidad)), __LINE__);
        }
        $this->Localidad = $localidad;
        return $this;
    }
    /**
     * Get Provincia value
     * @return string|null
     */
    public function getProvincia()
    {
        return $this->Provincia;
    }
    /**
     * Set Provincia value
     * @param string $provincia
     * @return DATOSREMITENTEETIQUETATYPE
     */
    public function setProvincia($provincia = null)
    {
        // validation for constraint: string
        if (!is_null($provincia) && !is_string($provincia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($provincia) && mb_strlen($provincia) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($provincia)), __LINE__);
        }
        $this->Provincia = $provincia;
        return $this;
    }
    /**
     * Get PersonaContacto value
     * @return string|null
     */
    public function getPersonaContacto()
    {
        return $this->PersonaContacto;
    }
    /**
     * Set PersonaContacto value
     * @param string $personaContacto
     * @return DATOSREMITENTEETIQUETATYPE
     */
    public function setPersonaContacto($personaContacto = null)
    {
        // validation for constraint: string
        if (!is_null($personaContacto) && !is_string($personaContacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaContacto, true), gettype($personaContacto)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($personaContacto) && mb_strlen($personaContacto) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($personaContacto)), __LINE__);
        }
        $this->PersonaContacto = $personaContacto;
        return $this;
    }
    /**
     * Get CP value
     * @return string|null
     */
    public function getCP()
    {
        return $this->CP;
    }
    /**
     * Set CP value
     * @param string $cP
     * @return DATOSREMITENTEETIQUETATYPE
     */
    public function setCP($cP = null)
    {
        // validation for constraint: string
        if (!is_null($cP) && !is_string($cP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cP, true), gettype($cP)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cP) && mb_strlen($cP) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($cP)), __LINE__);
        }
        $this->CP = $cP;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSREMITENTEETIQUETATYPE
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
