<?php

namespace CorreosSdk\StructType;



/**
 * This class stands for DATOSLOGISTICAINVERSATYPE StructType
 * @subpackage Structs
 */
class DATOSLOGISTICAINVERSATYPE extends AbstractStructBase
{
    /**
     * The DatosAdicRemitente
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DIRECCIONADICIPCTYPE
     */
    public $DatosAdicRemitente;
    /**
     * The DatosAdicDestinatario
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DIRECCIONADICIPCTYPE
     */
    public $DatosAdicDestinatario;
    /**
     * The DireccionPostal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DIRECCIONIPCTYPE
     */
    public $DireccionPostal;
    /**
     * The OficinaIntercambioDestino
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:OficinaIntercambioDestino
     * @var string
     */
    public $OficinaIntercambioDestino;
    /**
     * The ReferenciaClienteIPC
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 0
     * - ref: xsd:ReferenciaClienteIPC
     * @var string
     */
    public $ReferenciaClienteIPC;
    /**
     * The DireccionImportador
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DIRECCIONIPCTYPE
     */
    public $DireccionImportador;
    /**
     * The ImportadorReferencia
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:ImportadorReferencia
     * @var string
     */
    public $ImportadorReferencia;
    /**
     * The ImportadorNumeroFax
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:ImportadorNumeroFax
     * @var string
     */
    public $ImportadorNumeroFax;
    /**
     * The DireccionRepresentanteAceptante
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var DIRECCIONIPCTYPE
     */
    public $DireccionRepresentanteAceptante;
    /**
     * The RepresentanteAceptanteNumeroVAT
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:RepresentanteAceptanteNumeroVAT
     * @var string
     */
    public $RepresentanteAceptanteNumeroVAT;
    /**
     * The Aduana
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var ADUANAIPCTYPE
     */
    public $Aduana;
    /**
     * The RazonDevolucion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:RazonDevolucion
     * @var string
     */
    public $RazonDevolucion;
    /**
     * The Personalizados
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var PERSONALIZADOSTYPE
     */
    public $Personalizados;
    /**
     * The Recogido
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Recogido
     * @var string
     */
    public $Recogido;
    /**
     * Constructor method for DATOSLOGISTICAINVERSATYPE
     * @uses DATOSLOGISTICAINVERSATYPE::setDatosAdicRemitente()
     * @uses DATOSLOGISTICAINVERSATYPE::setDatosAdicDestinatario()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionPostal()
     * @uses DATOSLOGISTICAINVERSATYPE::setOficinaIntercambioDestino()
     * @uses DATOSLOGISTICAINVERSATYPE::setReferenciaClienteIPC()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionImportador()
     * @uses DATOSLOGISTICAINVERSATYPE::setImportadorReferencia()
     * @uses DATOSLOGISTICAINVERSATYPE::setImportadorNumeroFax()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionRepresentanteAceptante()
     * @uses DATOSLOGISTICAINVERSATYPE::setRepresentanteAceptanteNumeroVAT()
     * @uses DATOSLOGISTICAINVERSATYPE::setAduana()
     * @uses DATOSLOGISTICAINVERSATYPE::setRazonDevolucion()
     * @uses DATOSLOGISTICAINVERSATYPE::setPersonalizados()
     * @uses DATOSLOGISTICAINVERSATYPE::setRecogido()
     * @param DIRECCIONADICIPCTYPE $datosAdicRemitente
     * @param DIRECCIONADICIPCTYPE $datosAdicDestinatario
     * @param DIRECCIONIPCTYPE $direccionPostal
     * @param string $oficinaIntercambioDestino
     * @param string $referenciaClienteIPC
     * @param DIRECCIONIPCTYPE $direccionImportador
     * @param string $importadorReferencia
     * @param string $importadorNumeroFax
     * @param DIRECCIONIPCTYPE $direccionRepresentanteAceptante
     * @param string $representanteAceptanteNumeroVAT
     * @param ADUANAIPCTYPE $aduana
     * @param string $razonDevolucion
     * @param PERSONALIZADOSTYPE $personalizados
     * @param string $recogido
     */
    public function __construct(DIRECCIONADICIPCTYPE $datosAdicRemitente = null, DIRECCIONADICIPCTYPE $datosAdicDestinatario = null, DIRECCIONIPCTYPE $direccionPostal = null, $oficinaIntercambioDestino = null, $referenciaClienteIPC = null, DIRECCIONIPCTYPE $direccionImportador = null, $importadorReferencia = null, $importadorNumeroFax = null, DIRECCIONIPCTYPE $direccionRepresentanteAceptante = null, $representanteAceptanteNumeroVAT = null, ADUANAIPCTYPE $aduana = null, $razonDevolucion = null, PERSONALIZADOSTYPE $personalizados = null, $recogido = null)
    {
        $this
            ->setDatosAdicRemitente($datosAdicRemitente)
            ->setDatosAdicDestinatario($datosAdicDestinatario)
            ->setDireccionPostal($direccionPostal)
            ->setOficinaIntercambioDestino($oficinaIntercambioDestino)
            ->setReferenciaClienteIPC($referenciaClienteIPC)
            ->setDireccionImportador($direccionImportador)
            ->setImportadorReferencia($importadorReferencia)
            ->setImportadorNumeroFax($importadorNumeroFax)
            ->setDireccionRepresentanteAceptante($direccionRepresentanteAceptante)
            ->setRepresentanteAceptanteNumeroVAT($representanteAceptanteNumeroVAT)
            ->setAduana($aduana)
            ->setRazonDevolucion($razonDevolucion)
            ->setPersonalizados($personalizados)
            ->setRecogido($recogido);
    }
    /**
     * Get DatosAdicRemitente value
     * @return DIRECCIONADICIPCTYPE|null
     */
    public function getDatosAdicRemitente()
    {
        return $this->DatosAdicRemitente;
    }
    /**
     * Set DatosAdicRemitente value
     * @param DIRECCIONADICIPCTYPE $datosAdicRemitente
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setDatosAdicRemitente(DIRECCIONADICIPCTYPE $datosAdicRemitente = null)
    {
        $this->DatosAdicRemitente = $datosAdicRemitente;
        return $this;
    }
    /**
     * Get DatosAdicDestinatario value
     * @return DIRECCIONADICIPCTYPE|null
     */
    public function getDatosAdicDestinatario()
    {
        return $this->DatosAdicDestinatario;
    }
    /**
     * Set DatosAdicDestinatario value
     * @param DIRECCIONADICIPCTYPE $datosAdicDestinatario
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setDatosAdicDestinatario(DIRECCIONADICIPCTYPE $datosAdicDestinatario = null)
    {
        $this->DatosAdicDestinatario = $datosAdicDestinatario;
        return $this;
    }
    /**
     * Get DireccionPostal value
     * @return DIRECCIONIPCTYPE|null
     */
    public function getDireccionPostal()
    {
        return $this->DireccionPostal;
    }
    /**
     * Set DireccionPostal value
     * @param DIRECCIONIPCTYPE $direccionPostal
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionPostal(DIRECCIONIPCTYPE $direccionPostal = null)
    {
        $this->DireccionPostal = $direccionPostal;
        return $this;
    }
    /**
     * Get OficinaIntercambioDestino value
     * @return string|null
     */
    public function getOficinaIntercambioDestino()
    {
        return $this->OficinaIntercambioDestino;
    }
    /**
     * Set OficinaIntercambioDestino value
     * @param string $oficinaIntercambioDestino
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setOficinaIntercambioDestino($oficinaIntercambioDestino = null)
    {
        // validation for constraint: string
        if (!is_null($oficinaIntercambioDestino) && !is_string($oficinaIntercambioDestino)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaIntercambioDestino, true), gettype($oficinaIntercambioDestino)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($oficinaIntercambioDestino) && mb_strlen($oficinaIntercambioDestino) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($oficinaIntercambioDestino)), __LINE__);
        }
        $this->OficinaIntercambioDestino = $oficinaIntercambioDestino;
        return $this;
    }
    /**
     * Get ReferenciaClienteIPC value
     * @return string|null
     */
    public function getReferenciaClienteIPC()
    {
        return $this->ReferenciaClienteIPC;
    }
    /**
     * Set ReferenciaClienteIPC value
     * @param string $referenciaClienteIPC
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setReferenciaClienteIPC($referenciaClienteIPC = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaClienteIPC) && !is_string($referenciaClienteIPC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaClienteIPC, true), gettype($referenciaClienteIPC)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referenciaClienteIPC) && mb_strlen($referenciaClienteIPC) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($referenciaClienteIPC)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($referenciaClienteIPC) && mb_strlen($referenciaClienteIPC) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($referenciaClienteIPC)), __LINE__);
        }
        $this->ReferenciaClienteIPC = $referenciaClienteIPC;
        return $this;
    }
    /**
     * Get DireccionImportador value
     * @return DIRECCIONIPCTYPE|null
     */
    public function getDireccionImportador()
    {
        return $this->DireccionImportador;
    }
    /**
     * Set DireccionImportador value
     * @param DIRECCIONIPCTYPE $direccionImportador
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionImportador(DIRECCIONIPCTYPE $direccionImportador = null)
    {
        $this->DireccionImportador = $direccionImportador;
        return $this;
    }
    /**
     * Get ImportadorReferencia value
     * @return string|null
     */
    public function getImportadorReferencia()
    {
        return $this->ImportadorReferencia;
    }
    /**
     * Set ImportadorReferencia value
     * @param string $importadorReferencia
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setImportadorReferencia($importadorReferencia = null)
    {
        // validation for constraint: string
        if (!is_null($importadorReferencia) && !is_string($importadorReferencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importadorReferencia, true), gettype($importadorReferencia)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($importadorReferencia) && mb_strlen($importadorReferencia) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($importadorReferencia)), __LINE__);
        }
        $this->ImportadorReferencia = $importadorReferencia;
        return $this;
    }
    /**
     * Get ImportadorNumeroFax value
     * @return string|null
     */
    public function getImportadorNumeroFax()
    {
        return $this->ImportadorNumeroFax;
    }
    /**
     * Set ImportadorNumeroFax value
     * @param string $importadorNumeroFax
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setImportadorNumeroFax($importadorNumeroFax = null)
    {
        // validation for constraint: string
        if (!is_null($importadorNumeroFax) && !is_string($importadorNumeroFax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importadorNumeroFax, true), gettype($importadorNumeroFax)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($importadorNumeroFax) && mb_strlen($importadorNumeroFax) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($importadorNumeroFax)), __LINE__);
        }
        $this->ImportadorNumeroFax = $importadorNumeroFax;
        return $this;
    }
    /**
     * Get DireccionRepresentanteAceptante value
     * @return DIRECCIONIPCTYPE|null
     */
    public function getDireccionRepresentanteAceptante()
    {
        return $this->DireccionRepresentanteAceptante;
    }
    /**
     * Set DireccionRepresentanteAceptante value
     * @param DIRECCIONIPCTYPE $direccionRepresentanteAceptante
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionRepresentanteAceptante(DIRECCIONIPCTYPE $direccionRepresentanteAceptante = null)
    {
        $this->DireccionRepresentanteAceptante = $direccionRepresentanteAceptante;
        return $this;
    }
    /**
     * Get RepresentanteAceptanteNumeroVAT value
     * @return string|null
     */
    public function getRepresentanteAceptanteNumeroVAT()
    {
        return $this->RepresentanteAceptanteNumeroVAT;
    }
    /**
     * Set RepresentanteAceptanteNumeroVAT value
     * @param string $representanteAceptanteNumeroVAT
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setRepresentanteAceptanteNumeroVAT($representanteAceptanteNumeroVAT = null)
    {
        // validation for constraint: string
        if (!is_null($representanteAceptanteNumeroVAT) && !is_string($representanteAceptanteNumeroVAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($representanteAceptanteNumeroVAT, true), gettype($representanteAceptanteNumeroVAT)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($representanteAceptanteNumeroVAT) && mb_strlen($representanteAceptanteNumeroVAT) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($representanteAceptanteNumeroVAT)), __LINE__);
        }
        $this->RepresentanteAceptanteNumeroVAT = $representanteAceptanteNumeroVAT;
        return $this;
    }
    /**
     * Get Aduana value
     * @return ADUANAIPCTYPE|null
     */
    public function getAduana()
    {
        return $this->Aduana;
    }
    /**
     * Set Aduana value
     * @param ADUANAIPCTYPE $aduana
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setAduana(ADUANAIPCTYPE $aduana = null)
    {
        $this->Aduana = $aduana;
        return $this;
    }
    /**
     * Get RazonDevolucion value
     * @return string|null
     */
    public function getRazonDevolucion()
    {
        return $this->RazonDevolucion;
    }
    /**
     * Set RazonDevolucion value
     * @param string $razonDevolucion
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setRazonDevolucion($razonDevolucion = null)
    {
        // validation for constraint: string
        if (!is_null($razonDevolucion) && !is_string($razonDevolucion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($razonDevolucion, true), gettype($razonDevolucion)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($razonDevolucion) && mb_strlen($razonDevolucion) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($razonDevolucion)), __LINE__);
        }
        $this->RazonDevolucion = $razonDevolucion;
        return $this;
    }
    /**
     * Get Personalizados value
     * @return PERSONALIZADOSTYPE|null
     */
    public function getPersonalizados()
    {
        return $this->Personalizados;
    }
    /**
     * Set Personalizados value
     * @param PERSONALIZADOSTYPE $personalizados
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setPersonalizados(PERSONALIZADOSTYPE $personalizados = null)
    {
        $this->Personalizados = $personalizados;
        return $this;
    }
    /**
     * Get Recogido value
     * @return string|null
     */
    public function getRecogido()
    {
        return $this->Recogido;
    }
    /**
     * Set Recogido value
     * @param string $recogido
     * @return DATOSLOGISTICAINVERSATYPE
     */
    public function setRecogido($recogido = null)
    {
        // validation for constraint: string
        if (!is_null($recogido) && !is_string($recogido)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recogido, true), gettype($recogido)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($recogido) && mb_strlen($recogido) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($recogido)), __LINE__);
        }
        $this->Recogido = $recogido;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSLOGISTICAINVERSATYPE
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
