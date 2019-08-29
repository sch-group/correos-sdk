<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for LISTAERRORESVALIDACIONTYPE StructType
 * @subpackage Structs
 */
class LISTAERRORESVALIDACIONTYPE extends AbstractStructBase
{
    /**
     * The ErrorVal
     * Meta informations extracted from the WSDL
     * - ref: xsd:ErrorVal
     * @var ERRORVALTYPE
     */
    public $ErrorVal;
    /**
     * Constructor method for LISTAERRORESVALIDACIONTYPE
     * @uses LISTAERRORESVALIDACIONTYPE::setErrorVal()
     * @param ERRORVALTYPE $errorVal
     */
    public function __construct(ERRORVALTYPE $errorVal = null)
    {
        $this
            ->setErrorVal($errorVal);
    }
    /**
     * Get ErrorVal value
     * @return ERRORVALTYPE|null
     */
    public function getErrorVal()
    {
        return $this->ErrorVal;
    }
    /**
     * Set ErrorVal value
     * @param ERRORVALTYPE $errorVal
     * @return LISTAERRORESVALIDACIONTYPE
     */
    public function setErrorVal(ERRORVALTYPE $errorVal = null)
    {
        $this->ErrorVal = $errorVal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return LISTAERRORESVALIDACIONTYPE
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
