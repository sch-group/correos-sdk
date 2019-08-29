<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\TipoFranqueo;


/**
 * This class stands for DATOSENVIOREDUCIDOTYPE StructType
 * @subpackage Structs
 */
class DATOSENVIOREDUCIDOTYPE extends AbstractStructBase
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
     * The CodProducto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string
     */
    public $CodProducto;
    /**
     * The ReferenciaCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente
     * @var string
     */
    public $ReferenciaCliente;
    /**
     * The ReferenciaCliente2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente2
     * @var string
     */
    public $ReferenciaCliente2;
    /**
     * The ReferenciaCliente3
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente3
     * @var string
     */
    public $ReferenciaCliente3;
    /**
     * The TipoFranqueo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoFranqueo
     * @var string
     */
    public $TipoFranqueo;
    /**
     * The NumMaquinaFranquear
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumMaquinaFranquear
     * @var string
     */
    public $NumMaquinaFranquear;
    /**
     * The ImporteFranqueado
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteFranqueado
     * @var string
     */
    public $ImporteFranqueado;
    /**
     * The Pesos
     * Meta informations extracted from the WSDL
     * - ref: xsd:Pesos
     * @var Pesos
     */
    public $Pesos;
    /**
     * Constructor method for DATOSENVIOREDUCIDOTYPE
     * @uses DATOSENVIOREDUCIDOTYPE::setNumBulto()
     * @uses DATOSENVIOREDUCIDOTYPE::setCodProducto()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente2()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente3()
     * @uses DATOSENVIOREDUCIDOTYPE::setTipoFranqueo()
     * @uses DATOSENVIOREDUCIDOTYPE::setNumMaquinaFranquear()
     * @uses DATOSENVIOREDUCIDOTYPE::setImporteFranqueado()
     * @uses DATOSENVIOREDUCIDOTYPE::setPesos()
     * @param int $numBulto
     * @param string $codProducto
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $tipoFranqueo
     * @param string $numMaquinaFranquear
     * @param string $importeFranqueado
     * @param Pesos $pesos
     */
    public function __construct(
        $numBulto = null,
        $codProducto = null,
        $referenciaCliente = null,
        $referenciaCliente2 = null,
        $referenciaCliente3 = null,
        $tipoFranqueo = null,
        $numMaquinaFranquear = null,
        $importeFranqueado = null,
        Pesos $pesos = null
    ) {
        $this
            ->setNumBulto($numBulto)
            ->setCodProducto($codProducto)
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setTipoFranqueo($tipoFranqueo)
            ->setNumMaquinaFranquear($numMaquinaFranquear)
            ->setImporteFranqueado($importeFranqueado)
            ->setPesos($pesos);
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
     * @return DATOSENVIOREDUCIDOTYPE
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
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto()
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setCodProducto($codProducto = null)
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen($codProducto) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        return $this;
    }
    /**
     * Get ReferenciaCliente value
     * @return string|null
     */
    public function getReferenciaCliente()
    {
        return $this->ReferenciaCliente;
    }
    /**
     * Set ReferenciaCliente value
     * @param string $referenciaCliente
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente($referenciaCliente = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente) && !is_string($referenciaCliente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente, true), gettype($referenciaCliente)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente) && mb_strlen($referenciaCliente) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente)), __LINE__);
        }
        $this->ReferenciaCliente = $referenciaCliente;
        return $this;
    }
    /**
     * Get ReferenciaCliente2 value
     * @return string|null
     */
    public function getReferenciaCliente2()
    {
        return $this->ReferenciaCliente2;
    }
    /**
     * Set ReferenciaCliente2 value
     * @param string $referenciaCliente2
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente2($referenciaCliente2 = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente2) && !is_string($referenciaCliente2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente2, true), gettype($referenciaCliente2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente2) && mb_strlen($referenciaCliente2) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente2)), __LINE__);
        }
        $this->ReferenciaCliente2 = $referenciaCliente2;
        return $this;
    }
    /**
     * Get ReferenciaCliente3 value
     * @return string|null
     */
    public function getReferenciaCliente3()
    {
        return $this->ReferenciaCliente3;
    }
    /**
     * Set ReferenciaCliente3 value
     * @param string $referenciaCliente3
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente3($referenciaCliente3 = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente3) && !is_string($referenciaCliente3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente3, true), gettype($referenciaCliente3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente3) && mb_strlen($referenciaCliente3) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente3)), __LINE__);
        }
        $this->ReferenciaCliente3 = $referenciaCliente3;
        return $this;
    }
    /**
     * Get TipoFranqueo value
     * @return string|null
     */
    public function getTipoFranqueo()
    {
        return $this->TipoFranqueo;
    }
    /**
     * Set TipoFranqueo value
     * @uses TipoFranqueo::valueIsValid()
     * @uses TipoFranqueo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoFranqueo
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setTipoFranqueo($tipoFranqueo = null)
    {
        // validation for constraint: enumeration
        if (!TipoFranqueo::valueIsValid($tipoFranqueo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoFranqueo', is_array($tipoFranqueo) ? implode(', ', $tipoFranqueo) : var_export($tipoFranqueo, true), implode(', ', TipoFranqueo::getValidValues())), __LINE__);
        }
        $this->TipoFranqueo = $tipoFranqueo;
        return $this;
    }
    /**
     * Get NumMaquinaFranquear value
     * @return string|null
     */
    public function getNumMaquinaFranquear()
    {
        return $this->NumMaquinaFranquear;
    }
    /**
     * Set NumMaquinaFranquear value
     * @param string $numMaquinaFranquear
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setNumMaquinaFranquear($numMaquinaFranquear = null)
    {
        // validation for constraint: string
        if (!is_null($numMaquinaFranquear) && !is_string($numMaquinaFranquear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numMaquinaFranquear, true), gettype($numMaquinaFranquear)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numMaquinaFranquear) && mb_strlen($numMaquinaFranquear) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numMaquinaFranquear)), __LINE__);
        }
        $this->NumMaquinaFranquear = $numMaquinaFranquear;
        return $this;
    }
    /**
     * Get ImporteFranqueado value
     * @return string|null
     */
    public function getImporteFranqueado()
    {
        return $this->ImporteFranqueado;
    }
    /**
     * Set ImporteFranqueado value
     * @param string $importeFranqueado
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setImporteFranqueado($importeFranqueado = null)
    {
        // validation for constraint: string
        if (!is_null($importeFranqueado) && !is_string($importeFranqueado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeFranqueado, true), gettype($importeFranqueado)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeFranqueado) && mb_strlen($importeFranqueado) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($importeFranqueado)), __LINE__);
        }
        $this->ImporteFranqueado = $importeFranqueado;
        return $this;
    }
    /**
     * Get Pesos value
     * @return Pesos|null
     */
    public function getPesos()
    {
        return $this->Pesos;
    }
    /**
     * Set Pesos value
     * @param Pesos $pesos
     * @return DATOSENVIOREDUCIDOTYPE
     */
    public function setPesos(Pesos $pesos = null)
    {
        $this->Pesos = $pesos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSENVIOREDUCIDOTYPE
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
