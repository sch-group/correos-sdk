<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSDESTINATARIOTYPE StructType
 * @subpackage Structs
 */
class DATOSDESTINATARIOTYPE extends AbstractStructBase
{
    /**
     * The Identificacion
     * Meta informations extracted from the WSDL
     * - ref: xsd:Identificacion
     * @var IDENTIFICACIONTYPE
     */
    public $Identificacion;
    /**
     * The DatosDireccion
     * Meta informations extracted from the WSDL
     * - ref: xsd:DatosDireccion
     * @var DIRECCIONTYPE
     */
    public $DatosDireccion;
    /**
     * The DatosDireccion2
     * Meta informations extracted from the WSDL
     * - ref: xsd:DatosDireccion2
     * @var DIRECCIONTYPE
     */
    public $DatosDireccion2;
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
     * The DestinoApartadoPostalinternacional
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DestinoApartadoPostalinternacional
     * @var string
     */
    public $DestinoApartadoPostalinternacional;
    /**
     * The ApartadoPostaldestino
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:ApartadoPostaldestino
     * @var string
     */
    public $ApartadoPostaldestino;
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
     * The DatosSMS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DatosSMS
     * @var SMSTYPE
     */
    public $DatosSMS;
    /**
     * Constructor method for DATOSDESTINATARIOTYPE
     * @uses DATOSDESTINATARIOTYPE::setIdentificacion()
     * @uses DATOSDESTINATARIOTYPE::setDatosDireccion()
     * @uses DATOSDESTINATARIOTYPE::setDatosDireccion2()
     * @uses DATOSDESTINATARIOTYPE::setCP()
     * @uses DATOSDESTINATARIOTYPE::setZIP()
     * @uses DATOSDESTINATARIOTYPE::setPais()
     * @uses DATOSDESTINATARIOTYPE::setDestinoApartadoPostalinternacional()
     * @uses DATOSDESTINATARIOTYPE::setApartadoPostaldestino()
     * @uses DATOSDESTINATARIOTYPE::setTelefonocontacto()
     * @uses DATOSDESTINATARIOTYPE::setEmail()
     * @uses DATOSDESTINATARIOTYPE::setDatosSMS()
     * @param IDENTIFICACIONTYPE $identificacion
     * @param DIRECCIONTYPE $datosDireccion
     * @param DIRECCIONTYPE $datosDireccion2
     * @param string $cP
     * @param string $zIP
     * @param string $pais
     * @param string $destinoApartadoPostalinternacional
     * @param string $apartadoPostaldestino
     * @param string $telefonocontacto
     * @param string $email
     * @param SMSTYPE $datosSMS
     */
    public function __construct(
        IDENTIFICACIONTYPE $identificacion = null,
        DIRECCIONTYPE $datosDireccion = null,
        DIRECCIONTYPE $datosDireccion2 = null,
        $cP = null,
        $zIP = null,
        $pais = null,
        $destinoApartadoPostalinternacional = null,
        $apartadoPostaldestino = null,
        $telefonocontacto = null,
        $email = null,
        SMSTYPE $datosSMS = null
    ) {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setDatosDireccion2($datosDireccion2)
            ->setCP($cP)
            ->setZIP($zIP)
            ->setPais($pais)
            ->setDestinoApartadoPostalinternacional($destinoApartadoPostalinternacional)
            ->setApartadoPostaldestino($apartadoPostaldestino)
            ->setTelefonocontacto($telefonocontacto)
            ->setEmail($email)
            ->setDatosSMS($datosSMS);
    }
    /**
     * Get Identificacion value
     * @return IDENTIFICACIONTYPE|null
     */
    public function getIdentificacion()
    {
        return $this->Identificacion;
    }
    /**
     * Set Identificacion value
     * @param IDENTIFICACIONTYPE $identificacion
     * @return DATOSDESTINATARIOTYPE
     */
    public function setIdentificacion(IDENTIFICACIONTYPE $identificacion = null)
    {
        $this->Identificacion = $identificacion;
        return $this;
    }
    /**
     * Get DatosDireccion value
     * @return DIRECCIONTYPE|null
     */
    public function getDatosDireccion()
    {
        return $this->DatosDireccion;
    }
    /**
     * Set DatosDireccion value
     * @param DIRECCIONTYPE $datosDireccion
     * @return DATOSDESTINATARIOTYPE
     */
    public function setDatosDireccion(DIRECCIONTYPE $datosDireccion = null)
    {
        $this->DatosDireccion = $datosDireccion;
        return $this;
    }
    /**
     * Get DatosDireccion2 value
     * @return DIRECCIONTYPE|null
     */
    public function getDatosDireccion2()
    {
        return $this->DatosDireccion2;
    }
    /**
     * Set DatosDireccion2 value
     * @param DIRECCIONTYPE $datosDireccion2
     * @return DATOSDESTINATARIOTYPE
     */
    public function setDatosDireccion2(DIRECCIONTYPE $datosDireccion2 = null)
    {
        $this->DatosDireccion2 = $datosDireccion2;
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
     * @return DATOSDESTINATARIOTYPE
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
     * @return DATOSDESTINATARIOTYPE
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
     * @return DATOSDESTINATARIOTYPE
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
     * Get DestinoApartadoPostalinternacional value
     * @return string|null
     */
    public function getDestinoApartadoPostalinternacional()
    {
        return $this->DestinoApartadoPostalinternacional;
    }
    /**
     * Set DestinoApartadoPostalinternacional value
     * @param string $destinoApartadoPostalinternacional
     * @return DATOSDESTINATARIOTYPE
     */
    public function setDestinoApartadoPostalinternacional($destinoApartadoPostalinternacional = null)
    {
        // validation for constraint: string
        if (!is_null($destinoApartadoPostalinternacional) && !is_string($destinoApartadoPostalinternacional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinoApartadoPostalinternacional, true), gettype($destinoApartadoPostalinternacional)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($destinoApartadoPostalinternacional) && mb_strlen($destinoApartadoPostalinternacional) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($destinoApartadoPostalinternacional)), __LINE__);
        }
        $this->DestinoApartadoPostalinternacional = $destinoApartadoPostalinternacional;
        return $this;
    }
    /**
     * Get ApartadoPostaldestino value
     * @return string|null
     */
    public function getApartadoPostaldestino()
    {
        return $this->ApartadoPostaldestino;
    }
    /**
     * Set ApartadoPostaldestino value
     * @param string $apartadoPostaldestino
     * @return DATOSDESTINATARIOTYPE
     */
    public function setApartadoPostaldestino($apartadoPostaldestino = null)
    {
        // validation for constraint: string
        if (!is_null($apartadoPostaldestino) && !is_string($apartadoPostaldestino)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoPostaldestino, true), gettype($apartadoPostaldestino)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($apartadoPostaldestino) && mb_strlen($apartadoPostaldestino) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($apartadoPostaldestino)), __LINE__);
        }
        $this->ApartadoPostaldestino = $apartadoPostaldestino;
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
     * @return DATOSDESTINATARIOTYPE
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
     * @return DATOSDESTINATARIOTYPE
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
     * Get DatosSMS value
     * @return SMSTYPE|null
     */
    public function getDatosSMS()
    {
        return $this->DatosSMS;
    }
    /**
     * Set DatosSMS value
     * @param SMSTYPE $datosSMS
     * @return DATOSDESTINATARIOTYPE
     */
    public function setDatosSMS(SMSTYPE $datosSMS = null)
    {
        $this->DatosSMS = $datosSMS;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSDESTINATARIOTYPE
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
