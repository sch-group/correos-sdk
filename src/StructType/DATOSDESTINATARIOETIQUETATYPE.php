<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSDESTINATARIOETIQUETATYPE StructType
 * @subpackage Structs
 */
class DATOSDESTINATARIOETIQUETATYPE extends AbstractStructBase
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
     * The ZIP
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ZIP
     * @var string
     */
    public $ZIP;
    /**
     * The Pais
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Pais
     * @var string
     */
    public $Pais;
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
     * The Telefono
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Telefono
     * @var string
     */
    public $Telefono;
    /**
     * Constructor method for DATOSDESTINATARIOETIQUETATYPE
     * @uses DATOSDESTINATARIOETIQUETATYPE::setNombre()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setDireccion()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setLocalidad()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setProvincia()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setCP()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setZIP()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setPais()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setPersonaContacto()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setTelefono()
     * @param string $nombre
     * @param string $direccion
     * @param string $localidad
     * @param string $provincia
     * @param string $cP
     * @param string $zIP
     * @param string $pais
     * @param string $personaContacto
     * @param string $telefono
     */
    public function __construct($nombre = null, $direccion = null, $localidad = null, $provincia = null, $cP = null, $zIP = null, $pais = null, $personaContacto = null, $telefono = null)
    {
        $this
            ->setNombre($nombre)
            ->setDireccion($direccion)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setCP($cP)
            ->setZIP($zIP)
            ->setPais($pais)
            ->setPersonaContacto($personaContacto)
            ->setTelefono($telefono);
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * Get ZIP value
     * @return string|null
     */
    public function getZIP()
    {
        return $this->ZIP;
    }
    /**
     * Set ZIP value
     * @param string $zIP
     * @return DATOSDESTINATARIOETIQUETATYPE
     */
    public function setZIP($zIP = null)
    {
        // validation for constraint: string
        if (!is_null($zIP) && !is_string($zIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zIP, true), gettype($zIP)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($zIP) && mb_strlen($zIP) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($zIP)), __LINE__);
        }
        $this->ZIP = $zIP;
        return $this;
    }
    /**
     * Get Pais value
     * @return string|null
     */
    public function getPais()
    {
        return $this->Pais;
    }
    /**
     * Set Pais value
     * @param string $pais
     * @return DATOSDESTINATARIOETIQUETATYPE
     */
    public function setPais($pais = null)
    {
        // validation for constraint: string
        if (!is_null($pais) && !is_string($pais)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pais, true), gettype($pais)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($pais) && mb_strlen($pais) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($pais)), __LINE__);
        }
        $this->Pais = $pais;
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
     * @return DATOSDESTINATARIOETIQUETATYPE
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
     * Get Telefono value
     * @return string|null
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }
    /**
     * Set Telefono value
     * @param string $telefono
     * @return DATOSDESTINATARIOETIQUETATYPE
     */
    public function setTelefono($telefono = null)
    {
        // validation for constraint: string
        if (!is_null($telefono) && !is_string($telefono)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefono, true), gettype($telefono)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($telefono) && mb_strlen($telefono) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($telefono)), __LINE__);
        }
        $this->Telefono = $telefono;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSDESTINATARIOETIQUETATYPE
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
