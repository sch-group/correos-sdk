<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\PeticionAnular;
use CorreosSdk\StructType\RespuestaAnular;

/**
 * This class stands for Anular ServiceType
 * @subpackage Services
 */
class Anular extends SoapClient
{
    /**
     * Method to call the operation originally named AnularOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionAnular $anularRequest
     * @return RespuestaAnular|bool
     */
    public function AnularOp(PeticionAnular $anularRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AnularOp($anularRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaAnular
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
