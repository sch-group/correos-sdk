<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\CalculaTarifa;
use CorreosSdk\StructType\RespuestaCalculaTarifa;

/**
 * This class stands for Calcula ServiceType
 * @subpackage Services
 */
class Calcula extends SoapClient
{
    /**
     * Method to call the operation originally named CalculaTarifa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param CalculaTarifa $calculaTarifaRequest
     * @return RespuestaCalculaTarifa|bool
     */
    public function CalculaTarifa(CalculaTarifa $calculaTarifaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->CalculaTarifa($calculaTarifaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaCalculaTarifa
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
