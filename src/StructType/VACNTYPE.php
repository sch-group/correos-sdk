<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for VACNTYPE StructType
 * @subpackage Structs
 */
class VACNTYPE extends AbstractStructBase
{
    /**
     * The Reembolso
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Reembolso
     * @var REEMBOLSOTYPE
     */
    public $Reembolso;
    /**
     * The PruebaEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var PRUEBAENTREGAREDUCIDOTYPE
     */
    public $PruebaEntrega;
    /**
     * Constructor method for VACNTYPE
     * @uses VACNTYPE::setReembolso()
     * @uses VACNTYPE::setPruebaEntrega()
     * @param REEMBOLSOTYPE $reembolso
     * @param PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega
     */
    public function __construct(REEMBOLSOTYPE $reembolso = null, PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega = null)
    {
        $this
            ->setReembolso($reembolso)
            ->setPruebaEntrega($pruebaEntrega);
    }
    /**
     * Get Reembolso value
     * @return REEMBOLSOTYPE|null
     */
    public function getReembolso()
    {
        return $this->Reembolso;
    }
    /**
     * Set Reembolso value
     * @param REEMBOLSOTYPE $reembolso
     * @return VACNTYPE
     */
    public function setReembolso(REEMBOLSOTYPE $reembolso = null)
    {
        $this->Reembolso = $reembolso;
        return $this;
    }
    /**
     * Get PruebaEntrega value
     * @return PRUEBAENTREGAREDUCIDOTYPE|null
     */
    public function getPruebaEntrega()
    {
        return $this->PruebaEntrega;
    }
    /**
     * Set PruebaEntrega value
     * @param PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega
     * @return VACNTYPE
     */
    public function setPruebaEntrega(PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega = null)
    {
        $this->PruebaEntrega = $pruebaEntrega;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return VACNTYPE
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
