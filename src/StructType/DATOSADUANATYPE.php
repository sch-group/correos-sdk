<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSADUANATYPE StructType
 * @subpackage Structs
 */
class DATOSADUANATYPE extends AbstractStructBase
{
    /**
     * The Cantidad
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Cantidad
     * @var int
     */
    public $Cantidad;
    /**
     * The Descripcion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Descripcion
     * @var string
     */
    public $Descripcion;
    /**
     * The Pesoneto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Pesoneto
     * @var int
     */
    public $Pesoneto;
    /**
     * The Valorneto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:Valorneto
     * @var string
     */
    public $Valorneto;
    /**
     * The NTarifario
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:NTarifario
     * @var string
     */
    public $NTarifario;
    /**
     * The PaisOrigen
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:PaisOrigen
     * @var string
     */
    public $PaisOrigen;
    /**
     * Constructor method for DATOSADUANATYPE
     * @uses DATOSADUANATYPE::setCantidad()
     * @uses DATOSADUANATYPE::setDescripcion()
     * @uses DATOSADUANATYPE::setPesoneto()
     * @uses DATOSADUANATYPE::setValorneto()
     * @uses DATOSADUANATYPE::setNTarifario()
     * @uses DATOSADUANATYPE::setPaisOrigen()
     * @param int $cantidad
     * @param string $descripcion
     * @param int $pesoneto
     * @param string $valorneto
     * @param string $nTarifario
     * @param string $paisOrigen
     */
    public function __construct(
        $cantidad = null,
        $descripcion = null,
        $pesoneto = null,
        $valorneto = null,
        $nTarifario = null,
        $paisOrigen = null
    )
    {
        $this
            ->setCantidad($cantidad)
            ->setDescripcion($descripcion)
            ->setPesoneto($pesoneto)
            ->setValorneto($valorneto)
            ->setNTarifario($nTarifario)
            ->setPaisOrigen($paisOrigen);
    }
    /**
     * Get Cantidad value
     * @return int|null
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }
    /**
     * Set Cantidad value
     * @param int $cantidad
     * @return DATOSADUANATYPE
     */
    public function setCantidad($cantidad = null)
    {
        // validation for constraint: int
        if (!is_null($cantidad) && !(is_int($cantidad) || ctype_digit($cantidad))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cantidad, true), gettype($cantidad)), __LINE__);
        }
        $this->Cantidad = $cantidad;
        return $this;
    }
    /**
     * Get Descripcion value
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }
    /**
     * Set Descripcion value
     * @param string $descripcion
     * @return DATOSADUANATYPE
     */
    public function setDescripcion($descripcion = null)
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($descripcion) && mb_strlen($descripcion) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($descripcion)), __LINE__);
        }
        $this->Descripcion = $descripcion;
        return $this;
    }
    /**
     * Get Pesoneto value
     * @return int|null
     */
    public function getPesoneto()
    {
        return $this->Pesoneto;
    }
    /**
     * Set Pesoneto value
     * @param int $pesoneto
     * @return DATOSADUANATYPE
     */
    public function setPesoneto($pesoneto = null)
    {
        // validation for constraint: int
        if (!is_null($pesoneto) && !(is_int($pesoneto) || ctype_digit($pesoneto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pesoneto, true), gettype($pesoneto)), __LINE__);
        }
        $this->Pesoneto = $pesoneto;
        return $this;
    }
    /**
     * Get Valorneto value
     * @return string|null
     */
    public function getValorneto()
    {
        return $this->Valorneto;
    }
    /**
     * Set Valorneto value
     * @param string $valorneto
     * @return DATOSADUANATYPE
     */
    public function setValorneto($valorneto = null)
    {
        // validation for constraint: string
        if (!is_null($valorneto) && !is_string($valorneto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorneto, true), gettype($valorneto)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($valorneto) && mb_strlen($valorneto) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($valorneto)), __LINE__);
        }
        $this->Valorneto = $valorneto;
        return $this;
    }
    /**
     * Get NTarifario value
     * @return string|null
     */
    public function getNTarifario()
    {
        return $this->NTarifario;
    }
    /**
     * Set NTarifario value
     * @param string $nTarifario
     * @return DATOSADUANATYPE
     */
    public function setNTarifario($nTarifario = null)
    {
        // validation for constraint: string
        if (!is_null($nTarifario) && !is_string($nTarifario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTarifario, true), gettype($nTarifario)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($nTarifario) && mb_strlen($nTarifario) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($nTarifario)), __LINE__);
        }
        $this->NTarifario = $nTarifario;
        return $this;
    }
    /**
     * Get PaisOrigen value
     * @return string|null
     */
    public function getPaisOrigen()
    {
        return $this->PaisOrigen;
    }
    /**
     * Set PaisOrigen value
     * @param string $paisOrigen
     * @return DATOSADUANATYPE
     */
    public function setPaisOrigen($paisOrigen = null)
    {
        // validation for constraint: string
        if (!is_null($paisOrigen) && !is_string($paisOrigen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paisOrigen, true), gettype($paisOrigen)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($paisOrigen) && mb_strlen($paisOrigen) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($paisOrigen)), __LINE__);
        }
        $this->PaisOrigen = $paisOrigen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSADUANATYPE
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
