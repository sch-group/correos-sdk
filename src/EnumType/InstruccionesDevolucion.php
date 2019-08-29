<?php

namespace CorreosSdk\EnumType;

/**
 * This class stands for InstruccionesDevolucion EnumType
 * @subpackage Enumerations
 */
class InstruccionesDevolucion
{
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
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
     * @uses self::VALUE_D
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_D,
            self::VALUE_A,
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
