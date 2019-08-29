<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\RespuestaSolicitudDocumentacionAduanera;
use CorreosSdk\StructType\RespuestaSolicitudDocumentacionAduaneraCN23CP71;
use CorreosSdk\StructType\SolicitudDocumentacionAduanera;
use CorreosSdk\StructType\SolicitudDocumentacionAduaneraCN23CP71;

/**
 * This class stands for Documentacion ServiceType
 * @subpackage Services
 */
class Documentacion extends SoapClient
{
    /**
     * Method to call the operation originally named DocumentacionAduaneraOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitudDocumentacionAduanera $documentacionAduaneraRequest
     * @return RespuestaSolicitudDocumentacionAduanera|bool
     */
    public function DocumentacionAduaneraOp(SolicitudDocumentacionAduanera $documentacionAduaneraRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DocumentacionAduaneraOp($documentacionAduaneraRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DocumentacionAduaneraCN23CP71Op
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitudDocumentacionAduaneraCN23CP71 $documentacionAduaneraCN23CP71Request
     * @return RespuestaSolicitudDocumentacionAduaneraCN23CP71|bool
     */
    public function DocumentacionAduaneraCN23CP71Op(SolicitudDocumentacionAduaneraCN23CP71 $documentacionAduaneraCN23CP71Request)
    {
        try {
            $this->setResult($this->getSoapClient()->DocumentacionAduaneraCN23CP71Op($documentacionAduaneraCN23CP71Request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaSolicitudDocumentacionAduanera|RespuestaSolicitudDocumentacionAduaneraCN23CP71
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
