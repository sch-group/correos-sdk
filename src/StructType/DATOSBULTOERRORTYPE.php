<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSBULTOERRORTYPE StructType
 * @subpackage Structs
 */
class DATOSBULTOERRORTYPE extends AbstractStructBase
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
     * The Error
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Error
     * @var string
     */
    public $Error;
    /**
     * The DescError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescError
     * @var string
     */
    public $DescError;
    /**
     * Constructor method for DATOSBULTOERRORTYPE
     * @uses DATOSBULTOERRORTYPE::setNumBulto()
     * @uses DATOSBULTOERRORTYPE::setError()
     * @uses DATOSBULTOERRORTYPE::setDescError()
     * @param int $numBulto
     * @param string $error
     * @param string $descError
     */
    public function __construct($numBulto = null, $error = null, $descError = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setError($error)
            ->setDescError($descError);
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
     * @return DATOSBULTOERRORTYPE
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
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $error
     * @return DATOSBULTOERRORTYPE
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Get DescError value
     * @return string|null
     */
    public function getDescError()
    {
        return $this->DescError;
    }
    /**
     * Set DescError value
     * @param string $descError
     * @return DATOSBULTOERRORTYPE
     */
    public function setDescError($descError = null)
    {
        // validation for constraint: string
        if (!is_null($descError) && !is_string($descError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descError, true), gettype($descError)), __LINE__);
        }
        $this->DescError = $descError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSBULTOERRORTYPE
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
