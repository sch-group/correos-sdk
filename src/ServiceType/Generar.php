<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\PeticionGenerarCodigoExpedicion;
use CorreosSdk\StructType\RespuestaGenerarCodigoExpedicion;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generar ServiceType
 * @subpackage Services
 */
class Generar extends SoapClient
{
    /**
     * Method to call the operation originally named GenerarCodigoExpedicionOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionGenerarCodigoExpedicion $generarCodigoExpedicionRequest
     * @return RespuestaGenerarCodigoExpedicion|bool
     */
    public function GenerarCodigoExpedicionOp(PeticionGenerarCodigoExpedicion $generarCodigoExpedicionRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GenerarCodigoExpedicionOp($generarCodigoExpedicionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaGenerarCodigoExpedicion
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
