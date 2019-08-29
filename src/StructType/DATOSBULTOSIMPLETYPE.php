<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSBULTOSIMPLETYPE StructType
 * @subpackage Structs
 */
class DATOSBULTOSIMPLETYPE extends AbstractStructBase
{
    /**
     * The NumBulto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NumBulto
     * @var int
     */
    public $NumBulto;
    /**
     * The CodEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string
     */
    public $CodEnvio;
    /**
     * The DestinatarioEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:DestinatarioEtiqueta
     * @var DATOSDESTINATARIOETIQUETATYPE
     */
    public $DestinatarioEtiqueta;
    /**
     * Constructor method for DATOSBULTOSIMPLETYPE
     * @uses DATOSBULTOSIMPLETYPE::setNumBulto()
     * @uses DATOSBULTOSIMPLETYPE::setCodEnvio()
     * @uses DATOSBULTOSIMPLETYPE::setDestinatarioEtiqueta()
     * @param int $numBulto
     * @param string $codEnvio
     * @param DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     */
    public function __construct($numBulto = null, $codEnvio = null, DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setCodEnvio($codEnvio)
            ->setDestinatarioEtiqueta($destinatarioEtiqueta);
    }
    /**
     * Get NumBulto value
     * @return int|null
     */
    public function getNumBulto()
    {
        return $this->NumBulto;
    }
    /**
     * Set NumBulto value
     * @param int $numBulto
     * @return DATOSBULTOSIMPLETYPE
     */
    public function setNumBulto($numBulto = null)
    {
        // validation for constraint: int
        if (!is_null($numBulto) && !(is_int($numBulto) || ctype_digit($numBulto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBulto, true), gettype($numBulto)), __LINE__);
        }
        $this->NumBulto = $numBulto;
        return $this;
    }
    /**
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio()
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return DATOSBULTOSIMPLETYPE
     */
    public function setCodEnvio($codEnvio = null)
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen($codEnvio) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        return $this;
    }
    /**
     * Get DestinatarioEtiqueta value
     * @return DATOSDESTINATARIOETIQUETATYPE|null
     */
    public function getDestinatarioEtiqueta()
    {
        return $this->DestinatarioEtiqueta;
    }
    /**
     * Set DestinatarioEtiqueta value
     * @param DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @return DATOSBULTOSIMPLETYPE
     */
    public function setDestinatarioEtiqueta(DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null)
    {
        $this->DestinatarioEtiqueta = $destinatarioEtiqueta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSBULTOSIMPLETYPE
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
