<?php

namespace CorreosSdk\StructType;

use CorreosSdk\EnumType\InstruccionesDevolucion;
use CorreosSdk\EnumType\TipoModificacion;


/**
 * This class stands for DATOSENVIOMULTIBULTOTYPE StructType
 * @subpackage Structs
 */
class DATOSENVIOMULTIBULTOTYPE extends AbstractStructBase
{
    /**
     * The NumBulto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NumBulto
     * @var int
     */
    public $NumBulto;
    /**
     * The ReferenciaCliente
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente
     * @var string
     */
    public $ReferenciaCliente;
    /**
     * The ReferenciaCliente2
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente2
     * @var string
     */
    public $ReferenciaCliente2;
    /**
     * The ReferenciaCliente3
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente3
     * @var string
     */
    public $ReferenciaCliente3;
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
     * The Pesos
     * Meta informations extracted from the WSDL
     * - ref: xsd:Pesos
     * @var Pesos
     */
    public $Pesos;
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
     * The PersonaContacto
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:PersonaContacto
     * @var string
     */
    public $PersonaContacto;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Email
     * @var string
     */
    public $Email;
    /**
     * The NumeroSMS
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * - ref: xsd:NumeroSMS
     * @var string
     */
    public $NumeroSMS;
    /**
     * Constructor method for DATOSENVIOMULTIBULTOTYPE
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumBulto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodPromocion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPesos()
     * @uses DATOSENVIOMULTIBULTOTYPE::setLargo()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAlto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAncho()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoEmbalajePrepago()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoPuntoAdmision()
     * @uses DATOSENVIOMULTIBULTOTYPE::setFechaDepositoPrevista()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObservaciones1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObservaciones2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setInstruccionesDevolucion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAduana()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoIda()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPermiteEmbalaje()
     * @uses DATOSENVIOMULTIBULTOTYPE::setFechaCaducidad()
     * @uses DATOSENVIOMULTIBULTOTYPE::setToquenIdCorPaq()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setOperadorPostal()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoEnvioOriginal()
     * @uses DATOSENVIOMULTIBULTOTYPE::setExisteEnvioVueltaLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setSeguroLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setImporteSeguroLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setImporteReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setTipoReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumeroCuentaLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodEnvio()
     * @uses DATOSENVIOMULTIBULTOTYPE::setTipoModificacion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPersonaContacto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setEmail()
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumeroSMS()
     * @param int $numBulto
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $codPromocion
     * @param Pesos $pesos
     * @param int $largo
     * @param int $alto
     * @param int $ancho
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
     * @param string $toquenIdCorPaq
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
     * @param string $personaContacto
     * @param string $email
     * @param string $numeroSMS
     */
    public function __construct(
        $numBulto = null,
        $referenciaCliente = null,
        $referenciaCliente2 = null,
        $referenciaCliente3 = null,
        $codPromocion = null,
        Pesos $pesos = null,
        $largo = null,
        $alto = null,
        $ancho = null,
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
        $toquenIdCorPaq = null,
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
        $personaContacto = null,
        $email = null,
        $numeroSMS = null
    ) {
        $this
            ->setNumBulto($numBulto)
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setCodPromocion($codPromocion)
            ->setPesos($pesos)
            ->setLargo($largo)
            ->setAlto($alto)
            ->setAncho($ancho)
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
            ->setToquenIdCorPaq($toquenIdCorPaq)
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
            ->setPersonaContacto($personaContacto)
            ->setEmail($email)
            ->setNumeroSMS($numeroSMS);
    }
    /**
     * Get NumBulto value
     * @return int|null
     */
    public function getNumBulto()
    {
        return $this->NumBulto;
    }
    /**
     * Set NumBulto value
     * @param int $numBulto
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setNumBulto($numBulto = null)
    {
        // validation for constraint: int
        if (!is_null($numBulto) && !(is_int($numBulto) || ctype_digit($numBulto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBulto, true), gettype($numBulto)), __LINE__);
        }
        $this->NumBulto = $numBulto;
        return $this;
    }
    /**
     * Get ReferenciaCliente value
     * @return string|null
     */
    public function getReferenciaCliente()
    {
        return $this->ReferenciaCliente;
    }
    /**
     * Set ReferenciaCliente value
     * @param string $referenciaCliente
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setReferenciaCliente($referenciaCliente = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente) && !is_string($referenciaCliente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente, true), gettype($referenciaCliente)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente) && mb_strlen($referenciaCliente) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente)), __LINE__);
        }
        $this->ReferenciaCliente = $referenciaCliente;
        return $this;
    }
    /**
     * Get ReferenciaCliente2 value
     * @return string|null
     */
    public function getReferenciaCliente2()
    {
        return $this->ReferenciaCliente2;
    }
    /**
     * Set ReferenciaCliente2 value
     * @param string $referenciaCliente2
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setReferenciaCliente2($referenciaCliente2 = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente2) && !is_string($referenciaCliente2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente2, true), gettype($referenciaCliente2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente2) && mb_strlen($referenciaCliente2) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente2)), __LINE__);
        }
        $this->ReferenciaCliente2 = $referenciaCliente2;
        return $this;
    }
    /**
     * Get ReferenciaCliente3 value
     * @return string|null
     */
    public function getReferenciaCliente3()
    {
        return $this->ReferenciaCliente3;
    }
    /**
     * Set ReferenciaCliente3 value
     * @param string $referenciaCliente3
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setReferenciaCliente3($referenciaCliente3 = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente3) && !is_string($referenciaCliente3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente3, true), gettype($referenciaCliente3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente3) && mb_strlen($referenciaCliente3) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($referenciaCliente3)), __LINE__);
        }
        $this->ReferenciaCliente3 = $referenciaCliente3;
        return $this;
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * Get Pesos value
     * @return Pesos|null
     */
    public function getPesos()
    {
        return $this->Pesos;
    }
    /**
     * Set Pesos value
     * @param Pesos $pesos
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setPesos(Pesos $pesos = null)
    {
        $this->Pesos = $pesos;
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * @return DATOSENVIOMULTIBULTOTYPE
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
     * Get PersonaContacto value
     * @return string|null
     */
    public function getPersonaContacto()
    {
        return $this->PersonaContacto;
    }
    /**
     * Set PersonaContacto value
     * @param string $personaContacto
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setPersonaContacto($personaContacto = null)
    {
        // validation for constraint: string
        if (!is_null($personaContacto) && !is_string($personaContacto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaContacto, true), gettype($personaContacto)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($personaContacto) && mb_strlen($personaContacto) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($personaContacto)), __LINE__);
        }
        $this->PersonaContacto = $personaContacto;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen($email) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get NumeroSMS value
     * @return string|null
     */
    public function getNumeroSMS()
    {
        return $this->NumeroSMS;
    }
    /**
     * Set NumeroSMS value
     * @param string $numeroSMS
     * @return DATOSENVIOMULTIBULTOTYPE
     */
    public function setNumeroSMS($numeroSMS = null)
    {
        // validation for constraint: string
        if (!is_null($numeroSMS) && !is_string($numeroSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSMS, true), gettype($numeroSMS)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($numeroSMS) && mb_strlen($numeroSMS) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen($numeroSMS)), __LINE__);
        }
        $this->NumeroSMS = $numeroSMS;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return DATOSENVIOMULTIBULTOTYPE
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
