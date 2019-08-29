<?php

namespace CorreosSdk\EnumType;

/**
 * This class stands for TipoFranqueo EnumType
 * @subpackage Enumerations
 */
class TipoFranqueo
{
    /**
     * Constant for value 'FP'
     * @return string 'FP'
     */
    const VALUE_FP = 'FP';
    /**
     * Constant for value 'FM'
     * @return string 'FM'
     */
    const VALUE_FM = 'FM';
    /**
     * Constant for value 'ES'
     * @return string 'ES'
     */
    const VALUE_ES = 'ES';
    /**
     * Constant for value 'ON'
     * @return string 'ON'
     */
    const VALUE_ON = 'ON';
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
     * @uses self::VALUE_FP
     * @uses self::VALUE_FM
     * @uses self::VALUE_ES
     * @uses self::VALUE_ON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FP,
            self::VALUE_FM,
            self::VALUE_ES,
            self::VALUE_ON,
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
