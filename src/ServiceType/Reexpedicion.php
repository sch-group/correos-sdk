<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\PeticionReexpedicion;
use CorreosSdk\StructType\RespuestaReexpedicion;

/**
 * This class stands for Reexpedicion ServiceType
 * @subpackage Services
 */
class Reexpedicion extends SoapClient
{
    /**
     * Method to call the operation originally named Reexpedicion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionReexpedicion $reexpedicionRequest
     * @return RespuestaReexpedicion|bool
     */
    public function Reexpedicion(PeticionReexpedicion $reexpedicionRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->Reexpedicion($reexpedicionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaReexpedicion
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
