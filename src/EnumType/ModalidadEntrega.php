<?php

namespace CorreosSdk\EnumType;

/**
 * This class stands for ModalidadEntrega EnumType
 * @subpackage Enumerations
 */
class ModalidadEntrega
{
    /**
     * Constant for value 'ST'
     * @return string 'ST'
     */
    const VALUE_ST = 'ST';
    /**
     * Constant for value 'LS'
     * @return string 'LS'
     */
    const VALUE_LS = 'LS';
    /**
     * Constant for value 'OR'
     * @return string 'OR'
     */
    const VALUE_OR = 'OR';
    /**
     * Constant for value 'HP'
     * @return string 'HP'
     */
    const VALUE_HP = 'HP';
    /**
     * Constant for value 'CP'
     * @return string 'CP'
     */
    const VALUE_CP = 'CP';
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
     * @uses self::VALUE_ST
     * @uses self::VALUE_LS
     * @uses self::VALUE_OR
     * @uses self::VALUE_HP
     * @uses self::VALUE_CP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ST,
            self::VALUE_LS,
            self::VALUE_OR,
            self::VALUE_HP,
            self::VALUE_CP,
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
