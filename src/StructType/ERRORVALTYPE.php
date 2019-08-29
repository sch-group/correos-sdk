<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for ERRORVALTYPE StructType
 * @subpackage Structs
 */
class ERRORVALTYPE extends AbstractStructBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - ref: xsd:Error
     * @var string
     */
    public $Error;
    /**
     * The DescError
     * Meta informations extracted from the WSDL
     * - ref: xsd:DescError
     * @var string
     */
    public $DescError;
    /**
     * Constructor method for ERRORVALTYPE
     * @uses ERRORVALTYPE::setError()
     * @uses ERRORVALTYPE::setDescError()
     * @param string $error
     * @param string $descError
     */
    public function __construct($error = null, $descError = null)
    {
        $this
            ->setError($error)
            ->setDescError($descError);
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
     * @return ERRORVALTYPE
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
     * @return ERRORVALTYPE
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
     * @return ERRORVALTYPE
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
