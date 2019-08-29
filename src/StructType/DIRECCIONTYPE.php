<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DIRECCIONTYPE StructType
 * @subpackage Structs
 */
class DIRECCIONTYPE extends AbstractStructBase
{
    /**
     * The TipoDireccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minOccurs: 0
     * - ref: xsd:TipoDireccion
     * @var string
     */
    public $TipoDireccion;
    /**
     * The Direccion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:Direccion
     * @var string
     */
    public $Direccion;
    /**
     * The Numero
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Numero
     * @var string
     */
    public $Numero;
    /**
     * The Portal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Portal
     * @var string
     */
    public $Portal;
    /**
     * The Bloque
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Bloque
     * @var string
     */
    public $Bloque;
    /**
     * The Escalera
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Escalera
     * @var string
     */
    public $Escalera;
    /**
     * The Piso
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Piso
     * @var string
     */
    public $Piso;
    /**
     * The Puerta
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Puerta
     * @var string
     */
    public $Puerta;
    /**
     * The Localidad
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:Localidad
     * @var string
     */
    public $Localidad;
    /**
     * The Provincia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minOccurs: 0
     * - ref: xsd:Provincia
     * @var string
     */
    public $Provincia;
    /**
     * Constructor method for DIRECCIONTYPE
     * @uses DIRECCIONTYPE::setTipoDireccion()
     * @uses DIRECCIONTYPE::setDireccion()
     * @uses DIRECCIONTYPE::setNumero()
     * @uses DIRECCIONTYPE::setPortal()
     * @uses DIRECCIONTYPE::setBloque()
     * @uses DIRECCIONTYPE::setEscalera()
     * @uses DIRECCIONTYPE::setPiso()
     * @uses DIRECCIONTYPE::setPuerta()
     * @uses DIRECCIONTYPE::setLocalidad()
     * @uses DIRECCIONTYPE::setProvincia()
     * @param string $tipoDireccion
     * @param string $direccion
     * @param string $numero
     * @param string $portal
     * @param string $bloque
     * @param string $escalera
     * @param string $piso
     * @param string $puerta
     * @param string $localidad
     * @param string $provincia
     */
    public function __construct(
        $tipoDireccion = null,
        $direccion = null,
        $numero = null,
        $portal = null,
        $bloque = null,
        $escalera = null,
        $piso = null,
        $puerta = null,
        $localidad = null,
        $provincia = null
    ) {
        $this
            ->setTipoDireccion($tipoDireccion)
            ->setDireccion($direccion)
            ->setNumero($numero)
            ->setPortal($portal)
            ->setBloque($bloque)
            ->setEscalera($escalera)
            ->setPiso($piso)
            ->setPuerta($puerta)
            ->setLocalidad($localidad)
            ->setProvincia($provincia);
    }
    /**
     * Get TipoDireccion value
     * @return string|null
     */
    public function getTipoDireccion()
    {
        return $this->TipoDireccion;
    }
    /**
     * Set TipoDireccion value
     * @param string $tipoDireccion
     * @return DIRECCIONTYPE
     */
    public function setTipoDireccion($tipoDireccion = null)
    {
        // validation for constraint: string
        if (!is_null($tipoDireccion) && !is_string($tipoDireccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoDireccion, true), gettype($tipoDireccion)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tipoDireccion) && mb_strlen($tipoDireccion) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($tipoDireccion)), __LINE__);
        }
        $this->TipoDireccion = $tipoDireccion;
        return $this;
    }
    /**
     * Get Direccion value
     * @return string|null
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }
    /**
     * Set Direccion value
     * @param string $direccion
     * @return DIRECCIONTYPE
     */
    public function setDireccion($direccion = null)
    {
        // validation for constraint: string
        if (!is_null($direccion) && !is_string($direccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccion, true), gettype($direccion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($direccion) && mb_strlen($direccion) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($direccion)), __LINE__);
        }
        $this->Direccion = $direccion;
        return $this;
    }
    /**
     * Get Numero value
     * @return string|null
     */
    public function getNumero()
    {
        return $this->Numero;
    }
    /**
     * Set Numero value
     * @param string $numero
     * @return DIRECCIONTYPE
     */
    public function setNumero($numero = null)
    {
        // validation for constraint: string
        if (!is_null($numero) && !is_string($numero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($numero) && mb_strlen($numero) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($numero)), __LINE__);
        }
        $this->Numero = $numero;
        return $this;
    }
    /**
     * Get Portal value
     * @return string|null
     */
    public function getPortal()
    {
        return $this->Portal;
    }
    /**
     * Set Portal value
     * @param string $portal
     * @return DIRECCIONTYPE
     */
    public function setPortal($portal = null)
    {
        // validation for constraint: string
        if (!is_null($portal) && !is_string($portal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portal, true), gettype($portal)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($portal) && mb_strlen($portal) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($portal)), __LINE__);
        }
        $this->Portal = $portal;
        return $this;
    }
    /**
     * Get Bloque value
     * @return string|null
     */
    public function getBloque()
    {
        return $this->Bloque;
    }
    /**
     * Set Bloque value
     * @param string $bloque
     * @return DIRECCIONTYPE
     */
    public function setBloque($bloque = null)
    {
        // validation for constraint: string
        if (!is_null($bloque) && !is_string($bloque)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bloque, true), gettype($bloque)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($bloque) && mb_strlen($bloque) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($bloque)), __LINE__);
        }
        $this->Bloque = $bloque;
        return $this;
    }
    /**
     * Get Escalera value
     * @return string|null
     */
    public function getEscalera()
    {
        return $this->Escalera;
    }
    /**
     * Set Escalera value
     * @param string $escalera
     * @return DIRECCIONTYPE
     */
    public function setEscalera($escalera = null)
    {
        // validation for constraint: string
        if (!is_null($escalera) && !is_string($escalera)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($escalera, true), gettype($escalera)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($escalera) && mb_strlen($escalera) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($escalera)), __LINE__);
        }
        $this->Escalera = $escalera;
        return $this;
    }
    /**
     * Get Piso value
     * @return string|null
     */
    public function getPiso()
    {
        return $this->Piso;
    }
    /**
     * Set Piso value
     * @param string $piso
     * @return DIRECCIONTYPE
     */
    public function setPiso($piso = null)
    {
        // validation for constraint: string
        if (!is_null($piso) && !is_string($piso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($piso, true), gettype($piso)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($piso) && mb_strlen($piso) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($piso)), __LINE__);
        }
        $this->Piso = $piso;
        return $this;
    }
    /**
     * Get Puerta value
     * @return string|null
     */
    public function getPuerta()
    {
        return $this->Puerta;
    }
    /**
     * Set Puerta value
     * @param string $puerta
     * @return DIRECCIONTYPE
     */
    public function setPuerta($puerta = null)
    {
        // validation for constraint: string
        if (!is_null($puerta) && !is_string($puerta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($puerta, true), gettype($puerta)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($puerta) && mb_strlen($puerta) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($puerta)), __LINE__);
        }
        $this->Puerta = $puerta;
        return $this;
    }
    /**
     * Get Localidad value
     * @return string|null
     */
    public function getLocalidad()
    {
        return $this->Localidad;
    }
    /**
     * Set Localidad value
     * @param string $localidad
     * @return DIRECCIONTYPE
     */
    public function setLocalidad($localidad = null)
    {
        // validation for constraint: string
        if (!is_null($localidad) && !is_string($localidad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidad, true), gettype($localidad)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($localidad) && mb_strlen($localidad) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($localidad)), __LINE__);
        }
        $this->Localidad = $localidad;
        return $this;
    }
    /**
     * Get Provincia value
     * @return string|null
     */
    public function getProvincia()
    {
        return $this->Provincia;
    }
    /**
     * Set Provincia value
     * @param string $provincia
     * @return DIRECCIONTYPE
     */
    public function setProvincia($provincia = null)
    {
        // validation for constraint: string
        if (!is_null($provincia) && !is_string($provincia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($provincia) && mb_strlen($provincia) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($provincia)), __LINE__);
        }
        $this->Provincia = $provincia;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DIRECCIONTYPE
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
