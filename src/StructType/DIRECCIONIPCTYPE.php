<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DIRECCIONIPCTYPE StructType
 * @subpackage Structs
 */
class DIRECCIONIPCTYPE extends AbstractStructBase
{
    /**
     * The Nombre
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Nombre;
    /**
     * The Calle
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    public $Calle;
    /**
     * The NumeroCalle
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumeroCalle;
    /**
     * The ApartadoCorreos
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApartadoCorreos;
    /**
     * The CodigoZip
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $CodigoZip;
    /**
     * The Ciudad
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ciudad;
    /**
     * The Pais
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * @var string
     */
    public $Pais;
    /**
     * The NombreContacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NombreContacto;
    /**
     * The TelefonoContacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - minOccurs: 0
     * @var string
     */
    public $TelefonoContacto;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * Constructor method for DIRECCIONIPCTYPE
     * @uses DIRECCIONIPCTYPE::setNombre()
     * @uses DIRECCIONIPCTYPE::setCalle()
     * @uses DIRECCIONIPCTYPE::setNumeroCalle()
     * @uses DIRECCIONIPCTYPE::setApartadoCorreos()
     * @uses DIRECCIONIPCTYPE::setCodigoZip()
     * @uses DIRECCIONIPCTYPE::setCiudad()
     * @uses DIRECCIONIPCTYPE::setPais()
     * @uses DIRECCIONIPCTYPE::setNombreContacto()
     * @uses DIRECCIONIPCTYPE::setTelefonoContacto()
     * @uses DIRECCIONIPCTYPE::setEmail()
     * @param string $nombre
     * @param string[] $calle
     * @param string $numeroCalle
     * @param string $apartadoCorreos
     * @param string $codigoZip
     * @param string $ciudad
     * @param string $pais
     * @param string $nombreContacto
     * @param string $telefonoContacto
     * @param string $email
     */
    public function __construct($nombre = null, array $calle = array(), $numeroCalle = null, $apartadoCorreos = null, $codigoZip = null, $ciudad = null, $pais = null, $nombreContacto = null, $telefonoContacto = null, $email = null)
    {
        $this
            ->setNombre($nombre)
            ->setCalle($calle)
            ->setNumeroCalle($numeroCalle)
            ->setApartadoCorreos($apartadoCorreos)
            ->setCodigoZip($codigoZip)
            ->setCiudad($ciudad)
            ->setPais($pais)
            ->setNombreContacto($nombreContacto)
            ->setTelefonoContacto($telefonoContacto)
            ->setEmail($email);
    }
    /**
     * Get Nombre value
     * @return string|null
     */
    public function getNombre()
    {
        return $this->Nombre;
    }
    /**
     * Set Nombre value
     * @param string $nombre
     * @return DIRECCIONIPCTYPE
     */
    public function setNombre($nombre = null)
    {
        // validation for constraint: string
        if (!is_null($nombre) && !is_string($nombre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($nombre) && mb_strlen($nombre) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($nombre)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombre) && mb_strlen($nombre) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nombre)), __LINE__);
        }
        $this->Nombre = $nombre;
        return $this;
    }
    /**
     * Get Calle value
     * @return string[]|null
     */
    public function getCalle()
    {
        return $this->Calle;
    }
    /**
     * This method is responsible for validating the values passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForArrayConstraintsFromSetCalle(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: itemType
            if (!is_string($dIRECCIONIPCTYPECalleItem)) {
                $invalidValues[] = is_object($dIRECCIONIPCTYPECalleItem) ? get_class($dIRECCIONIPCTYPECalleItem) : sprintf('%s(%s)', gettype($dIRECCIONIPCTYPECalleItem), var_export($dIRECCIONIPCTYPECalleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Calle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMaxLengthConstraintFromSetCalle($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: maxLength(40)
            if (mb_strlen($dIRECCIONIPCTYPECalleItem) > 40) {
                $invalidValues[] = var_export($dIRECCIONIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 40', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMinLengthConstraintFromSetCalle($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen($dIRECCIONIPCTYPECalleItem) < 1) {
                $invalidValues[] = var_export($dIRECCIONIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Calle value
     * @throws \InvalidArgumentException
     * @param string[] $calle
     * @return DIRECCIONIPCTYPE
     */
    public function setCalle(array $calle = array())
    {
        // validation for constraint: array
        if ('' !== ($calleArrayErrorMessage = self::validateCalleForArrayConstraintsFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(40)
        if ('' !== ($calleMaxLengthErrorMessage = self::validateCalleForMaxLengthConstraintFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($calle) && count($calle) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($calleMinLengthErrorMessage = self::validateCalleForMinLengthConstraintFromSetCalle($calle))) {
            throw new \InvalidArgumentException($calleMinLengthErrorMessage, __LINE__);
        }
        $this->Calle = $calle;
        return $this;
    }
    /**
     * Add item to Calle value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return DIRECCIONIPCTYPE
     */
    public function addToCalle($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Calle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (mb_strlen($item) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->Calle) && count($this->Calle) >= 3) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->Calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen($item) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($item)), __LINE__);
        }
        $this->Calle[] = $item;
        return $this;
    }
    /**
     * Get NumeroCalle value
     * @return string|null
     */
    public function getNumeroCalle()
    {
        return $this->NumeroCalle;
    }
    /**
     * Set NumeroCalle value
     * @param string $numeroCalle
     * @return DIRECCIONIPCTYPE
     */
    public function setNumeroCalle($numeroCalle = null)
    {
        // validation for constraint: string
        if (!is_null($numeroCalle) && !is_string($numeroCalle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCalle, true), gettype($numeroCalle)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numeroCalle) && mb_strlen($numeroCalle) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numeroCalle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroCalle) && mb_strlen($numeroCalle) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numeroCalle)), __LINE__);
        }
        $this->NumeroCalle = $numeroCalle;
        return $this;
    }
    /**
     * Get ApartadoCorreos value
     * @return string|null
     */
    public function getApartadoCorreos()
    {
        return $this->ApartadoCorreos;
    }
    /**
     * Set ApartadoCorreos value
     * @param string $apartadoCorreos
     * @return DIRECCIONIPCTYPE
     */
    public function setApartadoCorreos($apartadoCorreos = null)
    {
        // validation for constraint: string
        if (!is_null($apartadoCorreos) && !is_string($apartadoCorreos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoCorreos, true), gettype($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($apartadoCorreos) && mb_strlen($apartadoCorreos) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartadoCorreos) && mb_strlen($apartadoCorreos) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($apartadoCorreos)), __LINE__);
        }
        $this->ApartadoCorreos = $apartadoCorreos;
        return $this;
    }
    /**
     * Get CodigoZip value
     * @return string|null
     */
    public function getCodigoZip()
    {
        return $this->CodigoZip;
    }
    /**
     * Set CodigoZip value
     * @param string $codigoZip
     * @return DIRECCIONIPCTYPE
     */
    public function setCodigoZip($codigoZip = null)
    {
        // validation for constraint: string
        if (!is_null($codigoZip) && !is_string($codigoZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoZip, true), gettype($codigoZip)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoZip) && mb_strlen($codigoZip) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen($codigoZip)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($codigoZip) && mb_strlen($codigoZip) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($codigoZip)), __LINE__);
        }
        $this->CodigoZip = $codigoZip;
        return $this;
    }
    /**
     * Get Ciudad value
     * @return string|null
     */
    public function getCiudad()
    {
        return $this->Ciudad;
    }
    /**
     * Set Ciudad value
     * @param string $ciudad
     * @return DIRECCIONIPCTYPE
     */
    public function setCiudad($ciudad = null)
    {
        // validation for constraint: string
        if (!is_null($ciudad) && !is_string($ciudad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciudad, true), gettype($ciudad)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($ciudad) && mb_strlen($ciudad) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($ciudad)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ciudad) && mb_strlen($ciudad) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($ciudad)), __LINE__);
        }
        $this->Ciudad = $ciudad;
        return $this;
    }
    /**
     * Get Pais value
     * @return string|null
     */
    public function getPais()
    {
        return $this->Pais;
    }
    /**
     * Set Pais value
     * @param string $pais
     * @return DIRECCIONIPCTYPE
     */
    public function setPais($pais = null)
    {
        // validation for constraint: string
        if (!is_null($pais) && !is_string($pais)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pais, true), gettype($pais)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($pais) && mb_strlen($pais) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($pais)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pais) && mb_strlen($pais) < 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen($pais)), __LINE__);
        }
        $this->Pais = $pais;
        return $this;
    }
    /**
     * Get NombreContacto value
     * @return string|null
     */
    public function getNombreContacto()
    {
        return $this->NombreContacto;
    }
    /**
     * Set NombreContacto value
     * @param string $nombreContacto
     * @return DIRECCIONIPCTYPE
     */
    public function setNombreContacto($nombreContacto = null)
    {
        // validation for constraint: string
        if (!is_null($nombreContacto) && !is_string($nombreContacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreContacto, true), gettype($nombreContacto)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($nombreContacto) && mb_strlen($nombreContacto) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($nombreContacto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombreContacto) && mb_strlen($nombreContacto) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nombreContacto)), __LINE__);
        }
        $this->NombreContacto = $nombreContacto;
        return $this;
    }
    /**
     * Get TelefonoContacto value
     * @return string|null
     */
    public function getTelefonoContacto()
    {
        return $this->TelefonoContacto;
    }
    /**
     * Set TelefonoContacto value
     * @param string $telefonoContacto
     * @return DIRECCIONIPCTYPE
     */
    public function setTelefonoContacto($telefonoContacto = null)
    {
        // validation for constraint: string
        if (!is_null($telefonoContacto) && !is_string($telefonoContacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefonoContacto, true), gettype($telefonoContacto)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($telefonoContacto) && mb_strlen($telefonoContacto) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($telefonoContacto)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($telefonoContacto) && mb_strlen($telefonoContacto) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($telefonoContacto)), __LINE__);
        }
        $this->TelefonoContacto = $telefonoContacto;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return DIRECCIONIPCTYPE
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($email) && mb_strlen($email) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($email)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($email) && mb_strlen($email) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DIRECCIONIPCTYPE
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
