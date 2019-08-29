<?php

namespace CorreosSdk\StructType;


/**
 * This class stands for DATOSDESTINATARIOREEXPTYPE StructType
 * @subpackage Structs
 */
class DATOSDESTINATARIOREEXPTYPE extends AbstractStructBase
{
    /**
     * The Nombre
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - minOccurs: 0
     * - ref: xsd:Nombre
     * @var string           */
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
     * The TipoDireccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minOccurs: 0
     * - ref: xsd:TipoDireccion
     * @var string
     */
    public $TipoDireccion;
    /**
     * The Direccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:Direccion
     * @var string
     */
    public $Direccion;
    /**
     * The Numero
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Numero
     * @var string
     */
    public $Numero;
    /**
     * The Portal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Portal
     * @var string
     */
    public $Portal;
    /**
     * The Bloque
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Bloque
     * @var string
     */
    public $Bloque;
    /**
     * The Escalera
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Escalera
     * @var string
     */
    public $Escalera;
    /**
     * The Piso
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Piso
     * @var string
     */
    public $Piso;
    /**
     * The Puerta
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Puerta
     * @var string
     */
    public $Puerta;
    /**
     * The Localidad
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
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
     * The Telefonocontacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Telefonocontacto
     * @var string
     */
    public $Telefonocontacto;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Email
     * @var string
     */
    public $Email;
    /**
     * The Observaciones1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 45
     * - minOccurs: 0
     * - ref: xsd:Observaciones1
     * @var string
     */
    public $Observaciones1;
    /**
     * The OficinaElegida
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:OficinaElegida
     * @var string
     */
    public $OficinaElegida;
    /**
     * The CodigoHomepaq
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minOccurs: 0
     * - ref: xsd:CodigoHomepaq
     * @var string
     */
    public $CodigoHomepaq;
    /**
     * Constructor method for DATOSDESTINATARIOREEXPTYPE
     * @uses DATOSDESTINATARIOREEXPTYPE::setNombre()
     * @uses DATOSDESTINATARIOREEXPTYPE::setApellido1()
     * @uses DATOSDESTINATARIOREEXPTYPE::setApellido2()
     * @uses DATOSDESTINATARIOREEXPTYPE::setNif()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPersonaContacto()
     * @uses DATOSDESTINATARIOREEXPTYPE::setTipoDireccion()
     * @uses DATOSDESTINATARIOREEXPTYPE::setDireccion()
     * @uses DATOSDESTINATARIOREEXPTYPE::setNumero()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPortal()
     * @uses DATOSDESTINATARIOREEXPTYPE::setBloque()
     * @uses DATOSDESTINATARIOREEXPTYPE::setEscalera()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPiso()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPuerta()
     * @uses DATOSDESTINATARIOREEXPTYPE::setLocalidad()
     * @uses DATOSDESTINATARIOREEXPTYPE::setProvincia()
     * @uses DATOSDESTINATARIOREEXPTYPE::setCP()
     * @uses DATOSDESTINATARIOREEXPTYPE::setTelefonocontacto()
     * @uses DATOSDESTINATARIOREEXPTYPE::setEmail()
     * @uses DATOSDESTINATARIOREEXPTYPE::setObservaciones1()
     * @uses DATOSDESTINATARIOREEXPTYPE::setOficinaElegida()
     * @uses DATOSDESTINATARIOREEXPTYPE::setCodigoHomepaq()
     * @param string $nombre
     * @param string $apellido1
     * @param string $apellido2
     * @param string $nif
     * @param string $personaContacto
     * @param string $tipoDireccion
     * @param string $direccion
     * @param string $numero
     * @param string $portal
     * @param string $bloque
     * @param string $escalera
     * @param string $piso
     * @param string $puerta
     * @param string $localidad
     * @param string $provincia
     * @param string $cP
     * @param string $telefonocontacto
     * @param string $email
     * @param string $observaciones1
     * @param string $oficinaElegida
     * @param string $codigoHomepaq
     */
    public function __construct($nombre = null, $apellido1 = null, $apellido2 = null, $nif = null, $personaContacto = null, $tipoDireccion = null, $direccion = null, $numero = null, $portal = null, $bloque = null, $escalera = null, $piso = null, $puerta = null, $localidad = null, $provincia = null, $cP = null, $telefonocontacto = null, $email = null, $observaciones1 = null, $oficinaElegida = null, $codigoHomepaq = null)
    {
        $this
            ->setNombre($nombre)
            ->setApellido1($apellido1)
            ->setApellido2($apellido2)
            ->setNif($nif)
            ->setPersonaContacto($personaContacto)
            ->setTipoDireccion($tipoDireccion)
            ->setDireccion($direccion)
            ->setNumero($numero)
            ->setPortal($portal)
            ->setBloque($bloque)
            ->setEscalera($escalera)
            ->setPiso($piso)
            ->setPuerta($puerta)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setCP($cP)
            ->setTelefonocontacto($telefonocontacto)
            ->setEmail($email)
            ->setObservaciones1($observaciones1)
            ->setOficinaElegida($oficinaElegida)
            ->setCodigoHomepaq($codigoHomepaq);
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * Get TipoDireccion value
     * @return string|null
     */
    public function getTipoDireccion()
    {
        return $this->TipoDireccion;
    }
    /**
     * Set TipoDireccion value
     * @param string $tipoDireccion
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setTipoDireccion($tipoDireccion = null)
    {
        // validation for constraint: string
        if (!is_null($tipoDireccion) && !is_string($tipoDireccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoDireccion, true), gettype($tipoDireccion)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tipoDireccion) && mb_strlen($tipoDireccion) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($tipoDireccion)), __LINE__);
        }
        $this->TipoDireccion = $tipoDireccion;
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * Get Numero value
     * @return string|null
     */
    public function getNumero()
    {
        return $this->Numero;
    }
    /**
     * Set Numero value
     * @param string $numero
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setNumero($numero = null)
    {
        // validation for constraint: string
        if (!is_null($numero) && !is_string($numero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($numero) && mb_strlen($numero) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($numero)), __LINE__);
        }
        $this->Numero = $numero;
        return $this;
    }
    /**
     * Get Portal value
     * @return string|null
     */
    public function getPortal()
    {
        return $this->Portal;
    }
    /**
     * Set Portal value
     * @param string $portal
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setPortal($portal = null)
    {
        // validation for constraint: string
        if (!is_null($portal) && !is_string($portal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portal, true), gettype($portal)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($portal) && mb_strlen($portal) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($portal)), __LINE__);
        }
        $this->Portal = $portal;
        return $this;
    }
    /**
     * Get Bloque value
     * @return string|null
     */
    public function getBloque()
    {
        return $this->Bloque;
    }
    /**
     * Set Bloque value
     * @param string $bloque
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setBloque($bloque = null)
    {
        // validation for constraint: string
        if (!is_null($bloque) && !is_string($bloque)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bloque, true), gettype($bloque)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($bloque) && mb_strlen($bloque) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($bloque)), __LINE__);
        }
        $this->Bloque = $bloque;
        return $this;
    }
    /**
     * Get Escalera value
     * @return string|null
     */
    public function getEscalera()
    {
        return $this->Escalera;
    }
    /**
     * Set Escalera value
     * @param string $escalera
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setEscalera($escalera = null)
    {
        // validation for constraint: string
        if (!is_null($escalera) && !is_string($escalera)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($escalera, true), gettype($escalera)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($escalera) && mb_strlen($escalera) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($escalera)), __LINE__);
        }
        $this->Escalera = $escalera;
        return $this;
    }
    /**
     * Get Piso value
     * @return string|null
     */
    public function getPiso()
    {
        return $this->Piso;
    }
    /**
     * Set Piso value
     * @param string $piso
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setPiso($piso = null)
    {
        // validation for constraint: string
        if (!is_null($piso) && !is_string($piso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($piso, true), gettype($piso)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($piso) && mb_strlen($piso) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($piso)), __LINE__);
        }
        $this->Piso = $piso;
        return $this;
    }
    /**
     * Get Puerta value
     * @return string|null
     */
    public function getPuerta()
    {
        return $this->Puerta;
    }
    /**
     * Set Puerta value
     * @param string $puerta
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setPuerta($puerta = null)
    {
        // validation for constraint: string
        if (!is_null($puerta) && !is_string($puerta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($puerta, true), gettype($puerta)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($puerta) && mb_strlen($puerta) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($puerta)), __LINE__);
        }
        $this->Puerta = $puerta;
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * @return DATOSDESTINATARIOREEXPTYPE
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
     * Get Telefonocontacto value
     * @return string|null
     */
    public function getTelefonocontacto()
    {
        return $this->Telefonocontacto;
    }
    /**
     * Set Telefonocontacto value
     * @param string $telefonocontacto
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setTelefonocontacto($telefonocontacto = null)
    {
        // validation for constraint: string
        if (!is_null($telefonocontacto) && !is_string($telefonocontacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefonocontacto, true), gettype($telefonocontacto)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($telefonocontacto) && mb_strlen($telefonocontacto) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($telefonocontacto)), __LINE__);
        }
        $this->Telefonocontacto = $telefonocontacto;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen($email) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Observaciones1 value
     * @return string|null
     */
    public function getObservaciones1()
    {
        return $this->Observaciones1;
    }
    /**
     * Set Observaciones1 value
     * @param string $observaciones1
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setObservaciones1($observaciones1 = null)
    {
        // validation for constraint: string
        if (!is_null($observaciones1) && !is_string($observaciones1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones1, true), gettype($observaciones1)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($observaciones1) && mb_strlen($observaciones1) > 45) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen($observaciones1)), __LINE__);
        }
        $this->Observaciones1 = $observaciones1;
        return $this;
    }
    /**
     * Get OficinaElegida value
     * @return string|null
     */
    public function getOficinaElegida()
    {
        return $this->OficinaElegida;
    }
    /**
     * Set OficinaElegida value
     * @param string $oficinaElegida
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setOficinaElegida($oficinaElegida = null)
    {
        // validation for constraint: string
        if (!is_null($oficinaElegida) && !is_string($oficinaElegida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaElegida, true), gettype($oficinaElegida)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($oficinaElegida) && mb_strlen($oficinaElegida) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen($oficinaElegida)), __LINE__);
        }
        $this->OficinaElegida = $oficinaElegida;
        return $this;
    }
    /**
     * Get CodigoHomepaq value
     * @return string|null
     */
    public function getCodigoHomepaq()
    {
        return $this->CodigoHomepaq;
    }
    /**
     * Set CodigoHomepaq value
     * @param string $codigoHomepaq
     * @return DATOSDESTINATARIOREEXPTYPE
     */
    public function setCodigoHomepaq($codigoHomepaq = null)
    {
        // validation for constraint: string
        if (!is_null($codigoHomepaq) && !is_string($codigoHomepaq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoHomepaq, true), gettype($codigoHomepaq)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoHomepaq) && mb_strlen($codigoHomepaq) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen($codigoHomepaq)), __LINE__);
        }
        $this->CodigoHomepaq = $codigoHomepaq;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSDESTINATARIOREEXPTYPE
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
