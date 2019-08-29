<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PeticionAnular StructType
 * @subpackage Structs
 */
class PeticionAnular extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta informations extracted from the WSDL
     * - ref: xsd:codCertificado
     * @var string
     */
    public $codCertificado;
    /**
     * Constructor method for PeticionAnular
     * @uses PeticionAnular::setCodCertificado()
     * @param string $codCertificado
     */
    public function __construct($codCertificado = null)
    {
        $this
            ->setCodCertificado($codCertificado);
    }
    /**
     * Get codCertificado value
     * @return string|null
     */
    public function getCodCertificado()
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return PeticionAnular
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionAnular
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
