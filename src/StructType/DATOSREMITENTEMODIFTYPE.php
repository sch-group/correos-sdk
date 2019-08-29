<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSREMITENTEMODIFTYPE StructType
 * @subpackage Structs
 */
class DATOSREMITENTEMODIFTYPE extends AbstractStructBase
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
     * Constructor method for DATOSREMITENTEMODIFTYPE
     * @uses DATOSREMITENTEMODIFTYPE::setIdentificacion()
     * @uses DATOSREMITENTEMODIFTYPE::setDatosDireccion()
     * @uses DATOSREMITENTEMODIFTYPE::setTelefonocontacto()
     * @uses DATOSREMITENTEMODIFTYPE::setEmail()
     * @uses DATOSREMITENTEMODIFTYPE::setDatosSMS()
     * @param IDENTIFICACIONTYPE $identificacion
     * @param DIRECCIONTYPE $datosDireccion
     * @param string $telefonocontacto
     * @param string $email
     * @param SMSTYPE $datosSMS
     */
    public function __construct(IDENTIFICACIONTYPE $identificacion = null, DIRECCIONTYPE $datosDireccion = null, $telefonocontacto = null, $email = null, SMSTYPE $datosSMS = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
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
     * @return DATOSREMITENTEMODIFTYPE
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
     * @return DATOSREMITENTEMODIFTYPE
     */
    public function setDatosDireccion(DIRECCIONTYPE $datosDireccion = null)
    {
        $this->DatosDireccion = $datosDireccion;
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
     * @return DATOSREMITENTEMODIFTYPE
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
     * @return DATOSREMITENTEMODIFTYPE
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
     * @return DATOSREMITENTEMODIFTYPE
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
     * @return DATOSREMITENTEMODIFTYPE
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
