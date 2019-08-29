<?php

namespace CorreosSdk\ServiceType;

use CorreosSdk\Client\SoapClient;
use CorreosSdk\StructType\RespuestaPreregistroCodEnvio;
use CorreosSdk\StructType\RespuestaPreregistroCodExpedicion;
use CorreosSdk\StructType\PeticionPreRegistroCN;
use CorreosSdk\StructType\PeticionPreRegistroCNCodEnvio;
use CorreosSdk\StructType\PeticionPreRegistroIdaVta;
use CorreosSdk\StructType\PreregistroCodEnvio;
use CorreosSdk\StructType\PreregistroCodExpedicion;
use CorreosSdk\StructType\PreregistroEnvio;
use CorreosSdk\StructType\PreregistroEnvioMultibulto;
use CorreosSdk\StructType\RespuestaPreRegistroCN;
use CorreosSdk\StructType\RespuestaPreRegistroCNCodEnvio;
use CorreosSdk\StructType\RespuestaPreregistroEnvio;
use CorreosSdk\StructType\RespuestaPreregistroEnvioMultibulto;
use CorreosSdk\StructType\RespuestaPreRegistroIdaVta;

/**https://pla393.correos.es:8443/ps2c_ws/services/PreRegistro
 * This class stands for Pre ServiceType
 * @subpackage Services
 */
class Pre extends SoapClient
{
    /**
     * Method to call the operation originally named PreRegistro
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PreregistroEnvio $preRegistroEnvioRequest
     * @return RespuestaPreregistroEnvio|bool
     */
    public function PreRegistro(PreregistroEnvio $preRegistroEnvioRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistro($preRegistroEnvioRequest));
            file_put_contents("request.xml", $this->getLastRequest());

            return $this->getResult();

        } catch (\SoapFault $soapFault) {

            file_put_contents("request.xml", $this->getLastRequest());

            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroMultibulto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PreregistroEnvioMultibulto $preRegistroEnvioMultibultoRequest
     * @return RespuestaPreregistroEnvioMultibulto|bool
     */
    public function PreRegistroMultibulto(PreregistroEnvioMultibulto $preRegistroEnvioMultibultoRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroMultibulto($preRegistroEnvioMultibultoRequest));
            return var_dump($this->getResult());
        } catch (\SoapFault $soapFault) {




            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCodEnvio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PreregistroCodEnvio $preRegistroCodEnvioRequest
     * @return RespuestaPreregistroCodEnvio|bool
     */
    public function PreRegistroCodEnvio(PreregistroCodEnvio $preRegistroCodEnvioRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroCodEnvio($preRegistroCodEnvioRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCodExpedicion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PreregistroCodExpedicion $preRegistroCodExpedicionRequest
     * @return RespuestaPreregistroCodExpedicion|bool
     */
    public function PreRegistroCodExpedicion(PreregistroCodExpedicion $preRegistroCodExpedicionRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroCodExpedicion($preRegistroCodExpedicionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroIdaVuelta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionPreRegistroIdaVta $preRegistroIdaVtaRequest
     * @return RespuestaPreRegistroIdaVta|bool
     */
    public function PreRegistroIdaVuelta(PeticionPreRegistroIdaVta $preRegistroIdaVtaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroIdaVuelta($preRegistroIdaVtaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCN
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionPreRegistroCN $preRegistroCNRequest
     * @return RespuestaPreRegistroCN|bool
     */
    public function PreRegistroCN(PeticionPreRegistroCN $preRegistroCNRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroCN($preRegistroCNRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCNCodEnvio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param PeticionPreRegistroCNCodEnvio $preRegistroCNCodEnvioRequest
     * @return RespuestaPreRegistroCNCodEnvio|bool
     */
    public function PreRegistroCNCodEnvio(PeticionPreRegistroCNCodEnvio $preRegistroCNCodEnvioRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PreRegistroCNCodEnvio($preRegistroCNCodEnvioRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return RespuestaPreRegistroCN|RespuestaPreRegistroCNCodEnvio|RespuestaPreregistroCodEnvio|RespuestaPreregistroCodExpedicion|RespuestaPreregistroEnvio|RespuestaPreregistroEnvioMultibulto|RespuestaPreRegistroIdaVta
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
