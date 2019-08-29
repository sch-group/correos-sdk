<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for SolicitudDocumentacionAduanera StructType
 * @subpackage Structs
 */
class SolicitudDocumentacionAduanera extends AbstractStructBase
{
    /**
     * The TipoESAD
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:TipoESAD
     * @var string
     */
    public $TipoESAD;
    /**
     * The NumContrato
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - ref: xsd:NumContrato
     * @var string
     */
    public $NumContrato;
    /**
     * The NumCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - ref: xsd:NumCliente
     * @var string
     */
    public $NumCliente;
    /**
     * The CodEtiquetador
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:CodEtiquetador
     * @var string
     */
    public $CodEtiquetador;
    /**
     * The Provincia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - ref: xsd:Provincia
     * @var string
     */
    public $Provincia;
    /**
     * The PaisDestino
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - ref: xsd:PaisDestino
     * @var string
     */
    public $PaisDestino;
    /**
     * The NombreDestinatario
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - ref: xsd:NombreDestinatario
     * @var string
     */
    public $NombreDestinatario;
    /**
     * The NumeroEnvios
     * Meta informations extracted from the WSDL
     * - ref: xsd:NumeroEnvios
     * @var string
     */
    public $NumeroEnvios;
    /**
     * The LocalidadFirma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:LocalidadFirma
     * @var string
     */
    public $LocalidadFirma;
    /**
     * The FechaFirma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaFirma
     * @var string
     */
    public $FechaFirma;
    /**
     * The NifFirma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NifFirma
     * @var string
     */
    public $NifFirma;
    /**
     * The NombreFirma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NombreFirma
     * @var string
     */
    public $NombreFirma;
    /**
     * Constructor method for SolicitudDocumentacionAduanera
     * @uses SolicitudDocumentacionAduanera::setTipoESAD()
     * @uses SolicitudDocumentacionAduanera::setNumContrato()
     * @uses SolicitudDocumentacionAduanera::setNumCliente()
     * @uses SolicitudDocumentacionAduanera::setCodEtiquetador()
     * @uses SolicitudDocumentacionAduanera::setProvincia()
     * @uses SolicitudDocumentacionAduanera::setPaisDestino()
     * @uses SolicitudDocumentacionAduanera::setNombreDestinatario()
     * @uses SolicitudDocumentacionAduanera::setNumeroEnvios()
     * @uses SolicitudDocumentacionAduanera::setLocalidadFirma()
     * @uses SolicitudDocumentacionAduanera::setFechaFirma()
     * @uses SolicitudDocumentacionAduanera::setNifFirma()
     * @uses SolicitudDocumentacionAduanera::setNombreFirma()
     * @param string $tipoESAD
     * @param string $numContrato
     * @param string $numCliente
     * @param string $codEtiquetador
     * @param string $provincia
     * @param string $paisDestino
     * @param string $nombreDestinatario
     * @param string $numeroEnvios
     * @param string $localidadFirma
     * @param string $fechaFirma
     * @param string $nifFirma
     * @param string $nombreFirma
     */
    public function __construct(
        $tipoESAD = null,
        $numContrato = null,
        $numCliente = null,
        $codEtiquetador = null,
        $provincia = null,
        $paisDestino = null,
        $nombreDestinatario = null,
        $numeroEnvios = null,
        $localidadFirma = null,
        $fechaFirma = null,
        $nifFirma = null,
        $nombreFirma = null
    ) {
        $this
            ->setTipoESAD($tipoESAD)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCodEtiquetador($codEtiquetador)
            ->setProvincia($provincia)
            ->setPaisDestino($paisDestino)
            ->setNombreDestinatario($nombreDestinatario)
            ->setNumeroEnvios($numeroEnvios)
            ->setLocalidadFirma($localidadFirma)
            ->setFechaFirma($fechaFirma)
            ->setNifFirma($nifFirma)
            ->setNombreFirma($nombreFirma);
    }
    /**
     * Get TipoESAD value
     * @return string|null
     */
    public function getTipoESAD()
    {
        return $this->TipoESAD;
    }
    /**
     * Set TipoESAD value
     * @param string $tipoESAD
     * @return SolicitudDocumentacionAduanera
     */
    public function setTipoESAD($tipoESAD = null)
    {
        // validation for constraint: string
        if (!is_null($tipoESAD) && !is_string($tipoESAD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoESAD, true), gettype($tipoESAD)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($tipoESAD) && mb_strlen($tipoESAD) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen($tipoESAD)), __LINE__);
        }
        $this->TipoESAD = $tipoESAD;
        return $this;
    }
    /**
     * Get NumContrato value
     * @return string|null
     */
    public function getNumContrato()
    {
        return $this->NumContrato;
    }
    /**
     * Set NumContrato value
     * @param string $numContrato
     * @return SolicitudDocumentacionAduanera
     */
    public function setNumContrato($numContrato = null)
    {
        // validation for constraint: string
        if (!is_null($numContrato) && !is_string($numContrato)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numContrato, true), gettype($numContrato)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numContrato) && mb_strlen($numContrato) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numContrato)), __LINE__);
        }
        $this->NumContrato = $numContrato;
        return $this;
    }
    /**
     * Get NumCliente value
     * @return string|null
     */
    public function getNumCliente()
    {
        return $this->NumCliente;
    }
    /**
     * Set NumCliente value
     * @param string $numCliente
     * @return SolicitudDocumentacionAduanera
     */
    public function setNumCliente($numCliente = null)
    {
        // validation for constraint: string
        if (!is_null($numCliente) && !is_string($numCliente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCliente, true), gettype($numCliente)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numCliente) && mb_strlen($numCliente) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numCliente)), __LINE__);
        }
        $this->NumCliente = $numCliente;
        return $this;
    }
    /**
     * Get CodEtiquetador value
     * @return string|null
     */
    public function getCodEtiquetador()
    {
        return $this->CodEtiquetador;
    }
    /**
     * Set CodEtiquetador value
     * @param string $codEtiquetador
     * @return SolicitudDocumentacionAduanera
     */
    public function setCodEtiquetador($codEtiquetador = null)
    {
        // validation for constraint: string
        if (!is_null($codEtiquetador) && !is_string($codEtiquetador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEtiquetador, true), gettype($codEtiquetador)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($codEtiquetador) && mb_strlen($codEtiquetador) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen($codEtiquetador)), __LINE__);
        }
        $this->CodEtiquetador = $codEtiquetador;
        return $this;
    }
    /**
     * Get Provincia value
     * @return string|null
     */
    public function getProvincia()
    {
        return $this->Provincia;
    }
    /**
     * Set Provincia value
     * @param string $provincia
     * @return SolicitudDocumentacionAduanera
     */
    public function setProvincia($provincia = null)
    {
        // validation for constraint: string
        if (!is_null($provincia) && !is_string($provincia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($provincia) && mb_strlen($provincia) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($provincia)), __LINE__);
        }
        $this->Provincia = $provincia;
        return $this;
    }
    /**
     * Get PaisDestino value
     * @return string|null
     */
    public function getPaisDestino()
    {
        return $this->PaisDestino;
    }
    /**
     * Set PaisDestino value
     * @param string $paisDestino
     * @return SolicitudDocumentacionAduanera
     */
    public function setPaisDestino($paisDestino = null)
    {
        // validation for constraint: string
        if (!is_null($paisDestino) && !is_string($paisDestino)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paisDestino, true), gettype($paisDestino)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($paisDestino) && mb_strlen($paisDestino) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($paisDestino)), __LINE__);
        }
        $this->PaisDestino = $paisDestino;
        return $this;
    }
    /**
     * Get NombreDestinatario value
     * @return string|null
     */
    public function getNombreDestinatario()
    {
        return $this->NombreDestinatario;
    }
    /**
     * Set NombreDestinatario value
     * @param string $nombreDestinatario
     * @return SolicitudDocumentacionAduanera
     */
    public function setNombreDestinatario($nombreDestinatario = null)
    {
        // validation for constraint: string
        if (!is_null($nombreDestinatario) && !is_string($nombreDestinatario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDestinatario, true), gettype($nombreDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($nombreDestinatario) && mb_strlen($nombreDestinatario) > 300) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen($nombreDestinatario)), __LINE__);
        }
        $this->NombreDestinatario = $nombreDestinatario;
        return $this;
    }
    /**
     * Get NumeroEnvios value
     * @return string|null
     */
    public function getNumeroEnvios()
    {
        return $this->NumeroEnvios;
    }
    /**
     * Set NumeroEnvios value
     * @param string $numeroEnvios
     * @return SolicitudDocumentacionAduanera
     */
    public function setNumeroEnvios($numeroEnvios = null)
    {
        // validation for constraint: string
        if (!is_null($numeroEnvios) && !is_string($numeroEnvios)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroEnvios, true), gettype($numeroEnvios)), __LINE__);
        }
        $this->NumeroEnvios = $numeroEnvios;
        return $this;
    }
    /**
     * Get LocalidadFirma value
     * @return string|null
     */
    public function getLocalidadFirma()
    {
        return $this->LocalidadFirma;
    }
    /**
     * Set LocalidadFirma value
     * @param string $localidadFirma
     * @return SolicitudDocumentacionAduanera
     */
    public function setLocalidadFirma($localidadFirma = null)
    {
        // validation for constraint: string
        if (!is_null($localidadFirma) && !is_string($localidadFirma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidadFirma, true), gettype($localidadFirma)), __LINE__);
        }
        $this->LocalidadFirma = $localidadFirma;
        return $this;
    }
    /**
     * Get FechaFirma value
     * @return string|null
     */
    public function getFechaFirma()
    {
        return $this->FechaFirma;
    }
    /**
     * Set FechaFirma value
     * @param string $fechaFirma
     * @return SolicitudDocumentacionAduanera
     */
    public function setFechaFirma($fechaFirma = null)
    {
        // validation for constraint: string
        if (!is_null($fechaFirma) && !is_string($fechaFirma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaFirma, true), gettype($fechaFirma)), __LINE__);
        }
        $this->FechaFirma = $fechaFirma;
        return $this;
    }
    /**
     * Get NifFirma value
     * @return string|null
     */
    public function getNifFirma()
    {
        return $this->NifFirma;
    }
    /**
     * Set NifFirma value
     * @param string $nifFirma
     * @return SolicitudDocumentacionAduanera
     */
    public function setNifFirma($nifFirma = null)
    {
        // validation for constraint: string
        if (!is_null($nifFirma) && !is_string($nifFirma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nifFirma, true), gettype($nifFirma)), __LINE__);
        }
        $this->NifFirma = $nifFirma;
        return $this;
    }
    /**
     * Get NombreFirma value
     * @return string|null
     */
    public function getNombreFirma()
    {
        return $this->NombreFirma;
    }
    /**
     * Set NombreFirma value
     * @param string $nombreFirma
     * @return SolicitudDocumentacionAduanera
     */
    public function setNombreFirma($nombreFirma = null)
    {
        // validation for constraint: string
        if (!is_null($nombreFirma) && !is_string($nombreFirma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreFirma, true), gettype($nombreFirma)), __LINE__);
        }
        $this->NombreFirma = $nombreFirma;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return SolicitudDocumentacionAduanera
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
