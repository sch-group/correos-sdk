<?php


namespace CorreosSdk\CorreosConnector;


use CorreosSdk\ClassMap;
use CorreosSdk\Client\SoapClient;

class CorreosConfig
{
    /**
     * @var array
     */
    private $options;
    /**
     * @var string
     */
    private $mode;

    /**
     * @var string
     */
    private $clientCode;
    /**
     * @var string
     */
    private $clientNumber;
    /**
     * @var string
     */
    private $clientContractNumber;

    /**
     * CorreosConnector constructor.
     * @param string $login
     * @param string $password
     * @param string $clientNumber
     * @param string $clientContractNumber
     * @param string $mode
     */
    public function __construct(string $login,string $password, string $clientCode ,string $clientNumber, string $clientContractNumber, $mode = 'prod')
    {
        $this->mode = $mode;

        $this->options = [
            SoapClient::WSDL_CACHE_WSDL => WSDL_CACHE_NONE,
            SoapClient::WSDL_LOGIN => $login,
            SoapClient::WSDL_PASSWORD => $password,
            SoapClient::WSDL_TRACE => true,
            SoapClient::WSDL_URL => $this->mode == 'prod' ? __DIR__  . '/CorreosWsdl/correos.wsdl' : __DIR__ . '/CorreosWsdl/correos_dev.wsdl',
            SoapClient::WSDL_CLASSMAP => ClassMap::get(),
            SoapClient::WSDL_STREAM_CONTEXT => stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]),
        ];

        $this->clientNumber = $clientNumber;
        $this->clientContractNumber = $clientContractNumber;
        $this->clientCode = $clientCode;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @return string
     */
    public function getClientContractNumber()
    {
        return $this->clientContractNumber;
    }

    /**
     * @return string
     */
    public function getClientCode()
    {
        return $this->clientCode;
    }

}