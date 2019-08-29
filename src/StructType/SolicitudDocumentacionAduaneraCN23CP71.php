<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for SolicitudDocumentacionAduaneraCN23CP71 StructType
 * @subpackage Structs
 */
class SolicitudDocumentacionAduaneraCN23CP71 extends AbstractStructBase
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
     * Constructor method for SolicitudDocumentacionAduaneraCN23CP71
     * @uses SolicitudDocumentacionAduaneraCN23CP71::setCodCertificado()
     * @param string $codCertificado
     */
    public function __construct($codCertificado = null)
    {
        $this
            ->setCodCertificado($codCertificado);
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
     * @return SolicitudDocumentacionAduaneraCN23CP71
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
     * @return SolicitudDocumentacionAduaneraCN23CP71
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
