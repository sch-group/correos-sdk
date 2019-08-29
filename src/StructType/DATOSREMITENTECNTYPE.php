<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSREMITENTECNTYPE StructType
 * @subpackage Structs
 */
class DATOSREMITENTECNTYPE extends AbstractStructBase
{
    /**
     * The Identificacion
     * @var IDENTIFICACIONREDUCIDOTYPE
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
     * The CP
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
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
     * Constructor method for DATOSREMITENTECNTYPE
     * @uses DATOSREMITENTECNTYPE::setIdentificacion()
     * @uses DATOSREMITENTECNTYPE::setDatosDireccion()
     * @uses DATOSREMITENTECNTYPE::setCP()
     * @uses DATOSREMITENTECNTYPE::setTelefonocontacto()
     * @param IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @param DIRECCIONTYPE $datosDireccion
     * @param string $cP
     * @param string $telefonocontacto
     */
    public function __construct(IDENTIFICACIONREDUCIDOTYPE $identificacion = null, DIRECCIONTYPE $datosDireccion = null, $cP = null, $telefonocontacto = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setCP($cP)
            ->setTelefonocontacto($telefonocontacto);
    }
    /**
     * Get Identificacion value
     * @return IDENTIFICACIONREDUCIDOTYPE|null
     */
    public function getIdentificacion()
    {
        return $this->Identificacion;
    }
    /**
     * Set Identificacion value
     * @param IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @return DATOSREMITENTECNTYPE
     */
    public function setIdentificacion(IDENTIFICACIONREDUCIDOTYPE $identificacion = null)
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
     * @return DATOSREMITENTECNTYPE
     */
    public function setDatosDireccion(DIRECCIONTYPE $datosDireccion = null)
    {
        $this->DatosDireccion = $datosDireccion;
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
     * @return DATOSREMITENTECNTYPE
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
     * @return DATOSREMITENTECNTYPE
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSREMITENTECNTYPE
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
