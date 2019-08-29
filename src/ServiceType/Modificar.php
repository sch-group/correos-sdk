<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\PeticionModificar;
use CorreosSdk\StructType\RespuestaModificar;
use CorreosSdk\StructType\PeticionModificarAutorizacionPreviaEntrega;
use CorreosSdk\StructType\RespuestaModificarAutorizacionPreviaEntrega;

/**
 * This class stands for Modificar ServiceType
 * @subpackage Services
 */
class Modificar extends SoapClient
{
    /**
     * Method to call the operation originally named ModificarOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionModificar $modificarRequest
     * @return RespuestaModificar|bool
     */
    public function ModificarOp(PeticionModificar $modificarRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ModificarOp($modificarRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ModificarAutorizacionPreviaEntregaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionModificarAutorizacionPreviaEntrega $modificarAutorizacionPreviaEntregaRequest
     * @return RespuestaModificarAutorizacionPreviaEntrega|bool
     */
    public function ModificarAutorizacionPreviaEntregaOp(PeticionModificarAutorizacionPreviaEntrega $modificarAutorizacionPreviaEntregaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ModificarAutorizacionPreviaEntregaOp($modificarAutorizacionPreviaEntregaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaModificar|RespuestaModificarAutorizacionPreviaEntrega
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
