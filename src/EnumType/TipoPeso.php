<?php

namespace CorreosSdk\EnumType;

/**
 * This class stands for TipoPeso EnumType
 * @subpackage Enumerations
 */
class TipoPeso
{
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_R
     * @uses self::VALUE_V
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_R,
            self::VALUE_V,
        );
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
