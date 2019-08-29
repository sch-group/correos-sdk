<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\AdmisionHomepaq;
use CorreosSdk\EnumType\InstruccionesDevolucion;
use CorreosSdk\EnumType\ModalidadEntrega;
use CorreosSdk\EnumType\TipoModificacion;
use CorreosSdkAdmisionHomepaq;
use CorreosSdkInstruccionesDevolucion;
use CorreosSdkModalidadEntrega;
use CorreosSdkTipoModificacion;


/**
 * This class stands for DATOSENVIOTYPE StructType
 * @subpackage Structs
 */
class DATOSENVIOTYPE extends DATOSENVIOREDUCIDOTYPE
{
    /**
     * The CodPromocion
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:CodPromocion
     * @var string
     */
    public $CodPromocion;
    /**
     * The ModalidadEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The Largo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Largo
     * @var int
     */
    public $Largo;
    /**
     * The Alto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Alto
     * @var int
     */
    public $Alto;
    /**
     * The Ancho
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Ancho
     * @var int
     */
    public $Ancho;
    /**
     * The ValoresAnadidos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var VATYPE
     */
    public $ValoresAnadidos;
    /**
     * The CodigoEmbalajePrepago
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodigoEmbalajePrepago
     * @var string
     */
    public $CodigoEmbalajePrepago;
    /**
     * The CodigoPuntoAdmision
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:CodigoPuntoAdmision
     * @var string
     */
    public $CodigoPuntoAdmision;
    /**
     * The FechaDepositoPrevista
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaDepositoPrevista
     * @var string
     */
    public $FechaDepositoPrevista;
    /**
     * The Observaciones1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 45
     * - minOccurs: 0
     * - ref: xsd:Observaciones1
     * @var string
     */
    public $Observaciones1;
    /**
     * The Observaciones2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 45
     * - minOccurs: 0
     * - ref: xsd:Observaciones2
     * @var string
     */
    public $Observaciones2;
    /**
     * The InstruccionesDevolucion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:InstruccionesDevolucion
     * @var string
     */
    public $InstruccionesDevolucion;
    /**
     * The Aduana
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Aduana
     * @var ADUANATYPE
     */
    public $Aduana;
    /**
     * The CodigoIda
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodigoIda
     * @var string
     */
    public $CodigoIda;
    /**
     * The PermiteEmbalaje
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:PermiteEmbalaje
     * @var string
     */
    public $PermiteEmbalaje;
    /**
     * The FechaCaducidad
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaCaducidad
     * @var string
     */
    public $FechaCaducidad;
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
     * The ToquenIdCorPaq
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:ToquenIdCorPaq
     * @var string
     */
    public $ToquenIdCorPaq;
    /**
     * The AdmisionHomepaq
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AdmisionHomepaq
     * @var string
     */
    public $AdmisionHomepaq;
    /**
     * The Documento1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento1
     * @var string
     */
    public $Documento1;
    /**
     * The AccDocumento1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento1
     * @var string
     */
    public $AccDocumento1;
    /**
     * The ObsDocumento1
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento1
     * @var string
     */
    public $ObsDocumento1;
    /**
     * The Documento2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento2
     * @var string
     */
    public $Documento2;
    /**
     * The AccDocumento2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento2
     * @var string
     */
    public $AccDocumento2;
    /**
     * The ObsDocumento2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento2
     * @var string
     */
    public $ObsDocumento2;
    /**
     * The Documento3
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento3
     * @var string
     */
    public $Documento3;
    /**
     * The AccDocumento3
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento3
     * @var string
     */
    public $AccDocumento3;
    /**
     * The ObsDocumento3
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento3
     * @var string
     */
    public $ObsDocumento3;
    /**
     * The OperadorPostal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:OperadorPostal
     * @var string
     */
    public $OperadorPostal;
    /**
     * The CodigoEnvioOriginal
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:CodigoEnvioOriginal
     * @var string
     */
    public $CodigoEnvioOriginal;
    /**
     * The ExisteEnvioVueltaLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:ExisteEnvioVueltaLI
     * @var string
     */
    public $ExisteEnvioVueltaLI;
    /**
     * The SeguroLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:SeguroLI
     * @var string
     */
    public $SeguroLI;
    /**
     * The ImporteSeguroLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteSeguroLI
     * @var string
     */
    public $ImporteSeguroLI;
    /**
     * The ReembolsoLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:ReembolsoLI
     * @var string
     */
    public $ReembolsoLI;
    /**
     * The ImporteReembolsoLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteReembolsoLI
     * @var string
     */
    public $ImporteReembolsoLI;
    /**
     * The TipoReembolsoLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:TipoReembolsoLI
     * @var string
     */
    public $TipoReembolsoLI;
    /**
     * The NumeroCuentaLI
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:NumeroCuentaLI
     * @var string
     */
    public $NumeroCuentaLI;
    /**
     * The CodEnvio
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodEnvio
     * @var string
     */
    public $CodEnvio;
    /**
     * The TipoModificacion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoModificacion
     * @var string
     */
    public $TipoModificacion;
    /**
     * The DatosLogisticaInversa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DatosLogisticaInversa
     * @var DATOSLOGISTICAINVERSATYPE
     */
    public $DatosLogisticaInversa;
    /**
     * Constructor method for DATOSENVIOTYPE
     * @uses DATOSENVIOTYPE::setCodPromocion()
     * @uses DATOSENVIOTYPE::setModalidadEntrega()
     * @uses DATOSENVIOTYPE::setOficinaElegida()
     * @uses DATOSENVIOTYPE::setLargo()
     * @uses DATOSENVIOTYPE::setAlto()
     * @uses DATOSENVIOTYPE::setAncho()
     * @uses DATOSENVIOTYPE::setValoresAnadidos()
     * @uses DATOSENVIOTYPE::setCodigoEmbalajePrepago()
     * @uses DATOSENVIOTYPE::setCodigoPuntoAdmision()
     * @uses DATOSENVIOTYPE::setFechaDepositoPrevista()
     * @uses DATOSENVIOTYPE::setObservaciones1()
     * @uses DATOSENVIOTYPE::setObservaciones2()
     * @uses DATOSENVIOTYPE::setInstruccionesDevolucion()
     * @uses DATOSENVIOTYPE::setAduana()
     * @uses DATOSENVIOTYPE::setCodigoIda()
     * @uses DATOSENVIOTYPE::setPermiteEmbalaje()
     * @uses DATOSENVIOTYPE::setFechaCaducidad()
     * @uses DATOSENVIOTYPE::setReferenciaExpedicion()
     * @uses DATOSENVIOTYPE::setCodigoHomepaq()
     * @uses DATOSENVIOTYPE::setToquenIdCorPaq()
     * @uses DATOSENVIOTYPE::setAdmisionHomepaq()
     * @uses DATOSENVIOTYPE::setDocumento1()
     * @uses DATOSENVIOTYPE::setAccDocumento1()
     * @uses DATOSENVIOTYPE::setObsDocumento1()
     * @uses DATOSENVIOTYPE::setDocumento2()
     * @uses DATOSENVIOTYPE::setAccDocumento2()
     * @uses DATOSENVIOTYPE::setObsDocumento2()
     * @uses DATOSENVIOTYPE::setDocumento3()
     * @uses DATOSENVIOTYPE::setAccDocumento3()
     * @uses DATOSENVIOTYPE::setObsDocumento3()
     * @uses DATOSENVIOTYPE::setOperadorPostal()
     * @uses DATOSENVIOTYPE::setCodigoEnvioOriginal()
     * @uses DATOSENVIOTYPE::setExisteEnvioVueltaLI()
     * @uses DATOSENVIOTYPE::setSeguroLI()
     * @uses DATOSENVIOTYPE::setImporteSeguroLI()
     * @uses DATOSENVIOTYPE::setReembolsoLI()
     * @uses DATOSENVIOTYPE::setImporteReembolsoLI()
     * @uses DATOSENVIOTYPE::setTipoReembolsoLI()
     * @uses DATOSENVIOTYPE::setNumeroCuentaLI()
     * @uses DATOSENVIOTYPE::setCodEnvio()
     * @uses DATOSENVIOTYPE::setTipoModificacion()
     * @uses DATOSENVIOTYPE::setDatosLogisticaInversa()
     * @param string $codPromocion
     * @param string $modalidadEntrega
     * @param string $oficinaElegida
     * @param int $largo
     * @param int $alto
     * @param int $ancho
     * @param VATYPE $valoresAnadidos
     * @param string $codigoEmbalajePrepago
     * @param string $codigoPuntoAdmision
     * @param string $fechaDepositoPrevista
     * @param string $observaciones1
     * @param string $observaciones2
     * @param string $instruccionesDevolucion
     * @param ADUANATYPE $aduana
     * @param string $codigoIda
     * @param string $permiteEmbalaje
     * @param string $fechaCaducidad
     * @param string $referenciaExpedicion
     * @param string $codigoHomepaq
     * @param string $toquenIdCorPaq
     * @param string $admisionHomepaq
     * @param string $documento1
     * @param string $accDocumento1
     * @param string $obsDocumento1
     * @param string $documento2
     * @param string $accDocumento2
     * @param string $obsDocumento2
     * @param string $documento3
     * @param string $accDocumento3
     * @param string $obsDocumento3
     * @param string $operadorPostal
     * @param string $codigoEnvioOriginal
     * @param string $existeEnvioVueltaLI
     * @param string $seguroLI
     * @param string $importeSeguroLI
     * @param string $reembolsoLI
     * @param string $importeReembolsoLI
     * @param string $tipoReembolsoLI
     * @param string $numeroCuentaLI
     * @param string $codEnvio
     * @param string $tipoModificacion
     * @param DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa
     */
    public function __construct(
        $codPromocion = null,
        $modalidadEntrega = null,
        $oficinaElegida = null,
        $largo = null,
        $alto = null,
        $ancho = null,
        VATYPE $valoresAnadidos = null,
        $codigoEmbalajePrepago = null,
        $codigoPuntoAdmision = null,
        $fechaDepositoPrevista = null,
        $observaciones1 = null,
        $observaciones2 = null,
        $instruccionesDevolucion = null,
        ADUANATYPE $aduana = null,
        $codigoIda = null,
        $permiteEmbalaje = null,
        $fechaCaducidad = null,
        $referenciaExpedicion = null,
        $codigoHomepaq = null,
        $toquenIdCorPaq = null,
        $admisionHomepaq = null,
        $documento1 = null,
        $accDocumento1 = null,
        $obsDocumento1 = null,
        $documento2 = null,
        $accDocumento2 = null,
        $obsDocumento2 = null,
        $documento3 = null,
        $accDocumento3 = null,
        $obsDocumento3 = null,
        $operadorPostal = null,
        $codigoEnvioOriginal = null,
        $existeEnvioVueltaLI = null,
        $seguroLI = null,
        $importeSeguroLI = null,
        $reembolsoLI = null,
        $importeReembolsoLI = null,
        $tipoReembolsoLI = null,
        $numeroCuentaLI = null,
        $codEnvio = null,
        $tipoModificacion = null,
        DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa = null
    ) {
        $this
            ->setCodPromocion($codPromocion)
            ->setModalidadEntrega($modalidadEntrega)
            ->setOficinaElegida($oficinaElegida)
            ->setLargo($largo)
            ->setAlto($alto)
            ->setAncho($ancho)
            ->setValoresAnadidos($valoresAnadidos)
            ->setCodigoEmbalajePrepago($codigoEmbalajePrepago)
            ->setCodigoPuntoAdmision($codigoPuntoAdmision)
            ->setFechaDepositoPrevista($fechaDepositoPrevista)
            ->setObservaciones1($observaciones1)
            ->setObservaciones2($observaciones2)
            ->setInstruccionesDevolucion($instruccionesDevolucion)
            ->setAduana($aduana)
            ->setCodigoIda($codigoIda)
            ->setPermiteEmbalaje($permiteEmbalaje)
            ->setFechaCaducidad($fechaCaducidad)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setCodigoHomepaq($codigoHomepaq)
            ->setToquenIdCorPaq($toquenIdCorPaq)
            ->setAdmisionHomepaq($admisionHomepaq)
            ->setDocumento1($documento1)
            ->setAccDocumento1($accDocumento1)
            ->setObsDocumento1($obsDocumento1)
            ->setDocumento2($documento2)
            ->setAccDocumento2($accDocumento2)
            ->setObsDocumento2($obsDocumento2)
            ->setDocumento3($documento3)
            ->setAccDocumento3($accDocumento3)
            ->setObsDocumento3($obsDocumento3)
            ->setOperadorPostal($operadorPostal)
            ->setCodigoEnvioOriginal($codigoEnvioOriginal)
            ->setExisteEnvioVueltaLI($existeEnvioVueltaLI)
            ->setSeguroLI($seguroLI)
            ->setImporteSeguroLI($importeSeguroLI)
            ->setReembolsoLI($reembolsoLI)
            ->setImporteReembolsoLI($importeReembolsoLI)
            ->setTipoReembolsoLI($tipoReembolsoLI)
            ->setNumeroCuentaLI($numeroCuentaLI)
            ->setCodEnvio($codEnvio)
            ->setTipoModificacion($tipoModificacion)
            ->setDatosLogisticaInversa($datosLogisticaInversa);
    }
    /**
     * Get CodPromocion value
     * @return string|null
     */
    public function getCodPromocion()
    {
        return $this->CodPromocion;
    }
    /**
     * Set CodPromocion value
     * @param string $codPromocion
     * @return DATOSENVIOTYPE
     */
    public function setCodPromocion($codPromocion = null)
    {
        // validation for constraint: string
        if (!is_null($codPromocion) && !is_string($codPromocion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codPromocion, true), gettype($codPromocion)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($codPromocion) && mb_strlen($codPromocion) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($codPromocion)), __LINE__);
        }
        $this->CodPromocion = $codPromocion;
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
     * @return DATOSENVIOTYPE
     */
    public function setModalidadEntrega($modalidadEntrega = null)
    {
        // validation for constraint: enumeration
        if (! ModalidadEntrega::valueIsValid($modalidadEntrega)) {
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
     * @return DATOSENVIOTYPE
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
     * Get Largo value
     * @return int|null
     */
    public function getLargo()
    {
        return $this->Largo;
    }
    /**
     * Set Largo value
     * @param int $largo
     * @return DATOSENVIOTYPE
     */
    public function setLargo($largo = null)
    {
        // validation for constraint: int
        if (!is_null($largo) && !(is_int($largo) || ctype_digit($largo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largo, true), gettype($largo)), __LINE__);
        }
        $this->Largo = $largo;
        return $this;
    }
    /**
     * Get Alto value
     * @return int|null
     */
    public function getAlto()
    {
        return $this->Alto;
    }
    /**
     * Set Alto value
     * @param int $alto
     * @return DATOSENVIOTYPE
     */
    public function setAlto($alto = null)
    {
        // validation for constraint: int
        if (!is_null($alto) && !(is_int($alto) || ctype_digit($alto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alto, true), gettype($alto)), __LINE__);
        }
        $this->Alto = $alto;
        return $this;
    }
    /**
     * Get Ancho value
     * @return int|null
     */
    public function getAncho()
    {
        return $this->Ancho;
    }
    /**
     * Set Ancho value
     * @param int $ancho
     * @return DATOSENVIOTYPE
     */
    public function setAncho($ancho = null)
    {
        // validation for constraint: int
        if (!is_null($ancho) && !(is_int($ancho) || ctype_digit($ancho))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ancho, true), gettype($ancho)), __LINE__);
        }
        $this->Ancho = $ancho;
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
     * @return DATOSENVIOTYPE
     */
    public function setValoresAnadidos(VATYPE $valoresAnadidos = null)
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        return $this;
    }
    /**
     * Get CodigoEmbalajePrepago value
     * @return string|null
     */
    public function getCodigoEmbalajePrepago()
    {
        return $this->CodigoEmbalajePrepago;
    }
    /**
     * Set CodigoEmbalajePrepago value
     * @param string $codigoEmbalajePrepago
     * @return DATOSENVIOTYPE
     */
    public function setCodigoEmbalajePrepago($codigoEmbalajePrepago = null)
    {
        // validation for constraint: string
        if (!is_null($codigoEmbalajePrepago) && !is_string($codigoEmbalajePrepago)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoEmbalajePrepago, true), gettype($codigoEmbalajePrepago)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codigoEmbalajePrepago) && mb_strlen($codigoEmbalajePrepago) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codigoEmbalajePrepago)), __LINE__);
        }
        $this->CodigoEmbalajePrepago = $codigoEmbalajePrepago;
        return $this;
    }
    /**
     * Get CodigoPuntoAdmision value
     * @return string|null
     */
    public function getCodigoPuntoAdmision()
    {
        return $this->CodigoPuntoAdmision;
    }
    /**
     * Set CodigoPuntoAdmision value
     * @param string $codigoPuntoAdmision
     * @return DATOSENVIOTYPE
     */
    public function setCodigoPuntoAdmision($codigoPuntoAdmision = null)
    {
        // validation for constraint: string
        if (!is_null($codigoPuntoAdmision) && !is_string($codigoPuntoAdmision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPuntoAdmision, true), gettype($codigoPuntoAdmision)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($codigoPuntoAdmision) && mb_strlen($codigoPuntoAdmision) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen($codigoPuntoAdmision)), __LINE__);
        }
        $this->CodigoPuntoAdmision = $codigoPuntoAdmision;
        return $this;
    }
    /**
     * Get FechaDepositoPrevista value
     * @return string|null
     */
    public function getFechaDepositoPrevista()
    {
        return $this->FechaDepositoPrevista;
    }
    /**
     * Set FechaDepositoPrevista value
     * @param string $fechaDepositoPrevista
     * @return DATOSENVIOTYPE
     */
    public function setFechaDepositoPrevista($fechaDepositoPrevista = null)
    {
        // validation for constraint: string
        if (!is_null($fechaDepositoPrevista) && !is_string($fechaDepositoPrevista)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaDepositoPrevista, true), gettype($fechaDepositoPrevista)), __LINE__);
        }
        $this->FechaDepositoPrevista = $fechaDepositoPrevista;
        return $this;
    }
    /**
     * Get Observaciones1 value
     * @return string|null
     */
    public function getObservaciones1()
    {
        return $this->Observaciones1;
    }
    /**
     * Set Observaciones1 value
     * @param string $observaciones1
     * @return DATOSENVIOTYPE
     */
    public function setObservaciones1($observaciones1 = null)
    {
        // validation for constraint: string
        if (!is_null($observaciones1) && !is_string($observaciones1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones1, true), gettype($observaciones1)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($observaciones1) && mb_strlen($observaciones1) > 45) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen($observaciones1)), __LINE__);
        }
        $this->Observaciones1 = $observaciones1;
        return $this;
    }
    /**
     * Get Observaciones2 value
     * @return string|null
     */
    public function getObservaciones2()
    {
        return $this->Observaciones2;
    }
    /**
     * Set Observaciones2 value
     * @param string $observaciones2
     * @return DATOSENVIOTYPE
     */
    public function setObservaciones2($observaciones2 = null)
    {
        // validation for constraint: string
        if (!is_null($observaciones2) && !is_string($observaciones2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones2, true), gettype($observaciones2)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($observaciones2) && mb_strlen($observaciones2) > 45) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen($observaciones2)), __LINE__);
        }
        $this->Observaciones2 = $observaciones2;
        return $this;
    }
    /**
     * Get InstruccionesDevolucion value
     * @return string|null
     */
    public function getInstruccionesDevolucion()
    {
        return $this->InstruccionesDevolucion;
    }
    /**
     * Set InstruccionesDevolucion value
     * @uses InstruccionesDevolucion::valueIsValid()
     * @uses InstruccionesDevolucion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $instruccionesDevolucion
     * @return DATOSENVIOTYPE
     */
    public function setInstruccionesDevolucion($instruccionesDevolucion = null)
    {
        // validation for constraint: enumeration
        if (!InstruccionesDevolucion::valueIsValid($instruccionesDevolucion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class InstruccionesDevolucion', is_array($instruccionesDevolucion) ? implode(', ', $instruccionesDevolucion) : var_export($instruccionesDevolucion, true), implode(', ', InstruccionesDevolucion::getValidValues())), __LINE__);
        }
        $this->InstruccionesDevolucion = $instruccionesDevolucion;
        return $this;
    }
    /**
     * Get Aduana value
     * @return ADUANATYPE|null
     */
    public function getAduana()
    {
        return $this->Aduana;
    }
    /**
     * Set Aduana value
     * @param ADUANATYPE $aduana
     * @return DATOSENVIOTYPE
     */
    public function setAduana(ADUANATYPE $aduana = null)
    {
        $this->Aduana = $aduana;
        return $this;
    }
    /**
     * Get CodigoIda value
     * @return string|null
     */
    public function getCodigoIda()
    {
        return $this->CodigoIda;
    }
    /**
     * Set CodigoIda value
     * @param string $codigoIda
     * @return DATOSENVIOTYPE
     */
    public function setCodigoIda($codigoIda = null)
    {
        // validation for constraint: string
        if (!is_null($codigoIda) && !is_string($codigoIda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoIda, true), gettype($codigoIda)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codigoIda) && mb_strlen($codigoIda) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codigoIda)), __LINE__);
        }
        $this->CodigoIda = $codigoIda;
        return $this;
    }
    /**
     * Get PermiteEmbalaje value
     * @return string|null
     */
    public function getPermiteEmbalaje()
    {
        return $this->PermiteEmbalaje;
    }
    /**
     * Set PermiteEmbalaje value
     * @param string $permiteEmbalaje
     * @return DATOSENVIOTYPE
     */
    public function setPermiteEmbalaje($permiteEmbalaje = null)
    {
        // validation for constraint: string
        if (!is_null($permiteEmbalaje) && !is_string($permiteEmbalaje)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($permiteEmbalaje, true), gettype($permiteEmbalaje)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($permiteEmbalaje) && mb_strlen($permiteEmbalaje) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($permiteEmbalaje)), __LINE__);
        }
        $this->PermiteEmbalaje = $permiteEmbalaje;
        return $this;
    }
    /**
     * Get FechaCaducidad value
     * @return string|null
     */
    public function getFechaCaducidad()
    {
        return $this->FechaCaducidad;
    }
    /**
     * Set FechaCaducidad value
     * @param string $fechaCaducidad
     * @return DATOSENVIOTYPE
     */
    public function setFechaCaducidad($fechaCaducidad = null)
    {
        // validation for constraint: string
        if (!is_null($fechaCaducidad) && !is_string($fechaCaducidad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaCaducidad, true), gettype($fechaCaducidad)), __LINE__);
        }
        $this->FechaCaducidad = $fechaCaducidad;
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
     * @return DATOSENVIOTYPE
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
     * @return DATOSENVIOTYPE
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
     * Get ToquenIdCorPaq value
     * @return string|null
     */
    public function getToquenIdCorPaq()
    {
        return $this->ToquenIdCorPaq;
    }
    /**
     * Set ToquenIdCorPaq value
     * @param string $toquenIdCorPaq
     * @return DATOSENVIOTYPE
     */
    public function setToquenIdCorPaq($toquenIdCorPaq = null)
    {
        // validation for constraint: string
        if (!is_null($toquenIdCorPaq) && !is_string($toquenIdCorPaq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toquenIdCorPaq, true), gettype($toquenIdCorPaq)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($toquenIdCorPaq) && mb_strlen($toquenIdCorPaq) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($toquenIdCorPaq)), __LINE__);
        }
        $this->ToquenIdCorPaq = $toquenIdCorPaq;
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
     * @return DATOSENVIOTYPE
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
     * Get Documento1 value
     * @return string|null
     */
    public function getDocumento1()
    {
        return $this->Documento1;
    }
    /**
     * Set Documento1 value
     * @param string $documento1
     * @return DATOSENVIOTYPE
     */
    public function setDocumento1($documento1 = null)
    {
        // validation for constraint: string
        if (!is_null($documento1) && !is_string($documento1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento1, true), gettype($documento1)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento1) && mb_strlen($documento1) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($documento1)), __LINE__);
        }
        $this->Documento1 = $documento1;
        return $this;
    }
    /**
     * Get AccDocumento1 value
     * @return string|null
     */
    public function getAccDocumento1()
    {
        return $this->AccDocumento1;
    }
    /**
     * Set AccDocumento1 value
     * @param string $accDocumento1
     * @return DATOSENVIOTYPE
     */
    public function setAccDocumento1($accDocumento1 = null)
    {
        // validation for constraint: string
        if (!is_null($accDocumento1) && !is_string($accDocumento1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento1, true), gettype($accDocumento1)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento1) && mb_strlen($accDocumento1) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($accDocumento1)), __LINE__);
        }
        $this->AccDocumento1 = $accDocumento1;
        return $this;
    }
    /**
     * Get ObsDocumento1 value
     * @return string|null
     */
    public function getObsDocumento1()
    {
        return $this->ObsDocumento1;
    }
    /**
     * Set ObsDocumento1 value
     * @param string $obsDocumento1
     * @return DATOSENVIOTYPE
     */
    public function setObsDocumento1($obsDocumento1 = null)
    {
        // validation for constraint: string
        if (!is_null($obsDocumento1) && !is_string($obsDocumento1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento1, true), gettype($obsDocumento1)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento1) && mb_strlen($obsDocumento1) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($obsDocumento1)), __LINE__);
        }
        $this->ObsDocumento1 = $obsDocumento1;
        return $this;
    }
    /**
     * Get Documento2 value
     * @return string|null
     */
    public function getDocumento2()
    {
        return $this->Documento2;
    }
    /**
     * Set Documento2 value
     * @param string $documento2
     * @return DATOSENVIOTYPE
     */
    public function setDocumento2($documento2 = null)
    {
        // validation for constraint: string
        if (!is_null($documento2) && !is_string($documento2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento2, true), gettype($documento2)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento2) && mb_strlen($documento2) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($documento2)), __LINE__);
        }
        $this->Documento2 = $documento2;
        return $this;
    }
    /**
     * Get AccDocumento2 value
     * @return string|null
     */
    public function getAccDocumento2()
    {
        return $this->AccDocumento2;
    }
    /**
     * Set AccDocumento2 value
     * @param string $accDocumento2
     * @return DATOSENVIOTYPE
     */
    public function setAccDocumento2($accDocumento2 = null)
    {
        // validation for constraint: string
        if (!is_null($accDocumento2) && !is_string($accDocumento2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento2, true), gettype($accDocumento2)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento2) && mb_strlen($accDocumento2) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($accDocumento2)), __LINE__);
        }
        $this->AccDocumento2 = $accDocumento2;
        return $this;
    }
    /**
     * Get ObsDocumento2 value
     * @return string|null
     */
    public function getObsDocumento2()
    {
        return $this->ObsDocumento2;
    }
    /**
     * Set ObsDocumento2 value
     * @param string $obsDocumento2
     * @return DATOSENVIOTYPE
     */
    public function setObsDocumento2($obsDocumento2 = null)
    {
        // validation for constraint: string
        if (!is_null($obsDocumento2) && !is_string($obsDocumento2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento2, true), gettype($obsDocumento2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento2) && mb_strlen($obsDocumento2) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($obsDocumento2)), __LINE__);
        }
        $this->ObsDocumento2 = $obsDocumento2;
        return $this;
    }
    /**
     * Get Documento3 value
     * @return string|null
     */
    public function getDocumento3()
    {
        return $this->Documento3;
    }
    /**
     * Set Documento3 value
     * @param string $documento3
     * @return DATOSENVIOTYPE
     */
    public function setDocumento3($documento3 = null)
    {
        // validation for constraint: string
        if (!is_null($documento3) && !is_string($documento3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento3, true), gettype($documento3)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento3) && mb_strlen($documento3) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($documento3)), __LINE__);
        }
        $this->Documento3 = $documento3;
        return $this;
    }
    /**
     * Get AccDocumento3 value
     * @return string|null
     */
    public function getAccDocumento3()
    {
        return $this->AccDocumento3;
    }
    /**
     * Set AccDocumento3 value
     * @param string $accDocumento3
     * @return DATOSENVIOTYPE
     */
    public function setAccDocumento3($accDocumento3 = null)
    {
        // validation for constraint: string
        if (!is_null($accDocumento3) && !is_string($accDocumento3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento3, true), gettype($accDocumento3)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento3) && mb_strlen($accDocumento3) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($accDocumento3)), __LINE__);
        }
        $this->AccDocumento3 = $accDocumento3;
        return $this;
    }
    /**
     * Get ObsDocumento3 value
     * @return string|null
     */
    public function getObsDocumento3()
    {
        return $this->ObsDocumento3;
    }
    /**
     * Set ObsDocumento3 value
     * @param string $obsDocumento3
     * @return DATOSENVIOTYPE
     */
    public function setObsDocumento3($obsDocumento3 = null)
    {
        // validation for constraint: string
        if (!is_null($obsDocumento3) && !is_string($obsDocumento3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento3, true), gettype($obsDocumento3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento3) && mb_strlen($obsDocumento3) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($obsDocumento3)), __LINE__);
        }
        $this->ObsDocumento3 = $obsDocumento3;
        return $this;
    }
    /**
     * Get OperadorPostal value
     * @return string|null
     */
    public function getOperadorPostal()
    {
        return $this->OperadorPostal;
    }
    /**
     * Set OperadorPostal value
     * @param string $operadorPostal
     * @return DATOSENVIOTYPE
     */
    public function setOperadorPostal($operadorPostal = null)
    {
        // validation for constraint: string
        if (!is_null($operadorPostal) && !is_string($operadorPostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operadorPostal, true), gettype($operadorPostal)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($operadorPostal) && mb_strlen($operadorPostal) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($operadorPostal)), __LINE__);
        }
        $this->OperadorPostal = $operadorPostal;
        return $this;
    }
    /**
     * Get CodigoEnvioOriginal value
     * @return string|null
     */
    public function getCodigoEnvioOriginal()
    {
        return $this->CodigoEnvioOriginal;
    }
    /**
     * Set CodigoEnvioOriginal value
     * @param string $codigoEnvioOriginal
     * @return DATOSENVIOTYPE
     */
    public function setCodigoEnvioOriginal($codigoEnvioOriginal = null)
    {
        // validation for constraint: string
        if (!is_null($codigoEnvioOriginal) && !is_string($codigoEnvioOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoEnvioOriginal, true), gettype($codigoEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($codigoEnvioOriginal) && mb_strlen($codigoEnvioOriginal) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($codigoEnvioOriginal)), __LINE__);
        }
        $this->CodigoEnvioOriginal = $codigoEnvioOriginal;
        return $this;
    }
    /**
     * Get ExisteEnvioVueltaLI value
     * @return string|null
     */
    public function getExisteEnvioVueltaLI()
    {
        return $this->ExisteEnvioVueltaLI;
    }
    /**
     * Set ExisteEnvioVueltaLI value
     * @param string $existeEnvioVueltaLI
     * @return DATOSENVIOTYPE
     */
    public function setExisteEnvioVueltaLI($existeEnvioVueltaLI = null)
    {
        // validation for constraint: string
        if (!is_null($existeEnvioVueltaLI) && !is_string($existeEnvioVueltaLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($existeEnvioVueltaLI, true), gettype($existeEnvioVueltaLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($existeEnvioVueltaLI) && mb_strlen($existeEnvioVueltaLI) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($existeEnvioVueltaLI)), __LINE__);
        }
        $this->ExisteEnvioVueltaLI = $existeEnvioVueltaLI;
        return $this;
    }
    /**
     * Get SeguroLI value
     * @return string|null
     */
    public function getSeguroLI()
    {
        return $this->SeguroLI;
    }
    /**
     * Set SeguroLI value
     * @param string $seguroLI
     * @return DATOSENVIOTYPE
     */
    public function setSeguroLI($seguroLI = null)
    {
        // validation for constraint: string
        if (!is_null($seguroLI) && !is_string($seguroLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seguroLI, true), gettype($seguroLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($seguroLI) && mb_strlen($seguroLI) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($seguroLI)), __LINE__);
        }
        $this->SeguroLI = $seguroLI;
        return $this;
    }
    /**
     * Get ImporteSeguroLI value
     * @return string|null
     */
    public function getImporteSeguroLI()
    {
        return $this->ImporteSeguroLI;
    }
    /**
     * Set ImporteSeguroLI value
     * @param string $importeSeguroLI
     * @return DATOSENVIOTYPE
     */
    public function setImporteSeguroLI($importeSeguroLI = null)
    {
        // validation for constraint: string
        if (!is_null($importeSeguroLI) && !is_string($importeSeguroLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeSeguroLI, true), gettype($importeSeguroLI)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeSeguroLI) && mb_strlen($importeSeguroLI) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($importeSeguroLI)), __LINE__);
        }
        $this->ImporteSeguroLI = $importeSeguroLI;
        return $this;
    }
    /**
     * Get ReembolsoLI value
     * @return string|null
     */
    public function getReembolsoLI()
    {
        return $this->ReembolsoLI;
    }
    /**
     * Set ReembolsoLI value
     * @param string $reembolsoLI
     * @return DATOSENVIOTYPE
     */
    public function setReembolsoLI($reembolsoLI = null)
    {
        // validation for constraint: string
        if (!is_null($reembolsoLI) && !is_string($reembolsoLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reembolsoLI, true), gettype($reembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($reembolsoLI) && mb_strlen($reembolsoLI) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($reembolsoLI)), __LINE__);
        }
        $this->ReembolsoLI = $reembolsoLI;
        return $this;
    }
    /**
     * Get ImporteReembolsoLI value
     * @return string|null
     */
    public function getImporteReembolsoLI()
    {
        return $this->ImporteReembolsoLI;
    }
    /**
     * Set ImporteReembolsoLI value
     * @param string $importeReembolsoLI
     * @return DATOSENVIOTYPE
     */
    public function setImporteReembolsoLI($importeReembolsoLI = null)
    {
        // validation for constraint: string
        if (!is_null($importeReembolsoLI) && !is_string($importeReembolsoLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolsoLI, true), gettype($importeReembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeReembolsoLI) && mb_strlen($importeReembolsoLI) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($importeReembolsoLI)), __LINE__);
        }
        $this->ImporteReembolsoLI = $importeReembolsoLI;
        return $this;
    }
    /**
     * Get TipoReembolsoLI value
     * @return string|null
     */
    public function getTipoReembolsoLI()
    {
        return $this->TipoReembolsoLI;
    }
    /**
     * Set TipoReembolsoLI value
     * @param string $tipoReembolsoLI
     * @return DATOSENVIOTYPE
     */
    public function setTipoReembolsoLI($tipoReembolsoLI = null)
    {
        // validation for constraint: string
        if (!is_null($tipoReembolsoLI) && !is_string($tipoReembolsoLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoReembolsoLI, true), gettype($tipoReembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($tipoReembolsoLI) && mb_strlen($tipoReembolsoLI) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen($tipoReembolsoLI)), __LINE__);
        }
        $this->TipoReembolsoLI = $tipoReembolsoLI;
        return $this;
    }
    /**
     * Get NumeroCuentaLI value
     * @return string|null
     */
    public function getNumeroCuentaLI()
    {
        return $this->NumeroCuentaLI;
    }
    /**
     * Set NumeroCuentaLI value
     * @param string $numeroCuentaLI
     * @return DATOSENVIOTYPE
     */
    public function setNumeroCuentaLI($numeroCuentaLI = null)
    {
        // validation for constraint: string
        if (!is_null($numeroCuentaLI) && !is_string($numeroCuentaLI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCuentaLI, true), gettype($numeroCuentaLI)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numeroCuentaLI) && mb_strlen($numeroCuentaLI) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numeroCuentaLI)), __LINE__);
        }
        $this->NumeroCuentaLI = $numeroCuentaLI;
        return $this;
    }
    /**
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio()
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return DATOSENVIOTYPE
     */
    public function setCodEnvio($codEnvio = null)
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen($codEnvio) > 23) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen($codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        return $this;
    }
    /**
     * Get TipoModificacion value
     * @return string|null
     */
    public function getTipoModificacion()
    {
        return $this->TipoModificacion;
    }
    /**
     * Set TipoModificacion value
     * @uses TipoModificacion::valueIsValid()
     * @uses TipoModificacion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoModificacion
     * @return DATOSENVIOTYPE
     */
    public function setTipoModificacion($tipoModificacion = null)
    {
        // validation for constraint: enumeration
        if (!TipoModificacion::valueIsValid($tipoModificacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class TipoModificacion', is_array($tipoModificacion) ? implode(', ', $tipoModificacion) : var_export($tipoModificacion, true), implode(', ', TipoModificacion::getValidValues())), __LINE__);
        }
        $this->TipoModificacion = $tipoModificacion;
        return $this;
    }
    /**
     * Get DatosLogisticaInversa value
     * @return DATOSLOGISTICAINVERSATYPE|null
     */
    public function getDatosLogisticaInversa()
    {
        return $this->DatosLogisticaInversa;
    }
    /**
     * Set DatosLogisticaInversa value
     * @param DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa
     * @return DATOSENVIOTYPE
     */
    public function setDatosLogisticaInversa(DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa = null)
    {
        $this->DatosLogisticaInversa = $datosLogisticaInversa;
        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see  AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSENVIOREDUCIDOTYPE
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
