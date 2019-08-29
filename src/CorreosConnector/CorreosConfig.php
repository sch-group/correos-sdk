<?php


namespace CorreosSdk\CorreosConnector;


use CorreosSdk\ClassMap;
use CorreosSdk\Client\SoapClient;

class CorreosConfig
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $options;
    /**
     * @var string
     */
    private $mode;

    /**
     * CorreosConnector constructor.
     * @param string $login
     * @param string $password
     * @param string $url
     * @param array $options
     */
    public function __construct(string $login,string $password, string $url, $mode = 'prod')
    {
        $this->login = $login;
        $this->password = $password;
        $this->url = $url;
        $this->mode = $mode;

        $this->options = [
            SoapClient::WSDL_CACHE_WSDL => WSDL_CACHE_NONE,
            SoapClient::WSDL_LOGIN => $login,
            SoapClient::WSDL_PASSWORD => $password,
            SoapClient::WSDL_TRACE => true,
            SoapClient::WSDL_URL => $this->mode == 'prod' ? __DIR__  . '/CorreosWsdl/correos.wsdl' : './CorreosWsdl/correos_dev.wsdl',
            SoapClient::WSDL_CLASSMAP => ClassMap::get(),
            SoapClient::WSDL_STREAM_CONTEXT => stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]),
        ];;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}