<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\Accion;


/**
 * This class stands for PeticionModificarAutorizacionPreviaEntrega StructType
 * @subpackage Structs
 */
class PeticionModificarAutorizacionPreviaEntrega extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: xsd:codCertificado
     * @var string
     */
    public $codCertificado;
    /**
     * The Accion
     * Meta informations extracted from the WSDL
     * - ref: xsd:Accion
     * @var string
     */
    public $Accion;
    /**
     * Constructor method for PeticionModificarAutorizacionPreviaEntrega
     * @uses PeticionModificarAutorizacionPreviaEntrega::setCodCertificado()
     * @uses PeticionModificarAutorizacionPreviaEntrega::setAccion()
     * @param string $codCertificado
     * @param string $accion
     */
    public function __construct($codCertificado = null, $accion = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setAccion($accion);
    }
    /**
     * Get codCertificado value
     * @return string
     */
    public function getCodCertificado()
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return PeticionModificarAutorizacionPreviaEntrega
     */
    public function setCodCertificado($codCertificado = null)
    {
        // validation for constraint: string
        if (!is_null($codCertificado) && !is_string($codCertificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCertificado, true), gettype($codCertificado)), __LINE__);
        }
        $this->codCertificado = $codCertificado;
        return $this;
    }
    /**
     * Get Accion value
     * @return string|null
     */
    public function getAccion()
    {
        return $this->Accion;
    }
    /**
     * Set Accion value
     * @uses Accion::valueIsValid()
     * @uses Accion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accion
     * @return PeticionModificarAutorizacionPreviaEntrega
     */
    public function setAccion($accion = null)
    {
        // validation for constraint: enumeration
        if (!Accion::valueIsValid($accion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class Accion', is_array($accion) ? implode(', ', $accion) : var_export($accion, true), implode(', ', Accion::getValidValues())), __LINE__);
        }
        $this->Accion = $accion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionModificarAutorizacionPreviaEntrega
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
