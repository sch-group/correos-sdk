<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\ModalidadEntrega;
use CorreosSdk\EnumType\TipoFranqueo;


/**
 * This class stands for PeticionGenerarCodigoExpedicion StructType
 * @subpackage Structs
 */
class PeticionGenerarCodigoExpedicion extends AbstractStructBase
{
    /**
     * The FechaOperacion
     * Meta informations extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string
     */
    public $FechaOperacion;
    /**
     * The CodEtiquetador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:CodEtiquetador
     * @var string
     */
    public $CodEtiquetador;
    /**
     * The NumContrato
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumContrato
     * @var string
     */
    public $NumContrato;
    /**
     * The NumCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumCliente
     * @var string
     */
    public $NumCliente;
    /**
     * The TotalBultos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int
     */
    public $TotalBultos;
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
     * The ModalidadEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ModalidadEntrega
     * @var string
     */
    public $ModalidadEntrega;
    /**
     * The TipoFranqueo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoFranqueo
     * @var string
     */
    public $TipoFranqueo;
    /**
     * Constructor method for PeticionGenerarCodigoExpedicion
     * @uses PeticionGenerarCodigoExpedicion::setFechaOperacion()
     * @uses PeticionGenerarCodigoExpedicion::setCodEtiquetador()
     * @uses PeticionGenerarCodigoExpedicion::setNumContrato()
     * @uses PeticionGenerarCodigoExpedicion::setNumCliente()
     * @uses PeticionGenerarCodigoExpedicion::setTotalBultos()
     * @uses PeticionGenerarCodigoExpedicion::setCodProducto()
     * @uses PeticionGenerarCodigoExpedicion::setModalidadEntrega()
     * @uses PeticionGenerarCodigoExpedicion::setTipoFranqueo()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param int $totalBultos
     * @param string $codProducto
     * @param string $modalidadEntrega
     * @param string $tipoFranqueo
     */
    public function __construct($fechaOperacion = null, $codEtiquetador = null, $numContrato = null, $numCliente = null, $totalBultos = null, $codProducto = null, $modalidadEntrega = null, $tipoFranqueo = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setTotalBultos($totalBultos)
            ->setCodProducto($codProducto)
            ->setModalidadEntrega($modalidadEntrega)
            ->setTipoFranqueo($tipoFranqueo);
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion()
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setFechaOperacion($fechaOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
        return $this;
    }
    /**
     * Get CodEtiquetador value
     * @return string|null
     */
    public function getCodEtiquetador()
    {
        return $this->CodEtiquetador;
    }
    /**
     * Set CodEtiquetador value
     * @param string $codEtiquetador
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setCodEtiquetador($codEtiquetador = null)
    {
        // validation for constraint: string
        if (!is_null($codEtiquetador) && !is_string($codEtiquetador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEtiquetador, true), gettype($codEtiquetador)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($codEtiquetador) && mb_strlen($codEtiquetador) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen($codEtiquetador)), __LINE__);
        }
        $this->CodEtiquetador = $codEtiquetador;
        return $this;
    }
    /**
     * Get NumContrato value
     * @return string|null
     */
    public function getNumContrato()
    {
        return $this->NumContrato;
    }
    /**
     * Set NumContrato value
     * @param string $numContrato
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setNumContrato($numContrato = null)
    {
        // validation for constraint: string
        if (!is_null($numContrato) && !is_string($numContrato)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numContrato, true), gettype($numContrato)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numContrato) && mb_strlen($numContrato) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numContrato)), __LINE__);
        }
        $this->NumContrato = $numContrato;
        return $this;
    }
    /**
     * Get NumCliente value
     * @return string|null
     */
    public function getNumCliente()
    {
        return $this->NumCliente;
    }
    /**
     * Set NumCliente value
     * @param string $numCliente
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setNumCliente($numCliente = null)
    {
        // validation for constraint: string
        if (!is_null($numCliente) && !is_string($numCliente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCliente, true), gettype($numCliente)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numCliente) && mb_strlen($numCliente) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numCliente)), __LINE__);
        }
        $this->NumCliente = $numCliente;
        return $this;
    }
    /**
     * Get TotalBultos value
     * @return int|null
     */
    public function getTotalBultos()
    {
        return $this->TotalBultos;
    }
    /**
     * Set TotalBultos value
     * @param int $totalBultos
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setTotalBultos($totalBultos = null)
    {
        // validation for constraint: int
        if (!is_null($totalBultos) && !(is_int($totalBultos) || ctype_digit($totalBultos))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBultos, true), gettype($totalBultos)), __LINE__);
        }
        $this->TotalBultos = $totalBultos;
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
     * @return PeticionGenerarCodigoExpedicion
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
     * Get ModalidadEntrega value
     * @return string|null
     */
    public function getModalidadEntrega()
    {
        return $this->ModalidadEntrega;
    }
    /**
     * Set ModalidadEntrega value
     * @uses ModalidadEntrega::valueIsValid()
     * @uses ModalidadEntrega::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modalidadEntrega
     * @return PeticionGenerarCodigoExpedicion
     */
    public function setModalidadEntrega($modalidadEntrega = null)
    {
        // validation for constraint: enumeration
        if (!ModalidadEntrega::valueIsValid($modalidadEntrega)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class ModalidadEntrega', is_array($modalidadEntrega) ? implode(', ', $modalidadEntrega) : var_export($modalidadEntrega, true), implode(', ', ModalidadEntrega::getValidValues())), __LINE__);
        }
        $this->ModalidadEntrega = $modalidadEntrega;
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
     * @return PeticionGenerarCodigoExpedicion
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionGenerarCodigoExpedicion
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
