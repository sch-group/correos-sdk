<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for PIEZADELCONTENIDOTYPE StructType
 * @subpackage Structs
 */
class PIEZADELCONTENIDOTYPE extends AbstractStructBase
{
    /**
     * The NumeroPieza
     * Meta informations extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 99
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumeroPieza;
    /**
     * The NumeroDeUnidades
     * Meta informations extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 999999
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int
     */
    public $NumeroDeUnidades;
    /**
     * The Descripcion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Descripcion;
    /**
     * The ValorDeclarado
     * Meta informations extracted from the WSDL
     * - base: xs:decimal
     * - fractionDigits: 2
     * - maxInclusive: 99999999.99
     * - minInclusive: 0.00
     * - minOccurs: 0
     * - totalDigits: 10
     * @var float
     */
    public $ValorDeclarado;
    /**
     * The PesoNeto
     * Meta informations extracted from the WSDL
     * - base: xs:decimal
     * - fractionDigits: 2
     * - maxInclusive: 999.99
     * - minInclusive: 0.00
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $PesoNeto;
    /**
     * The PartidaArancelaria
     * Meta informations extracted from the WSDL
     * - base: xs:long
     * - maxInclusive: 99999999999
     * - minInclusive: 100000
     * - minOccurs: 0
     * @var int
     */
    public $PartidaArancelaria;
    /**
     * The ReferenciaArticulo
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenciaArticulo;
    /**
     * The UbicacionOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * @var string
     */
    public $UbicacionOriginal;
    /**
     * The IdentificadorEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdentificadorEnvio;
    /**
     * The IdentificadorFactura
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdentificadorFactura;
    /**
     * Constructor method for PIEZADELCONTENIDOTYPE
     * @uses PIEZADELCONTENIDOTYPE::setNumeroPieza()
     * @uses PIEZADELCONTENIDOTYPE::setNumeroDeUnidades()
     * @uses PIEZADELCONTENIDOTYPE::setDescripcion()
     * @uses PIEZADELCONTENIDOTYPE::setValorDeclarado()
     * @uses PIEZADELCONTENIDOTYPE::setPesoNeto()
     * @uses PIEZADELCONTENIDOTYPE::setPartidaArancelaria()
     * @uses PIEZADELCONTENIDOTYPE::setReferenciaArticulo()
     * @uses PIEZADELCONTENIDOTYPE::setUbicacionOriginal()
     * @uses PIEZADELCONTENIDOTYPE::setIdentificadorEnvio()
     * @uses PIEZADELCONTENIDOTYPE::setIdentificadorFactura()
     * @param int $numeroPieza
     * @param int $numeroDeUnidades
     * @param string $descripcion
     * @param float $valorDeclarado
     * @param float $pesoNeto
     * @param int $partidaArancelaria
     * @param string $referenciaArticulo
     * @param string $ubicacionOriginal
     * @param string $identificadorEnvio
     * @param string $identificadorFactura
     */
    public function __construct($numeroPieza = null, $numeroDeUnidades = null, $descripcion = null, $valorDeclarado = null, $pesoNeto = null, $partidaArancelaria = null, $referenciaArticulo = null, $ubicacionOriginal = null, $identificadorEnvio = null, $identificadorFactura = null)
    {
        $this
            ->setNumeroPieza($numeroPieza)
            ->setNumeroDeUnidades($numeroDeUnidades)
            ->setDescripcion($descripcion)
            ->setValorDeclarado($valorDeclarado)
            ->setPesoNeto($pesoNeto)
            ->setPartidaArancelaria($partidaArancelaria)
            ->setReferenciaArticulo($referenciaArticulo)
            ->setUbicacionOriginal($ubicacionOriginal)
            ->setIdentificadorEnvio($identificadorEnvio)
            ->setIdentificadorFactura($identificadorFactura);
    }
    /**
     * Get NumeroPieza value
     * @return int|null
     */
    public function getNumeroPieza()
    {
        return $this->NumeroPieza;
    }
    /**
     * Set NumeroPieza value
     * @param int $numeroPieza
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setNumeroPieza($numeroPieza = null)
    {
        // validation for constraint: int
        if (!is_null($numeroPieza) && !(is_int($numeroPieza) || ctype_digit($numeroPieza))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroPieza, true), gettype($numeroPieza)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($numeroPieza) && $numeroPieza > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($numeroPieza, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($numeroPieza) && $numeroPieza < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($numeroPieza, true)), __LINE__);
        }
        $this->NumeroPieza = $numeroPieza;
        return $this;
    }
    /**
     * Get NumeroDeUnidades value
     * @return int|null
     */
    public function getNumeroDeUnidades()
    {
        return $this->NumeroDeUnidades;
    }
    /**
     * Set NumeroDeUnidades value
     * @param int $numeroDeUnidades
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setNumeroDeUnidades($numeroDeUnidades = null)
    {
        // validation for constraint: int
        if (!is_null($numeroDeUnidades) && !(is_int($numeroDeUnidades) || ctype_digit($numeroDeUnidades))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroDeUnidades, true), gettype($numeroDeUnidades)), __LINE__);
        }
        // validation for constraint: maxInclusive(999999)
        if (!is_null($numeroDeUnidades) && $numeroDeUnidades > 999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999999', var_export($numeroDeUnidades, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($numeroDeUnidades) && $numeroDeUnidades < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($numeroDeUnidades, true)), __LINE__);
        }
        $this->NumeroDeUnidades = $numeroDeUnidades;
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
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setDescripcion($descripcion = null)
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($descripcion) && mb_strlen($descripcion) > 256) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen($descripcion)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($descripcion) && mb_strlen($descripcion) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($descripcion)), __LINE__);
        }
        $this->Descripcion = $descripcion;
        return $this;
    }
    /**
     * Get ValorDeclarado value
     * @return float|null
     */
    public function getValorDeclarado()
    {
        return $this->ValorDeclarado;
    }
    /**
     * Set ValorDeclarado value
     * @param float $valorDeclarado
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setValorDeclarado($valorDeclarado = null)
    {
        // validation for constraint: float
        if (!is_null($valorDeclarado) && !(is_float($valorDeclarado) || is_numeric($valorDeclarado))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorDeclarado, true), gettype($valorDeclarado)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($valorDeclarado) && mb_strlen(mb_substr($valorDeclarado, mb_strpos($valorDeclarado, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($valorDeclarado, true), mb_strlen(mb_substr($valorDeclarado, mb_strpos($valorDeclarado, '.') + 1))), __LINE__);
        }
        // validation for constraint: maxInclusive(99999999.99)
        if (!is_null($valorDeclarado) && $valorDeclarado > 99999999.99) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99999999.99', var_export($valorDeclarado, true)), __LINE__);
        }
        // validation for constraint: minInclusive(0.00)
        if (!is_null($valorDeclarado) && $valorDeclarado < 0.00) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0.00', var_export($valorDeclarado, true)), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($valorDeclarado) && mb_strlen(preg_replace('/(\D)/', '', $valorDeclarado)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($valorDeclarado, true), mb_strlen(preg_replace('/(\D)/', '', $valorDeclarado))), __LINE__);
        }
        $this->ValorDeclarado = $valorDeclarado;
        return $this;
    }
    /**
     * Get PesoNeto value
     * @return float|null
     */
    public function getPesoNeto()
    {
        return $this->PesoNeto;
    }
    /**
     * Set PesoNeto value
     * @param float $pesoNeto
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setPesoNeto($pesoNeto = null)
    {
        // validation for constraint: float
        if (!is_null($pesoNeto) && !(is_float($pesoNeto) || is_numeric($pesoNeto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pesoNeto, true), gettype($pesoNeto)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($pesoNeto) && mb_strlen(mb_substr($pesoNeto, mb_strpos($pesoNeto, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($pesoNeto, true), mb_strlen(mb_substr($pesoNeto, mb_strpos($pesoNeto, '.') + 1))), __LINE__);
        }
        // validation for constraint: maxInclusive(999.99)
        if (!is_null($pesoNeto) && $pesoNeto > 999.99) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999.99', var_export($pesoNeto, true)), __LINE__);
        }
        // validation for constraint: minInclusive(0.00)
        if (!is_null($pesoNeto) && $pesoNeto < 0.00) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0.00', var_export($pesoNeto, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($pesoNeto) && mb_strlen(preg_replace('/(\D)/', '', $pesoNeto)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($pesoNeto, true), mb_strlen(preg_replace('/(\D)/', '', $pesoNeto))), __LINE__);
        }
        $this->PesoNeto = $pesoNeto;
        return $this;
    }
    /**
     * Get PartidaArancelaria value
     * @return int|null
     */
    public function getPartidaArancelaria()
    {
        return $this->PartidaArancelaria;
    }
    /**
     * Set PartidaArancelaria value
     * @param int $partidaArancelaria
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setPartidaArancelaria($partidaArancelaria = null)
    {
        // validation for constraint: int
        if (!is_null($partidaArancelaria) && !(is_int($partidaArancelaria) || ctype_digit($partidaArancelaria))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($partidaArancelaria, true), gettype($partidaArancelaria)), __LINE__);
        }
        // validation for constraint: maxInclusive(99999999999)
        if (!is_null($partidaArancelaria) && $partidaArancelaria > 99999999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99999999999', var_export($partidaArancelaria, true)), __LINE__);
        }
        // validation for constraint: minInclusive(100000)
        if (!is_null($partidaArancelaria) && $partidaArancelaria < 100000) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 100000', var_export($partidaArancelaria, true)), __LINE__);
        }
        $this->PartidaArancelaria = $partidaArancelaria;
        return $this;
    }
    /**
     * Get ReferenciaArticulo value
     * @return string|null
     */
    public function getReferenciaArticulo()
    {
        return $this->ReferenciaArticulo;
    }
    /**
     * Set ReferenciaArticulo value
     * @param string $referenciaArticulo
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setReferenciaArticulo($referenciaArticulo = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaArticulo) && !is_string($referenciaArticulo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaArticulo, true), gettype($referenciaArticulo)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($referenciaArticulo) && mb_strlen($referenciaArticulo) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($referenciaArticulo)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($referenciaArticulo) && mb_strlen($referenciaArticulo) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($referenciaArticulo)), __LINE__);
        }
        $this->ReferenciaArticulo = $referenciaArticulo;
        return $this;
    }
    /**
     * Get UbicacionOriginal value
     * @return string|null
     */
    public function getUbicacionOriginal()
    {
        return $this->UbicacionOriginal;
    }
    /**
     * Set UbicacionOriginal value
     * @param string $ubicacionOriginal
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setUbicacionOriginal($ubicacionOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($ubicacionOriginal) && !is_string($ubicacionOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ubicacionOriginal, true), gettype($ubicacionOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($ubicacionOriginal) && mb_strlen($ubicacionOriginal) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($ubicacionOriginal)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($ubicacionOriginal) && mb_strlen($ubicacionOriginal) < 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen($ubicacionOriginal)), __LINE__);
        }
        $this->UbicacionOriginal = $ubicacionOriginal;
        return $this;
    }
    /**
     * Get IdentificadorEnvio value
     * @return string|null
     */
    public function getIdentificadorEnvio()
    {
        return $this->IdentificadorEnvio;
    }
    /**
     * Set IdentificadorEnvio value
     * @param string $identificadorEnvio
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setIdentificadorEnvio($identificadorEnvio = null)
    {
        // validation for constraint: string
        if (!is_null($identificadorEnvio) && !is_string($identificadorEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorEnvio, true), gettype($identificadorEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorEnvio) && mb_strlen($identificadorEnvio) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($identificadorEnvio)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorEnvio) && mb_strlen($identificadorEnvio) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($identificadorEnvio)), __LINE__);
        }
        $this->IdentificadorEnvio = $identificadorEnvio;
        return $this;
    }
    /**
     * Get IdentificadorFactura value
     * @return string|null
     */
    public function getIdentificadorFactura()
    {
        return $this->IdentificadorFactura;
    }
    /**
     * Set IdentificadorFactura value
     * @param string $identificadorFactura
     * @return PIEZADELCONTENIDOTYPE
     */
    public function setIdentificadorFactura($identificadorFactura = null)
    {
        // validation for constraint: string
        if (!is_null($identificadorFactura) && !is_string($identificadorFactura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorFactura, true), gettype($identificadorFactura)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorFactura) && mb_strlen($identificadorFactura) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($identificadorFactura)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorFactura) && mb_strlen($identificadorFactura) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($identificadorFactura)), __LINE__);
        }
        $this->IdentificadorFactura = $identificadorFactura;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PIEZADELCONTENIDOTYPE
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
