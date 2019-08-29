<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\RespuestaValidarDatos;
use CorreosSdk\StructType\ValidarDatos;

/**
 * This class stands for Validar ServiceType
 * @subpackage Services
 */
class Validar extends SoapClient
{
    /**
     * Method to call the operation originally named ValidarDatosOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param ValidarDatos $validarDatosRequest
     * @return RespuestaValidarDatos|bool
     */
    public function ValidarDatosOp(ValidarDatos $validarDatosRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidarDatosOp($validarDatosRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaValidarDatos
     */
    public function getResult()
    {
        return parent::getResult();
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
