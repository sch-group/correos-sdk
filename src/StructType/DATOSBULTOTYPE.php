<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSBULTOTYPE StructType
 * @subpackage Structs
 */
class DATOSBULTOTYPE extends AbstractStructBase
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
     * The CodManifiesto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - ref: xsd:CodManifiesto
     * @var string
     */
    public $CodManifiesto;
    /**
     * The Etiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:Etiqueta
     * @var ETIQUETATYPE
     */
    public $Etiqueta;
    /**
     * The CodigoIpc
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:CodigoIpc
     * @var string
     */
    public $CodigoIpc;

    /**
     * Constructor method for DATOSBULTOTYPE
     * @uses DATOSBULTOTYPE::setNumBulto()
     * @uses DATOSBULTOTYPE::setCodEnvio()
     * @uses DATOSBULTOTYPE::setCodManifiesto()
     * @uses DATOSBULTOTYPE::setEtiqueta()
     * @uses DATOSBULTOTYPE::setCodigoIpc()
     * @param int $numBulto
     * @param string $codEnvio
     * @param string $codManifiesto
     * @param ETIQUETATYPE $etiqueta
     * @param string $codigoIpc
     */
    public function __construct($numBulto = null, $codEnvio = null, $codManifiesto = null, ETIQUETATYPE $etiqueta = null, $codigoIpc = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setCodEnvio($codEnvio)
            ->setCodManifiesto($codManifiesto)
            ->setEtiqueta($etiqueta)
            ->setCodigoIpc($codigoIpc);
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
     * @return DATOSBULTOTYPE
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
     * @return DATOSBULTOTYPE
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
     * Get CodManifiesto value
     * @return string|null
     */
    public function getCodManifiesto()
    {
        return $this->CodManifiesto;
    }

    /**
     * Set CodManifiesto value
     * @param string $codManifiesto
     * @return DATOSBULTOTYPE
     */
    public function setCodManifiesto($codManifiesto = null)
    {
        // validation for constraint: string
        if (!is_null($codManifiesto) && !is_string($codManifiesto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codManifiesto, true), gettype($codManifiesto)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($codManifiesto) && mb_strlen($codManifiesto) > 24) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen($codManifiesto)), __LINE__);
        }
        $this->CodManifiesto = $codManifiesto;
        return $this;
    }

    /**
     * Get Etiqueta value
     * @return ETIQUETATYPE|null
     */
    public function getEtiqueta()
    {
        return $this->Etiqueta;
    }

    /**
     * Set Etiqueta value
     * @param ETIQUETATYPE $etiqueta
     * @return DATOSBULTOTYPE
     */
    public function setEtiqueta(ETIQUETATYPE $etiqueta = null)
    {
        $this->Etiqueta = $etiqueta;
        return $this;
    }

    /**
     * Get CodigoIpc value
     * @return string|null
     */
    public function getCodigoIpc()
    {
        return $this->CodigoIpc;
    }

    /**
     * Set CodigoIpc value
     * @param string $codigoIpc
     * @return DATOSBULTOTYPE
     */
    public function setCodigoIpc($codigoIpc = null)
    {
        // validation for constraint: string
        if (!is_null($codigoIpc) && !is_string($codigoIpc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoIpc, true), gettype($codigoIpc)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($codigoIpc) && mb_strlen($codigoIpc) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($codigoIpc)), __LINE__);
        }
        $this->CodigoIpc = $codigoIpc;
        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see  AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSBULTOTYPE
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
