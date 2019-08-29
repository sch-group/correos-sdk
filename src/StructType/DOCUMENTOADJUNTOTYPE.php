<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DOCUMENTOADJUNTOTYPE StructType
 * @subpackage Structs
 */
class DOCUMENTOADJUNTOTYPE extends AbstractStructBase
{
    /**
     * The TipoDocumentoAdjunto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $TipoDocumentoAdjunto;
    /**
     * The IdDocumentoAdjunto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdDocumentoAdjunto;
    /**
     * The NombreDocumentoAdjunto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NombreDocumentoAdjunto;
    /**
     * Constructor method for DOCUMENTOADJUNTOTYPE
     * @uses DOCUMENTOADJUNTOTYPE::setTipoDocumentoAdjunto()
     * @uses DOCUMENTOADJUNTOTYPE::setIdDocumentoAdjunto()
     * @uses DOCUMENTOADJUNTOTYPE::setNombreDocumentoAdjunto()
     * @param string $tipoDocumentoAdjunto
     * @param string $idDocumentoAdjunto
     * @param string $nombreDocumentoAdjunto
     */
    public function __construct($tipoDocumentoAdjunto = null, $idDocumentoAdjunto = null, $nombreDocumentoAdjunto = null)
    {
        $this
            ->setTipoDocumentoAdjunto($tipoDocumentoAdjunto)
            ->setIdDocumentoAdjunto($idDocumentoAdjunto)
            ->setNombreDocumentoAdjunto($nombreDocumentoAdjunto);
    }
    /**
     * Get TipoDocumentoAdjunto value
     * @return string|null
     */
    public function getTipoDocumentoAdjunto()
    {
        return $this->TipoDocumentoAdjunto;
    }
    /**
     * Set TipoDocumentoAdjunto value
     * @param string $tipoDocumentoAdjunto
     * @return DOCUMENTOADJUNTOTYPE
     */
    public function setTipoDocumentoAdjunto($tipoDocumentoAdjunto = null)
    {
        // validation for constraint: string
        if (!is_null($tipoDocumentoAdjunto) && !is_string($tipoDocumentoAdjunto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoDocumentoAdjunto, true), gettype($tipoDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tipoDocumentoAdjunto) && mb_strlen($tipoDocumentoAdjunto) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($tipoDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($tipoDocumentoAdjunto) && mb_strlen($tipoDocumentoAdjunto) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($tipoDocumentoAdjunto)), __LINE__);
        }
        $this->TipoDocumentoAdjunto = $tipoDocumentoAdjunto;
        return $this;
    }
    /**
     * Get IdDocumentoAdjunto value
     * @return string|null
     */
    public function getIdDocumentoAdjunto()
    {
        return $this->IdDocumentoAdjunto;
    }
    /**
     * Set IdDocumentoAdjunto value
     * @param string $idDocumentoAdjunto
     * @return DOCUMENTOADJUNTOTYPE
     */
    public function setIdDocumentoAdjunto($idDocumentoAdjunto = null)
    {
        // validation for constraint: string
        if (!is_null($idDocumentoAdjunto) && !is_string($idDocumentoAdjunto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idDocumentoAdjunto, true), gettype($idDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($idDocumentoAdjunto) && mb_strlen($idDocumentoAdjunto) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($idDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($idDocumentoAdjunto) && mb_strlen($idDocumentoAdjunto) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($idDocumentoAdjunto)), __LINE__);
        }
        $this->IdDocumentoAdjunto = $idDocumentoAdjunto;
        return $this;
    }
    /**
     * Get NombreDocumentoAdjunto value
     * @return string|null
     */
    public function getNombreDocumentoAdjunto()
    {
        return $this->NombreDocumentoAdjunto;
    }
    /**
     * Set NombreDocumentoAdjunto value
     * @param string $nombreDocumentoAdjunto
     * @return DOCUMENTOADJUNTOTYPE
     */
    public function setNombreDocumentoAdjunto($nombreDocumentoAdjunto = null)
    {
        // validation for constraint: string
        if (!is_null($nombreDocumentoAdjunto) && !is_string($nombreDocumentoAdjunto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDocumentoAdjunto, true), gettype($nombreDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($nombreDocumentoAdjunto) && mb_strlen($nombreDocumentoAdjunto) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($nombreDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombreDocumentoAdjunto) && mb_strlen($nombreDocumentoAdjunto) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nombreDocumentoAdjunto)), __LINE__);
        }
        $this->NombreDocumentoAdjunto = $nombreDocumentoAdjunto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DOCUMENTOADJUNTOTYPE
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
