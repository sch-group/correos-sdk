<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\PeticionBaja;
use CorreosSdk\StructType\RespuestaBaja;

/**
 * This class stands for Baja ServiceType
 * @subpackage Services
 */
class Baja extends SoapClient
{
    /**
     * Method to call the operation originally named BajaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionBaja $bajaRequest
     * @return RespuestaBaja|bool
     */
    public function BajaOp(PeticionBaja $bajaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->BajaOp($bajaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaBaja
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
