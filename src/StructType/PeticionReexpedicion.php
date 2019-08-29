<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\ModalidadEntrega;


/**
 * This class stands for PeticionReexpedicion StructType
 * @subpackage Structs
 */
class PeticionReexpedicion extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta informations extracted from the WSDL
     * - ref: xsd:codCertificado
     * @var string
     */
    public $codCertificado;
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
     * The DestinatarioReexp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DestinatarioReexp
     * @var DATOSDESTINATARIOREEXPTYPE
     */
    public $DestinatarioReexp;
    /**
     * The ValoresAnadidos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var VATYPE
     */
    public $ValoresAnadidos;
    /**
     * Constructor method for PeticionReexpedicion
     * @uses PeticionReexpedicion::setCodCertificado()
     * @uses PeticionReexpedicion::setCodProducto()
     * @uses PeticionReexpedicion::setModalidadEntrega()
     * @uses PeticionReexpedicion::setDestinatarioReexp()
     * @uses PeticionReexpedicion::setValoresAnadidos()
     * @param string $codCertificado
     * @param string $codProducto
     * @param string $modalidadEntrega
     * @param DATOSDESTINATARIOREEXPTYPE $destinatarioReexp
     * @param VATYPE $valoresAnadidos
     */
    public function __construct($codCertificado = null, $codProducto = null, $modalidadEntrega = null, DATOSDESTINATARIOREEXPTYPE $destinatarioReexp = null, VATYPE $valoresAnadidos = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setCodProducto($codProducto)
            ->setModalidadEntrega($modalidadEntrega)
            ->setDestinatarioReexp($destinatarioReexp)
            ->setValoresAnadidos($valoresAnadidos);
    }
    /**
     * Get codCertificado value
     * @return string|null
     */
    public function getCodCertificado()
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return PeticionReexpedicion
     */
    public function setCodCertificado($codCertificado = null)
    {
        // validation for constraint: string
        if (!is_null($codCertificado) && !is_string($codCertificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCertificado, true), gettype($codCertificado)), __LINE__);
        }
        $this->codCertificado = $codCertificado;
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
     * @return PeticionReexpedicion
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
     * @return PeticionReexpedicion
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
     * Get DestinatarioReexp value
     * @return DATOSDESTINATARIOREEXPTYPE|null
     */
    public function getDestinatarioReexp()
    {
        return $this->DestinatarioReexp;
    }
    /**
     * Set DestinatarioReexp value
     * @param DATOSDESTINATARIOREEXPTYPE $destinatarioReexp
     * @return PeticionReexpedicion
     */
    public function setDestinatarioReexp(DATOSDESTINATARIOREEXPTYPE $destinatarioReexp = null)
    {
        $this->DestinatarioReexp = $destinatarioReexp;
        return $this;
    }
    /**
     * Get ValoresAnadidos value
     * @return VATYPE|null
     */
    public function getValoresAnadidos()
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param VATYPE $valoresAnadidos
     * @return PeticionReexpedicion
     */
    public function setValoresAnadidos(VATYPE $valoresAnadidos = null)
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PeticionReexpedicion
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
