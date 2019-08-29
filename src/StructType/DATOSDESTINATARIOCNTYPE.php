<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSDESTINATARIOCNTYPE StructType
 * @subpackage Structs
 */
class DATOSDESTINATARIOCNTYPE extends AbstractStructBase
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
     * Constructor method for DATOSDESTINATARIOCNTYPE
     * @uses DATOSDESTINATARIOCNTYPE::setIdentificacion()
     * @uses DATOSDESTINATARIOCNTYPE::setDatosDireccion()
     * @uses DATOSDESTINATARIOCNTYPE::setDatosDireccion2()
     * @uses DATOSDESTINATARIOCNTYPE::setCP()
     * @param IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @param DIRECCIONTYPE $datosDireccion
     * @param DIRECCIONTYPE $datosDireccion2
     * @param string $cP
     */
    public function __construct(IDENTIFICACIONREDUCIDOTYPE $identificacion = null, DIRECCIONTYPE $datosDireccion = null, DIRECCIONTYPE $datosDireccion2 = null, $cP = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setDatosDireccion2($datosDireccion2)
            ->setCP($cP);
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
     * @return DATOSDESTINATARIOCNTYPE
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
     * @return DATOSDESTINATARIOCNTYPE
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
     * @return DATOSDESTINATARIOCNTYPE
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
     * @return DATOSDESTINATARIOCNTYPE
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
     * @return DATOSDESTINATARIOCNTYPE
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
