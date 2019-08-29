<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\TipoEnvio;


/**
 * This class stands for ADUANATYPE StructType
 * @subpackage Structs
 */
class ADUANATYPE extends AbstractStructBase
{
    /**
     * The TipoEnvio
     * Meta informations extracted from the WSDL
     * - ref: xsd:TipoEnvio
     * @var string
     */
    public $TipoEnvio;
    /**
     * The EnvioComercial
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EnvioComercial
     * @var string
     */
    public $EnvioComercial;
    /**
     * The FacturaSuperiora500
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:FacturaSuperiora500
     * @var string
     */
    public $FacturaSuperiora500;
    /**
     * The DUAConCorreos
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DUAConCorreos
     * @var string
     */
    public $DUAConCorreos;
    /**
     * The DescAduanera
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescAduanera
     * @var DescAduanera
     */
    public $DescAduanera;
    /**
     * The Factura
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Factura
     * @var string
     */
    public $Factura;
    /**
     * The TxtFactura
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtFactura
     * @var string
     */
    public $TxtFactura;
    /**
     * The Licencia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Licencia
     * @var string
     */
    public $Licencia;
    /**
     * The TxtLicencia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtLicencia
     * @var string
     */
    public $TxtLicencia;
    /**
     * The Certificado
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Certificado
     * @var string
     */
    public $Certificado;
    /**
     * The TxtCertificado
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtCertificado
     * @var string
     */
    public $TxtCertificado;
    /**
     * The RefAduaneraExpedidor
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:RefAduaneraExpedidor
     * @var string
     */
    public $RefAduaneraExpedidor;
    /**
     * The RefFiscalImportador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:RefFiscalImportador
     * @var string
     */
    public $RefFiscalImportador;
    /**
     * The NumIvaImportador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:NumIvaImportador
     * @var string
     */
    public $NumIvaImportador;
    /**
     * The CodImportador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:CodImportador
     * @var string
     */
    public $CodImportador;
    /**
     * The NumTelefonoImportador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 26
     * - minOccurs: 0
     * - ref: xsd:NumTelefonoImportador
     * @var string
     */
    public $NumTelefonoImportador;
    /**
     * The DesEmailImportador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:DesEmailImportador
     * @var string
     */
    public $DesEmailImportador;
    /**
     * Constructor method for ADUANATYPE
     * @uses ADUANATYPE::setTipoEnvio()
     * @uses ADUANATYPE::setEnvioComercial()
     * @uses ADUANATYPE::setFacturaSuperiora500()
     * @uses ADUANATYPE::setDUAConCorreos()
     * @uses ADUANATYPE::setDescAduanera()
     * @uses ADUANATYPE::setFactura()
     * @uses ADUANATYPE::setTxtFactura()
     * @uses ADUANATYPE::setLicencia()
     * @uses ADUANATYPE::setTxtLicencia()
     * @uses ADUANATYPE::setCertificado()
     * @uses ADUANATYPE::setTxtCertificado()
     * @uses ADUANATYPE::setRefAduaneraExpedidor()
     * @uses ADUANATYPE::setRefFiscalImportador()
     * @uses ADUANATYPE::setNumIvaImportador()
     * @uses ADUANATYPE::setCodImportador()
     * @uses ADUANATYPE::setNumTelefonoImportador()
     * @uses ADUANATYPE::setDesEmailImportador()
     * @param string $tipoEnvio
     * @param string $envioComercial
     * @param string $facturaSuperiora500
     * @param string $dUAConCorreos
     * @param DescAduanera $descAduanera
     * @param string $factura
     * @param string $txtFactura
     * @param string $licencia
     * @param string $txtLicencia
     * @param string $certificado
     * @param string $txtCertificado
     * @param string $refAduaneraExpedidor
     * @param string $refFiscalImportador
     * @param string $numIvaImportador
     * @param string $codImportador
     * @param string $numTelefonoImportador
     * @param string $desEmailImportador
     */
    public function __construct(
        $tipoEnvio = null,
        $envioComercial = null,
        $facturaSuperiora500 = null,
        $dUAConCorreos = null,
        DescAduanera $descAduanera = null,
        $factura = null,
        $txtFactura = null,
        $licencia = null,
        $txtLicencia = null,
        $certificado = null,
        $txtCertificado = null,
        $refAduaneraExpedidor = null,
        $refFiscalImportador = null,
        $numIvaImportador = null,
        $codImportador = null,
        $numTelefonoImportador = null,
        $desEmailImportador = null
    ) {
        $this
            ->setTipoEnvio($tipoEnvio)
            ->setEnvioComercial($envioComercial)
            ->setFacturaSuperiora500($facturaSuperiora500)
            ->setDUAConCorreos($dUAConCorreos)
            ->setDescAduanera($descAduanera)
            ->setFactura($factura)
            ->setTxtFactura($txtFactura)
            ->setLicencia($licencia)
            ->setTxtLicencia($txtLicencia)
            ->setCertificado($certificado)
            ->setTxtCertificado($txtCertificado)
            ->setRefAduaneraExpedidor($refAduaneraExpedidor)
            ->setRefFiscalImportador($refFiscalImportador)
            ->setNumIvaImportador($numIvaImportador)
            ->setCodImportador($codImportador)
            ->setNumTelefonoImportador($numTelefonoImportador)
            ->setDesEmailImportador($desEmailImportador);
    }
    /**
     * Get TipoEnvio value
     * @return string|null
     */
    public function getTipoEnvio()
    {
        return $this->TipoEnvio;
    }
    /**
     * Set TipoEnvio value
     * @uses TipoEnvio::valueIsValid()
     * @uses TipoEnvio::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoEnvio
     * @return ADUANATYPE
     */
    public function setTipoEnvio($tipoEnvio = null)
    {
        // validation for constraint: enumeration
        if (!TipoEnvio::valueIsValid($tipoEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoEnvio', is_array($tipoEnvio) ? implode(', ', $tipoEnvio) : var_export($tipoEnvio, true), implode(', ', TipoEnvio::getValidValues())), __LINE__);
        }
        $this->TipoEnvio = $tipoEnvio;
        return $this;
    }
    /**
     * Get EnvioComercial value
     * @return string|null
     */
    public function getEnvioComercial()
    {
        return $this->EnvioComercial;
    }
    /**
     * Set EnvioComercial value
     * @param string $envioComercial
     * @return ADUANATYPE
     */
    public function setEnvioComercial($envioComercial = null)
    {
        // validation for constraint: string
        if (!is_null($envioComercial) && !is_string($envioComercial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envioComercial, true), gettype($envioComercial)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($envioComercial) && mb_strlen($envioComercial) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($envioComercial)), __LINE__);
        }
        $this->EnvioComercial = $envioComercial;
        return $this;
    }
    /**
     * Get FacturaSuperiora500 value
     * @return string|null
     */
    public function getFacturaSuperiora500()
    {
        return $this->FacturaSuperiora500;
    }
    /**
     * Set FacturaSuperiora500 value
     * @param string $facturaSuperiora500
     * @return ADUANATYPE
     */
    public function setFacturaSuperiora500($facturaSuperiora500 = null)
    {
        // validation for constraint: string
        if (!is_null($facturaSuperiora500) && !is_string($facturaSuperiora500)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facturaSuperiora500, true), gettype($facturaSuperiora500)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($facturaSuperiora500) && mb_strlen($facturaSuperiora500) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($facturaSuperiora500)), __LINE__);
        }
        $this->FacturaSuperiora500 = $facturaSuperiora500;
        return $this;
    }
    /**
     * Get DUAConCorreos value
     * @return string|null
     */
    public function getDUAConCorreos()
    {
        return $this->DUAConCorreos;
    }
    /**
     * Set DUAConCorreos value
     * @param string $dUAConCorreos
     * @return ADUANATYPE
     */
    public function setDUAConCorreos($dUAConCorreos = null)
    {
        // validation for constraint: string
        if (!is_null($dUAConCorreos) && !is_string($dUAConCorreos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dUAConCorreos, true), gettype($dUAConCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($dUAConCorreos) && mb_strlen($dUAConCorreos) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($dUAConCorreos)), __LINE__);
        }
        $this->DUAConCorreos = $dUAConCorreos;
        return $this;
    }
    /**
     * Get DescAduanera value
     * @return DescAduanera|null
     */
    public function getDescAduanera()
    {
        return $this->DescAduanera;
    }
    /**
     * Set DescAduanera value
     * @param DescAduanera $descAduanera
     * @return ADUANATYPE
     */
    public function setDescAduanera(DescAduanera $descAduanera = null)
    {
        $this->DescAduanera = $descAduanera;
        return $this;
    }
    /**
     * Get Factura value
     * @return string|null
     */
    public function getFactura()
    {
        return $this->Factura;
    }
    /**
     * Set Factura value
     * @param string $factura
     * @return ADUANATYPE
     */
    public function setFactura($factura = null)
    {
        // validation for constraint: string
        if (!is_null($factura) && !is_string($factura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($factura, true), gettype($factura)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($factura) && mb_strlen($factura) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($factura)), __LINE__);
        }
        $this->Factura = $factura;
        return $this;
    }
    /**
     * Get TxtFactura value
     * @return string|null
     */
    public function getTxtFactura()
    {
        return $this->TxtFactura;
    }
    /**
     * Set TxtFactura value
     * @param string $txtFactura
     * @return ADUANATYPE
     */
    public function setTxtFactura($txtFactura = null)
    {
        // validation for constraint: string
        if (!is_null($txtFactura) && !is_string($txtFactura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtFactura, true), gettype($txtFactura)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtFactura) && mb_strlen($txtFactura) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($txtFactura)), __LINE__);
        }
        $this->TxtFactura = $txtFactura;
        return $this;
    }
    /**
     * Get Licencia value
     * @return string|null
     */
    public function getLicencia()
    {
        return $this->Licencia;
    }
    /**
     * Set Licencia value
     * @param string $licencia
     * @return ADUANATYPE
     */
    public function setLicencia($licencia = null)
    {
        // validation for constraint: string
        if (!is_null($licencia) && !is_string($licencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licencia, true), gettype($licencia)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($licencia) && mb_strlen($licencia) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($licencia)), __LINE__);
        }
        $this->Licencia = $licencia;
        return $this;
    }
    /**
     * Get TxtLicencia value
     * @return string|null
     */
    public function getTxtLicencia()
    {
        return $this->TxtLicencia;
    }
    /**
     * Set TxtLicencia value
     * @param string $txtLicencia
     * @return ADUANATYPE
     */
    public function setTxtLicencia($txtLicencia = null)
    {
        // validation for constraint: string
        if (!is_null($txtLicencia) && !is_string($txtLicencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtLicencia, true), gettype($txtLicencia)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtLicencia) && mb_strlen($txtLicencia) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($txtLicencia)), __LINE__);
        }
        $this->TxtLicencia = $txtLicencia;
        return $this;
    }
    /**
     * Get Certificado value
     * @return string|null
     */
    public function getCertificado()
    {
        return $this->Certificado;
    }
    /**
     * Set Certificado value
     * @param string $certificado
     * @return ADUANATYPE
     */
    public function setCertificado($certificado = null)
    {
        // validation for constraint: string
        if (!is_null($certificado) && !is_string($certificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificado, true), gettype($certificado)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($certificado) && mb_strlen($certificado) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($certificado)), __LINE__);
        }
        $this->Certificado = $certificado;
        return $this;
    }
    /**
     * Get TxtCertificado value
     * @return string|null
     */
    public function getTxtCertificado()
    {
        return $this->TxtCertificado;
    }
    /**
     * Set TxtCertificado value
     * @param string $txtCertificado
     * @return ADUANATYPE
     */
    public function setTxtCertificado($txtCertificado = null)
    {
        // validation for constraint: string
        if (!is_null($txtCertificado) && !is_string($txtCertificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtCertificado, true), gettype($txtCertificado)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtCertificado) && mb_strlen($txtCertificado) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($txtCertificado)), __LINE__);
        }
        $this->TxtCertificado = $txtCertificado;
        return $this;
    }
    /**
     * Get RefAduaneraExpedidor value
     * @return string|null
     */
    public function getRefAduaneraExpedidor()
    {
        return $this->RefAduaneraExpedidor;
    }
    /**
     * Set RefAduaneraExpedidor value
     * @param string $refAduaneraExpedidor
     * @return ADUANATYPE
     */
    public function setRefAduaneraExpedidor($refAduaneraExpedidor = null)
    {
        // validation for constraint: string
        if (!is_null($refAduaneraExpedidor) && !is_string($refAduaneraExpedidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refAduaneraExpedidor, true), gettype($refAduaneraExpedidor)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($refAduaneraExpedidor) && mb_strlen($refAduaneraExpedidor) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($refAduaneraExpedidor)), __LINE__);
        }
        $this->RefAduaneraExpedidor = $refAduaneraExpedidor;
        return $this;
    }
    /**
     * Get RefFiscalImportador value
     * @return string|null
     */
    public function getRefFiscalImportador()
    {
        return $this->RefFiscalImportador;
    }
    /**
     * Set RefFiscalImportador value
     * @param string $refFiscalImportador
     * @return ADUANATYPE
     */
    public function setRefFiscalImportador($refFiscalImportador = null)
    {
        // validation for constraint: string
        if (!is_null($refFiscalImportador) && !is_string($refFiscalImportador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refFiscalImportador, true), gettype($refFiscalImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($refFiscalImportador) && mb_strlen($refFiscalImportador) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($refFiscalImportador)), __LINE__);
        }
        $this->RefFiscalImportador = $refFiscalImportador;
        return $this;
    }
    /**
     * Get NumIvaImportador value
     * @return string|null
     */
    public function getNumIvaImportador()
    {
        return $this->NumIvaImportador;
    }
    /**
     * Set NumIvaImportador value
     * @param string $numIvaImportador
     * @return ADUANATYPE
     */
    public function setNumIvaImportador($numIvaImportador = null)
    {
        // validation for constraint: string
        if (!is_null($numIvaImportador) && !is_string($numIvaImportador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numIvaImportador, true), gettype($numIvaImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numIvaImportador) && mb_strlen($numIvaImportador) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($numIvaImportador)), __LINE__);
        }
        $this->NumIvaImportador = $numIvaImportador;
        return $this;
    }
    /**
     * Get CodImportador value
     * @return string|null
     */
    public function getCodImportador()
    {
        return $this->CodImportador;
    }
    /**
     * Set CodImportador value
     * @param string $codImportador
     * @return ADUANATYPE
     */
    public function setCodImportador($codImportador = null)
    {
        // validation for constraint: string
        if (!is_null($codImportador) && !is_string($codImportador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codImportador, true), gettype($codImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($codImportador) && mb_strlen($codImportador) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($codImportador)), __LINE__);
        }
        $this->CodImportador = $codImportador;
        return $this;
    }
    /**
     * Get NumTelefonoImportador value
     * @return string|null
     */
    public function getNumTelefonoImportador()
    {
        return $this->NumTelefonoImportador;
    }
    /**
     * Set NumTelefonoImportador value
     * @param string $numTelefonoImportador
     * @return ADUANATYPE
     */
    public function setNumTelefonoImportador($numTelefonoImportador = null)
    {
        // validation for constraint: string
        if (!is_null($numTelefonoImportador) && !is_string($numTelefonoImportador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numTelefonoImportador, true), gettype($numTelefonoImportador)), __LINE__);
        }
        // validation for constraint: maxLength(26)
        if (!is_null($numTelefonoImportador) && mb_strlen($numTelefonoImportador) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 26', mb_strlen($numTelefonoImportador)), __LINE__);
        }
        $this->NumTelefonoImportador = $numTelefonoImportador;
        return $this;
    }
    /**
     * Get DesEmailImportador value
     * @return string|null
     */
    public function getDesEmailImportador()
    {
        return $this->DesEmailImportador;
    }
    /**
     * Set DesEmailImportador value
     * @param string $desEmailImportador
     * @return ADUANATYPE
     */
    public function setDesEmailImportador($desEmailImportador = null)
    {
        // validation for constraint: string
        if (!is_null($desEmailImportador) && !is_string($desEmailImportador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desEmailImportador, true), gettype($desEmailImportador)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($desEmailImportador) && mb_strlen($desEmailImportador) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($desEmailImportador)), __LINE__);
        }
        $this->DesEmailImportador = $desEmailImportador;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ADUANATYPE
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
