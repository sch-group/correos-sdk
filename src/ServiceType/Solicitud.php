<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\SolicitudEtiqueta;
use CorreosSdk\StructType\SolicitudEtiquetaExp;
use CorreosSdk\StructType\SolicitudEtiquetaRefCli;
use CorreosSdk\StructType\RespuestaSolicitudEtiqueta;
use CorreosSdk\StructType\RespuestaSolicitudEtiquetaExp;
use CorreosSdk\StructType\RespuestaSolicitudEtiquetaRefCli;

/**
 * This class stands for Solicitud ServiceType
 * @subpackage Services
 */
class Solicitud extends SoapClient
{
    /**
     * Method to call the operation originally named SolicitudEtiquetaRefCliOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitudEtiquetaRefCli $solicitudEtiquetaRefCliRequest
     * @return RespuestaSolicitudEtiquetaRefCli|bool
     */
    public function SolicitudEtiquetaRefCliOp(SolicitudEtiquetaRefCli $solicitudEtiquetaRefCliRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SolicitudEtiquetaRefCliOp($solicitudEtiquetaRefCliRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SolicitudEtiquetaExpOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitudEtiquetaExp $solicitudEtiquetaExpRequest
     * @return RespuestaSolicitudEtiquetaExp|bool
     */
    public function SolicitudEtiquetaExpOp(SolicitudEtiquetaExp $solicitudEtiquetaExpRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SolicitudEtiquetaExpOp($solicitudEtiquetaExpRequest));
            file_put_contents("label.xml", $this->getLastRequest()); die;

            return $this->getResult();
        } catch (\SoapFault $soapFault) {



            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SolicitudEtiquetaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitudEtiqueta $solicitudEtiquetaRequest
     * @return RespuestaSolicitudEtiqueta|bool
     */
    public function SolicitudEtiquetaOp(SolicitudEtiqueta $solicitudEtiquetaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SolicitudEtiquetaOp($solicitudEtiquetaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaSolicitudEtiqueta|RespuestaSolicitudEtiquetaExp|RespuestaSolicitudEtiquetaRefCli
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
