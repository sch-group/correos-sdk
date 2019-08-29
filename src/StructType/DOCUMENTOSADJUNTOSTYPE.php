<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DOCUMENTOSADJUNTOSTYPE StructType
 * @subpackage Structs
 */
class DOCUMENTOSADJUNTOSTYPE extends AbstractStructBase
{
    /**
     * The DocumentoAdjunto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - nillable: true
     * @var DOCUMENTOADJUNTOTYPE[]
     */
    public $DocumentoAdjunto;
    /**
     * Constructor method for DOCUMENTOSADJUNTOSTYPE
     * @uses DOCUMENTOSADJUNTOSTYPE::setDocumentoAdjunto()
     * @param DOCUMENTOADJUNTOTYPE[] $documentoAdjunto
     */
    public function __construct(array $documentoAdjunto = array())
    {
        $this
            ->setDocumentoAdjunto($documentoAdjunto);
    }
    /**
     * Get DocumentoAdjunto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return DOCUMENTOADJUNTOTYPE[]|null
     */
    public function getDocumentoAdjunto()
    {
        return isset($this->DocumentoAdjunto) ? $this->DocumentoAdjunto : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentoAdjunto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentoAdjunto method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentoAdjuntoForArrayConstraintsFromSetDocumentoAdjunto(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) {
            // validation for constraint: itemType
            if (!$dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem instanceof DOCUMENTOADJUNTOTYPE) {
                $invalidValues[] = is_object($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) ? get_class($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) : sprintf('%s(%s)', gettype($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem), var_export($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentoAdjunto property can only contain items of type DOCUMENTOADJUNTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentoAdjunto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param DOCUMENTOADJUNTOTYPE[] $documentoAdjunto
     * @return DOCUMENTOSADJUNTOSTYPE
     */
    public function setDocumentoAdjunto(array $documentoAdjunto = array())
    {
        // validation for constraint: array
        if ('' !== ($documentoAdjuntoArrayErrorMessage = self::validateDocumentoAdjuntoForArrayConstraintsFromSetDocumentoAdjunto($documentoAdjunto))) {
            throw new \InvalidArgumentException($documentoAdjuntoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($documentoAdjunto) && count($documentoAdjunto) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($documentoAdjunto)), __LINE__);
        }
        if (is_null($documentoAdjunto) || (is_array($documentoAdjunto) && empty($documentoAdjunto))) {
            unset($this->DocumentoAdjunto);
        } else {
            $this->DocumentoAdjunto = $documentoAdjunto;
        }
        return $this;
    }
    /**
     * Add item to DocumentoAdjunto value
     * @throws \InvalidArgumentException
     * @param DOCUMENTOADJUNTOTYPE $item
     * @return DOCUMENTOSADJUNTOSTYPE
     */
    public function addToDocumentoAdjunto(DOCUMENTOADJUNTOTYPE $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof DOCUMENTOADJUNTOTYPE) {
            throw new \InvalidArgumentException(sprintf('The DocumentoAdjunto property can only contain items of type DOCUMENTOADJUNTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DocumentoAdjunto) && count($this->DocumentoAdjunto) >= 9) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DocumentoAdjunto)), __LINE__);
        }
        $this->DocumentoAdjunto[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DOCUMENTOSADJUNTOSTYPE
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
