<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\AdmisionHomepaq;
use CorreosSdk\EnumType\ModalidadEntrega;
use CorreosSdk\EnumType\ModDevEtiqueta;
use CorreosSdk\EnumType\NotificacionBulto;
use CorreosSdk\EnumType\TipoFranqueo;


/**
 * This class stands for PreregistroEnvioMultibulto StructType
 * @subpackage Structs
 */
class PreregistroEnvioMultibulto extends AbstractStructBase
{
    /**
     * The FechaOperacion
     * Meta informations extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string
     */
    public $FechaOperacion;
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
     * The NumContrato
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumContrato
     * @var string
     */
    public $NumContrato;
    /**
     * The NumCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumCliente
     * @var string
     */
    public $NumCliente;
    /**
     * The Care
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Care
     * @var string
     */
    public $Care;
    /**
     * The TotalBultos
     * Meta informations extracted from the WSDL
     * - ref: xsd:TotalBultos
     * @var int
     */
    public $TotalBultos;
    /**
     * The ModDevEtiqueta
     * Meta informations extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string
     */
    public $ModDevEtiqueta;
    /**
     * The Remitente
     * Meta informations extracted from the WSDL
     * - ref: xsd:Remitente
     * @var DATOSREMITENTETYPE
     */
    public $Remitente;
    /**
     * The Destinatario
     * Meta informations extracted from the WSDL
     * - ref: xsd:Destinatario
     * @var DATOSDESTINATARIOTYPE
     */
    public $Destinatario;
    /**
     * The Envios
     * Meta informations extracted from the WSDL
     * - ref: xsd:Envios
     * @var Envios
     */
    public $Envios;
    /**
     * The EntregaParcial
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaParcial
     * @var string
     */
    public $EntregaParcial;
    /**
     * The CodExpedicion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minOccurs: 0
     * - ref: xsd:CodExpedicion
     * @var string
     */
    public $CodExpedicion;
    /**
     * The CodManifiesto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - minOccurs: 0
     * - ref: xsd:CodManifiesto
     * @var string
     */
    public $CodManifiesto;
    /**
     * The CodProducto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string
     */
    public $CodProducto;
    /**
     * The ReferenciaExpedicion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:ReferenciaExpedicion
     * @var string
     */
    public $ReferenciaExpedicion;
    /**
     * The ValoresAnadidos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var VATYPE
     */
    public $ValoresAnadidos;
    /**
     * The NotificacionBulto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NotificacionBulto
     * @var string
     */
    public $NotificacionBulto;
    /**
     * The ModalidadEntrega
     * Meta informations extracted from the WSDL
     * - ref: xsd:ModalidadEntrega
     * @var string
     */
    public $ModalidadEntrega;
    /**
     * The OficinaElegida
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:OficinaElegida
     * @var string
     */
    public $OficinaElegida;
    /**
     * The CodigoHomepaq
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minOccurs: 0
     * - ref: xsd:CodigoHomepaq
     * @var string
     */
    public $CodigoHomepaq;
    /**
     * The AdmisionHomepaq
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AdmisionHomepaq
     * @var string
     */
    public $AdmisionHomepaq;
    /**
     * The TipoFranqueo
     * Meta informations extracted from the WSDL
     * - ref: xsd:TipoFranqueo
     * @var string
     */
    public $TipoFranqueo;
    /**
     * The NumMaquinaFranquear
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumMaquinaFranquear
     * @var string
     */
    public $NumMaquinaFranquear;
    /**
     * The ImporteFranqueado
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteFranqueado
     * @var string
     */
    public $ImporteFranqueado;
    /**
     * Constructor method for PreregistroEnvioMultibulto
     * @uses PreregistroEnvioMultibulto::setFechaOperacion()
     * @uses PreregistroEnvioMultibulto::setCodEtiquetador()
     * @uses PreregistroEnvioMultibulto::setNumContrato()
     * @uses PreregistroEnvioMultibulto::setNumCliente()
     * @uses PreregistroEnvioMultibulto::setCare()
     * @uses PreregistroEnvioMultibulto::setTotalBultos()
     * @uses PreregistroEnvioMultibulto::setModDevEtiqueta()
     * @uses PreregistroEnvioMultibulto::setRemitente()
     * @uses PreregistroEnvioMultibulto::setDestinatario()
     * @uses PreregistroEnvioMultibulto::setEnvios()
     * @uses PreregistroEnvioMultibulto::setEntregaParcial()
     * @uses PreregistroEnvioMultibulto::setCodExpedicion()
     * @uses PreregistroEnvioMultibulto::setCodManifiesto()
     * @uses PreregistroEnvioMultibulto::setCodProducto()
     * @uses PreregistroEnvioMultibulto::setReferenciaExpedicion()
     * @uses PreregistroEnvioMultibulto::setValoresAnadidos()
     * @uses PreregistroEnvioMultibulto::setNotificacionBulto()
     * @uses PreregistroEnvioMultibulto::setModalidadEntrega()
     * @uses PreregistroEnvioMultibulto::setOficinaElegida()
     * @uses PreregistroEnvioMultibulto::setCodigoHomepaq()
     * @uses PreregistroEnvioMultibulto::setAdmisionHomepaq()
     * @uses PreregistroEnvioMultibulto::setTipoFranqueo()
     * @uses PreregistroEnvioMultibulto::setNumMaquinaFranquear()
     * @uses PreregistroEnvioMultibulto::setImporteFranqueado()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param DATOSREMITENTETYPE $remitente
     * @param DATOSDESTINATARIOTYPE $destinatario
     * @param Envios $envios
     * @param string $entregaParcial
     * @param string $codExpedicion
     * @param string $codManifiesto
     * @param string $codProducto
     * @param string $referenciaExpedicion
     * @param VATYPE $valoresAnadidos
     * @param string $notificacionBulto
     * @param string $modalidadEntrega
     * @param string $oficinaElegida
     * @param string $codigoHomepaq
     * @param string $admisionHomepaq
     * @param string $tipoFranqueo
     * @param string $numMaquinaFranquear
     * @param string $importeFranqueado
     */
    public function __construct(
        $fechaOperacion = null,
        $codEtiquetador = null,
        $numContrato = null,
        $numCliente = null,
        $care = null,
        $totalBultos = null,
        $modDevEtiqueta = null,
        DATOSREMITENTETYPE $remitente = null,
        DATOSDESTINATARIOTYPE $destinatario = null,
        Envios $envios = null,
        $entregaParcial = null,
        $codExpedicion = null,
        $codManifiesto = null,
        $codProducto = null,
        $referenciaExpedicion = null,
        VATYPE $valoresAnadidos = null,
        $notificacionBulto = null,
        $modalidadEntrega = null,
        $oficinaElegida = null,
        $codigoHomepaq = null,
        $admisionHomepaq = null,
        $tipoFranqueo = null,
        $numMaquinaFranquear = null,
        $importeFranqueado = null
    ) {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitente($remitente)
            ->setDestinatario($destinatario)
            ->setEnvios($envios)
            ->setEntregaParcial($entregaParcial)
            ->setCodExpedicion($codExpedicion)
            ->setCodManifiesto($codManifiesto)
            ->setCodProducto($codProducto)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setValoresAnadidos($valoresAnadidos)
            ->setNotificacionBulto($notificacionBulto)
            ->setModalidadEntrega($modalidadEntrega)
            ->setOficinaElegida($oficinaElegida)
            ->setCodigoHomepaq($codigoHomepaq)
            ->setAdmisionHomepaq($admisionHomepaq)
            ->setTipoFranqueo($tipoFranqueo)
            ->setNumMaquinaFranquear($numMaquinaFranquear)
            ->setImporteFranqueado($importeFranqueado);
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion()
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return PreregistroEnvioMultibulto
     */
    public function setFechaOperacion($fechaOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
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
     * @return PreregistroEnvioMultibulto
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
     * @return PreregistroEnvioMultibulto
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
     * @return PreregistroEnvioMultibulto
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
     * Get Care value
     * @return string|null
     */
    public function getCare()
    {
        return $this->Care;
    }
    /**
     * Set Care value
     * @param string $care
     * @return PreregistroEnvioMultibulto
     */
    public function setCare($care = null)
    {
        // validation for constraint: string
        if (!is_null($care) && !is_string($care)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($care, true), gettype($care)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($care) && mb_strlen($care) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($care)), __LINE__);
        }
        $this->Care = $care;
        return $this;
    }
    /**
     * Get TotalBultos value
     * @return int|null
     */
    public function getTotalBultos()
    {
        return $this->TotalBultos;
    }
    /**
     * Set TotalBultos value
     * @param int $totalBultos
     * @return PreregistroEnvioMultibulto
     */
    public function setTotalBultos($totalBultos = null)
    {
        // validation for constraint: int
        if (!is_null($totalBultos) && !(is_int($totalBultos) || ctype_digit($totalBultos))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBultos, true), gettype($totalBultos)), __LINE__);
        }
        $this->TotalBultos = $totalBultos;
        return $this;
    }
    /**
     * Get ModDevEtiqueta value
     * @return string|null
     */
    public function getModDevEtiqueta()
    {
        return $this->ModDevEtiqueta;
    }
    /**
     * Set ModDevEtiqueta value
     * @uses ModDevEtiqueta::valueIsValid()
     * @uses ModDevEtiqueta::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modDevEtiqueta
     * @return PreregistroEnvioMultibulto
     */
    public function setModDevEtiqueta($modDevEtiqueta = null)
    {
        // validation for constraint: enumeration
        if (!ModDevEtiqueta::valueIsValid($modDevEtiqueta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class ModDevEtiqueta', is_array($modDevEtiqueta) ? implode(', ', $modDevEtiqueta) : var_export($modDevEtiqueta, true), implode(', ', ModDevEtiqueta::getValidValues())), __LINE__);
        }
        $this->ModDevEtiqueta = $modDevEtiqueta;
        return $this;
    }
    /**
     * Get Remitente value
     * @return DATOSREMITENTETYPE|null
     */
    public function getRemitente()
    {
        return $this->Remitente;
    }
    /**
     * Set Remitente value
     * @param DATOSREMITENTETYPE $remitente
     * @return PreregistroEnvioMultibulto
     */
    public function setRemitente(DATOSREMITENTETYPE $remitente = null)
    {
        $this->Remitente = $remitente;
        return $this;
    }
    /**
     * Get Destinatario value
     * @return DATOSDESTINATARIOTYPE|null
     */
    public function getDestinatario()
    {
        return $this->Destinatario;
    }
    /**
     * Set Destinatario value
     * @param DATOSDESTINATARIOTYPE $destinatario
     * @return PreregistroEnvioMultibulto
     */
    public function setDestinatario(DATOSDESTINATARIOTYPE $destinatario = null)
    {
        $this->Destinatario = $destinatario;
        return $this;
    }
    /**
     * Get Envios value
     * @return Envios|null
     */
    public function getEnvios()
    {
        return $this->Envios;
    }
    /**
     * Set Envios value
     * @param Envios $envios
     * @return PreregistroEnvioMultibulto
     */
    public function setEnvios(Envios $envios = null)
    {
        $this->Envios = $envios;
        return $this;
    }
    /**
     * Get EntregaParcial value
     * @return string|null
     */
    public function getEntregaParcial()
    {
        return $this->EntregaParcial;
    }
    /**
     * Set EntregaParcial value
     * @param string $entregaParcial
     * @return PreregistroEnvioMultibulto
     */
    public function setEntregaParcial($entregaParcial = null)
    {
        // validation for constraint: string
        if (!is_null($entregaParcial) && !is_string($entregaParcial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaParcial, true), gettype($entregaParcial)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaParcial) && mb_strlen($entregaParcial) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($entregaParcial)), __LINE__);
        }
        $this->EntregaParcial = $entregaParcial;
        return $this;
    }
    /**
     * Get CodExpedicion value
     * @return string|null
     */
    public function getCodExpedicion()
    {
        return $this->CodExpedicion;
    }
    /**
     * Set CodExpedicion value
     * @param string $codExpedicion
     * @return PreregistroEnvioMultibulto
     */
    public function setCodExpedicion($codExpedicion = null)
    {
        // validation for constraint: string
        if (!is_null($codExpedicion) && !is_string($codExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codExpedicion, true), gettype($codExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($codExpedicion) && mb_strlen($codExpedicion) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen($codExpedicion)), __LINE__);
        }
        $this->CodExpedicion = $codExpedicion;
        return $this;
    }
    /**
     * Get CodManifiesto value
     * @return string|null
     */
    public function getCodManifiesto()
    {
        return $this->CodManifiesto;
    }
    /**
     * Set CodManifiesto value
     * @param string $codManifiesto
     * @return PreregistroEnvioMultibulto
     */
    public function setCodManifiesto($codManifiesto = null)
    {
        // validation for constraint: string
        if (!is_null($codManifiesto) && !is_string($codManifiesto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codManifiesto, true), gettype($codManifiesto)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($codManifiesto) && mb_strlen($codManifiesto) > 24) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen($codManifiesto)), __LINE__);
        }
        $this->CodManifiesto = $codManifiesto;
        return $this;
    }
    /**
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto()
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return PreregistroEnvioMultibulto
     */
    public function setCodProducto($codProducto = null)
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen($codProducto) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        return $this;
    }
    /**
     * Get ReferenciaExpedicion value
     * @return string|null
     */
    public function getReferenciaExpedicion()
    {
        return $this->ReferenciaExpedicion;
    }
    /**
     * Set ReferenciaExpedicion value
     * @param string $referenciaExpedicion
     * @return PreregistroEnvioMultibulto
     */
    public function setReferenciaExpedicion($referenciaExpedicion = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaExpedicion) && !is_string($referenciaExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaExpedicion, true), gettype($referenciaExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referenciaExpedicion) && mb_strlen($referenciaExpedicion) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($referenciaExpedicion)), __LINE__);
        }
        $this->ReferenciaExpedicion = $referenciaExpedicion;
        return $this;
    }
    /**
     * Get ValoresAnadidos value
     * @return VATYPE|null
     */
    public function getValoresAnadidos()
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param VATYPE $valoresAnadidos
     * @return PreregistroEnvioMultibulto
     */
    public function setValoresAnadidos(VATYPE $valoresAnadidos = null)
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        return $this;
    }
    /**
     * Get NotificacionBulto value
     * @return string|null
     */
    public function getNotificacionBulto()
    {
        return $this->NotificacionBulto;
    }
    /**
     * Set NotificacionBulto value
     * @uses NotificacionBulto::valueIsValid()
     * @uses NotificacionBulto::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificacionBulto
     * @return PreregistroEnvioMultibulto
     */
    public function setNotificacionBulto($notificacionBulto = null)
    {
        // validation for constraint: enumeration
        if (!NotificacionBulto::valueIsValid($notificacionBulto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class NotificacionBulto', is_array($notificacionBulto) ? implode(', ', $notificacionBulto) : var_export($notificacionBulto, true), implode(', ', NotificacionBulto::getValidValues())), __LINE__);
        }
        $this->NotificacionBulto = $notificacionBulto;
        return $this;
    }
    /**
     * Get ModalidadEntrega value
     * @return string|null
     */
    public function getModalidadEntrega()
    {
        return $this->ModalidadEntrega;
    }
    /**
     * Set ModalidadEntrega value
     * @uses ModalidadEntrega::valueIsValid()
     * @uses ModalidadEntrega::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modalidadEntrega
     * @return PreregistroEnvioMultibulto
     */
    public function setModalidadEntrega($modalidadEntrega = null)
    {
        // validation for constraint: enumeration
        if (!ModalidadEntrega::valueIsValid($modalidadEntrega)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class ModalidadEntrega', is_array($modalidadEntrega) ? implode(', ', $modalidadEntrega) : var_export($modalidadEntrega, true), implode(', ', ModalidadEntrega::getValidValues())), __LINE__);
        }
        $this->ModalidadEntrega = $modalidadEntrega;
        return $this;
    }
    /**
     * Get OficinaElegida value
     * @return string|null
     */
    public function getOficinaElegida()
    {
        return $this->OficinaElegida;
    }
    /**
     * Set OficinaElegida value
     * @param string $oficinaElegida
     * @return PreregistroEnvioMultibulto
     */
    public function setOficinaElegida($oficinaElegida = null)
    {
        // validation for constraint: string
        if (!is_null($oficinaElegida) && !is_string($oficinaElegida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaElegida, true), gettype($oficinaElegida)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($oficinaElegida) && mb_strlen($oficinaElegida) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen($oficinaElegida)), __LINE__);
        }
        $this->OficinaElegida = $oficinaElegida;
        return $this;
    }
    /**
     * Get CodigoHomepaq value
     * @return string|null
     */
    public function getCodigoHomepaq()
    {
        return $this->CodigoHomepaq;
    }
    /**
     * Set CodigoHomepaq value
     * @param string $codigoHomepaq
     * @return PreregistroEnvioMultibulto
     */
    public function setCodigoHomepaq($codigoHomepaq = null)
    {
        // validation for constraint: string
        if (!is_null($codigoHomepaq) && !is_string($codigoHomepaq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoHomepaq, true), gettype($codigoHomepaq)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoHomepaq) && mb_strlen($codigoHomepaq) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen($codigoHomepaq)), __LINE__);
        }
        $this->CodigoHomepaq = $codigoHomepaq;
        return $this;
    }
    /**
     * Get AdmisionHomepaq value
     * @return string|null
     */
    public function getAdmisionHomepaq()
    {
        return $this->AdmisionHomepaq;
    }
    /**
     * Set AdmisionHomepaq value
     * @uses AdmisionHomepaq::valueIsValid()
     * @uses AdmisionHomepaq::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $admisionHomepaq
     * @return PreregistroEnvioMultibulto
     */
    public function setAdmisionHomepaq($admisionHomepaq = null)
    {
        // validation for constraint: enumeration
        if (!AdmisionHomepaq::valueIsValid($admisionHomepaq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class AdmisionHomepaq', is_array($admisionHomepaq) ? implode(', ', $admisionHomepaq) : var_export($admisionHomepaq, true), implode(', ', AdmisionHomepaq::getValidValues())), __LINE__);
        }
        $this->AdmisionHomepaq = $admisionHomepaq;
        return $this;
    }
    /**
     * Get TipoFranqueo value
     * @return string|null
     */
    public function getTipoFranqueo()
    {
        return $this->TipoFranqueo;
    }
    /**
     * Set TipoFranqueo value
     * @uses TipoFranqueo::valueIsValid()
     * @uses TipoFranqueo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoFranqueo
     * @return PreregistroEnvioMultibulto
     */
    public function setTipoFranqueo($tipoFranqueo = null)
    {
        // validation for constraint: enumeration
        if (!TipoFranqueo::valueIsValid($tipoFranqueo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoFranqueo', is_array($tipoFranqueo) ? implode(', ', $tipoFranqueo) : var_export($tipoFranqueo, true), implode(', ', TipoFranqueo::getValidValues())), __LINE__);
        }
        $this->TipoFranqueo = $tipoFranqueo;
        return $this;
    }
    /**
     * Get NumMaquinaFranquear value
     * @return string|null
     */
    public function getNumMaquinaFranquear()
    {
        return $this->NumMaquinaFranquear;
    }
    /**
     * Set NumMaquinaFranquear value
     * @param string $numMaquinaFranquear
     * @return PreregistroEnvioMultibulto
     */
    public function setNumMaquinaFranquear($numMaquinaFranquear = null)
    {
        // validation for constraint: string
        if (!is_null($numMaquinaFranquear) && !is_string($numMaquinaFranquear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numMaquinaFranquear, true), gettype($numMaquinaFranquear)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numMaquinaFranquear) && mb_strlen($numMaquinaFranquear) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($numMaquinaFranquear)), __LINE__);
        }
        $this->NumMaquinaFranquear = $numMaquinaFranquear;
        return $this;
    }
    /**
     * Get ImporteFranqueado value
     * @return string|null
     */
    public function getImporteFranqueado()
    {
        return $this->ImporteFranqueado;
    }
    /**
     * Set ImporteFranqueado value
     * @param string $importeFranqueado
     * @return PreregistroEnvioMultibulto
     */
    public function setImporteFranqueado($importeFranqueado = null)
    {
        // validation for constraint: string
        if (!is_null($importeFranqueado) && !is_string($importeFranqueado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeFranqueado, true), gettype($importeFranqueado)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeFranqueado) && mb_strlen($importeFranqueado) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($importeFranqueado)), __LINE__);
        }
        $this->ImporteFranqueado = $importeFranqueado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PreregistroEnvioMultibulto
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
