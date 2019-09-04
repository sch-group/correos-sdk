<?php


namespace CorreosSdk\Factories;


use CorreosSdk\StructType\ADUANATYPE;
use CorreosSdk\StructType\DATOSADUANATYPE;
use CorreosSdk\StructType\DATOSENVIOMODIFTYPE;
use CorreosSdk\StructType\DATOSENVIOTYPE;
use CorreosSdk\StructType\DescAduanera;
use CorreosSdk\StructType\Pesos;
use CorreosSdk\StructType\PESOTYPE;
use CorreosSdk\StructType\VATYPE;

/**
 * DATOSENVIOTYPE
 * Class SendingContent
 * @package CorreosSdk\MainComponents
 */
class SendingContent
{

    //  standard for the product / at home
    const STANDARD_DELIVERY_MODE = 'ST';

    const IN_SELECTED_BRANCH_DELIVERY_MODE = 'LS';

    const IN_REFERENCE_BRANCH_DELIVERY_MODE = 'OR';

    const CITY_PAQ_DELIVERY_MODE = 'CP';

    const POSTAGE_PAID_PAYMENT_TYPE = 'FP';

    const MACHINE_FRANKING_PAYMENT_TYPE = 'FM';

    const CASH_PAYMENT_TYPE = 'ES';

    const ONLINE_PAYMENT_TYPE = 'ON';

    const PAQ_LIGHT_INTERNATIONAL_TARIFF  = "S0360";

    const ALLOW_COMPLETE_MODIFICATION = '2';

    const ALLOW_BASIC_MODIFICATION = '1';

    const ALLOW_NO_MODIFICATION = '0';

    /**
     * CodProducto
     * @var string
     */
    private $tariffProductCode;

    /**
     * ReferenciaCliente
     * @var string
     */
    private $customerShipmentCode;

    /**
     * TipoFranqueo
     * @var string
     */
    private $paymentType;

    /**
     * NumMaquinaFranquear
     * @var string
     */
    private $frankingMachineNumber;

    /***
     * ImporteFranqueado
     * @var string
     */
    private $frankedSumEuroCent;

    /**
     * Cod Promocion
     * @var string
     */
    private $codePromotion;

    /**
     * Modalidad Entrega
     * @var string
     */
    private $deliveryMode;

    /**
     * OficinaElegida
     * @var string
     */
    private $codeOfSelectedBranchMode;

    /**
     * @var PackageSize
     */
    private $packageSize;

    /**
     * ValoresAnadidos
     * TipoVA // TODO create own value object later
     * @var VATYPE
     */
    private $additionalInfo;

    /**
     * CodigoEmbalajePrepago
     * @var string
     */
    private $packingCode;

    /**
     * CodigoPuntoAdmisión
     * @var string
     */
    private $codeOfShipmentBranch;

    /**
     * FechaDepositoPrevista
     * date YYYYMMDD format
     * @var \DateTime
     */
    private $expectedDepositDate;

    /**
     * Observaciones1
     * @var string
     */
    private $firstLineComments;

    /**
     * Observaciones2
     * @var string
     */
    private $secondLineComments;

    /**
     * InstruccionesDevolucion can have only 3 values
     * Values:
        D: Return to sender
        A: Treat as abandoned
        By default: “Return to sender”.
     * @var string
     */
    private $returnInstructions;

    /**
     *  List of Documents params (Documento1, AccDocumento1, ObsDocumento1 ...)
     * @var DocumentList
     */
    private $documentList;

    /**
     * @var SendingInsides
     */
    private $sendingInsides;

    /**
     * CodigoIda
     * @var string
     */
    private $outWardCode;

    /**
     * PermiteEmbalaje
     * @var string
     */
    private $toPackageItems;

    /**
     * FechaCaducidad
     * @var \DateTime $deadlineReverseLogistic (YYYYMMDD)
     */
    private $deadlineReverseLogistic;

    /**
     * CodigoHomepaq
     * @var string
     */
    private $tapDestinationCode;

    /**
     * ToquenIdCorPaq
     * @var string
     */
    private $correosPaqUserId;

    /**
     * AdmisionHomepaq
     * @var string
     */
    private $isHomePaq;

    /**
     * OperadorPostal
     * @var string
     */
    private $transportCompanyCode;

    /**
     * CodigoEnvioOriginal
     * @var string
     */
    private $originalShipmentCode;

    /**
     * CodigoEnvioOriginal
     * @var string
     */
    private $originalAndReturnShipmentIndicator;

    /**
     * SeguroLI
     * @var string
     */
    private $isInsuredShipping;

    /**
     * ImporteSeguroLI
     * @var string
     */
    private $sumOfInsuranceInEuroCents;

    /**
     * ReembolsoLI
     * @var string
     */
    private $isCODInsured;

    /**
     * ImporteReembolsoLI
     * @var string
     */
    private $sumOfCODInsuranceInEuroCents;

    /**
     * TipoReembolsoLI
     * @var string
     */
    private $typeOfCOD;

    /**
     * NumeroCuentaLI
     * @var string
     */
    private $accountNumberForCODPayment;

    /**
     * TipoModificacion
     * @var string
     */
    private $typeModification;


    /**
     * SendingContent constructor.
     * @param string $tariffProductCode
     * @param string $paymentType
     * @param string $deliveryMode
     * @param PackageSize $packageSize
     * @param SendingInsides $sendingInsides
     * @param string $returnInstructions
     */
    public function __construct(string $tariffProductCode, string $paymentType, string $deliveryMode, PackageSize $packageSize, SendingInsides $sendingInsides, string $returnInstructions = 'D')
    {
        $this->tariffProductCode = $tariffProductCode;
        $this->paymentType = $paymentType;
        $this->deliveryMode = $deliveryMode;
        $this->packageSize = $packageSize;
        $this->sendingInsides = $sendingInsides;
        $this->returnInstructions = $returnInstructions;
    }


    public function buildSendingContent() : DATOSENVIOTYPE
    {

        $existDocumentList = !empty($this->documentList);
        // PRODUCTS TO SHIPPING
        $envio = new DATOSENVIOTYPE(
            $this->codePromotion,
            $this->deliveryMode,
            $this->codeOfSelectedBranchMode,
            $this->packageSize->getLength(),
            $this->packageSize->getHeight(),
            $this->packageSize->getWidth(),
            $this->additionalInfo,
            $this->packingCode,
            $this->codeOfShipmentBranch,
            $this->expectedDepositDate,
            $this->firstLineComments,
            $this->secondLineComments,
            $this->returnInstructions,
            $this->sendingInsides->buildSendingInsides(),
            $this->outWardCode,
            $this->toPackageItems,
            $this->deadlineReverseLogistic,
            $this->returnInstructions,
            $this->tapDestinationCode,
            $this->correosPaqUserId,
            $this->isHomePaq,
            $existDocumentList ? $this->documentList->getFirstDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getFirstDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getFirstDocument()->getObservation() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getObservation() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getObservation() : null,
            $this->transportCompanyCode,
            $this->originalShipmentCode,
            $this->originalAndReturnShipmentIndicator,
            $this->isInsuredShipping,
            $this->sumOfInsuranceInEuroCents,
            $this->isCODInsured,
            $this->sumOfCODInsuranceInEuroCents,
            $this->typeOfCOD,
            $this->accountNumberForCODPayment,
            null,
            $this->typeModification
        );

        $envio->setCodProducto($this->tariffProductCode); // SET TARIFF
        $envio->setReferenciaCliente($this->customerShipmentCode);
        $envio->setTipoFranqueo($this->paymentType);
        $envio->setModalidadEntrega($this->deliveryMode);
        $envio->setPesos($this->packageSize->getWeight());

        return $envio;
    }

    public function buildUpdateSendingContent() : DATOSENVIOMODIFTYPE
    {
        $existDocumentList = !empty($this->documentList);

        $envio = new DATOSENVIOMODIFTYPE(
            $this->customerShipmentCode,
            null,
            null,
            $this->paymentType,
            $this->frankingMachineNumber,
            $this->frankedSumEuroCent,
            $this->codePromotion,
            $this->codeOfSelectedBranchMode,
            $this->packageSize->getWeight(),
            $this->packageSize->getLength(),
            $this->packageSize->getHeight(),
            $this->packageSize->getWidth(),
            $this->additionalInfo,
            $this->packingCode,
            $this->codeOfShipmentBranch,
            $this->expectedDepositDate,
            $this->firstLineComments,
            $this->secondLineComments,
            $this->returnInstructions,
            $this->sendingInsides->buildSendingInsides(),
            $this->outWardCode,
            $this->toPackageItems,
            $this->deadlineReverseLogistic,
            $this->returnInstructions,
            $this->tapDestinationCode,
            $this->correosPaqUserId,
            $this->isHomePaq,
            $existDocumentList ? $this->documentList->getFirstDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getFirstDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getFirstDocument()->getObservation() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getSecondDocument()->getObservation() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getNameToScan() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getScanAndValidate() : null,
            $existDocumentList ? $this->documentList->getThirdDocument()->getObservation() : null,
            $this->transportCompanyCode,
            $this->originalShipmentCode,
            null
        );

        return $envio;
    }
    /**
     * @param string $tariffProductCode
     */
    public function setTariffProductCode(string $tariffProductCode): void
    {
        $this->tariffProductCode = $tariffProductCode;
    }

    /**
     * @param string $customerShipmentCode
     */
    public function setCustomerShipmentCode(string $customerShipmentCode): void
    {
        $this->customerShipmentCode = $customerShipmentCode;
    }

    /**
     * @param string $paymentType
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @param string $frankingMachineNumber
     */
    public function setFrankingMachineNumber(string $frankingMachineNumber): void
    {
        $this->frankingMachineNumber = $frankingMachineNumber;
    }

    /**
     * @param string $frankedSumEuroCent
     */
    public function setFrankedSumEuroCent(string $frankedSumEuroCent): void
    {
        $this->frankedSumEuroCent = $frankedSumEuroCent;
    }

    /**
     * @param string $codePromotion
     */
    public function setCodePromotion(string $codePromotion): void
    {
        $this->codePromotion = $codePromotion;
    }

    /**
     * @param string $deliveryMode
     */
    public function setDeliveryMode(string $deliveryMode): void
    {
        $this->deliveryMode = $deliveryMode;
    }

    /**
     * @param string $codeOfSelectedBranchMode
     */
    public function setCodeOfSelectedBranchMode(string $codeOfSelectedBranchMode): void
    {
        $this->codeOfSelectedBranchMode = $codeOfSelectedBranchMode;
    }

    /**
     * @param PackageSize $packageSize
     */
    public function setPackageSize(PackageSize $packageSize): void
    {
        $this->packageSize = $packageSize;
    }

    /**
     * @param VATYPE $additionalInfo
     */
    public function setAdditionalInfo(VATYPE $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @param string $packingCode
     */
    public function setPackingCode(string $packingCode): void
    {
        $this->packingCode = $packingCode;
    }

    /**
     * @param string $codeOfShipmentBranch
     */
    public function setCodeOfShipmentBranch(string $codeOfShipmentBranch): void
    {
        $this->codeOfShipmentBranch = $codeOfShipmentBranch;
    }

    /**
     * @param \DateTime $expectedDepositDate
     */
    public function setExpectedDepositDate(\DateTime $expectedDepositDate): void
    {
        $this->expectedDepositDate = $expectedDepositDate;
    }

    /**
     * @param string $firstLineComments
     */
    public function setFirstLineComments(string $firstLineComments): void
    {
        $this->firstLineComments = $firstLineComments;
    }

    /**
     * @param string $secondLineComments
     */
    public function setSecondLineComments(string $secondLineComments): void
    {
        $this->secondLineComments = $secondLineComments;
    }

    /**
     * @param string $returnInstructions
     */
    public function setReturnInstructions(string $returnInstructions): void
    {
        $this->returnInstructions = $returnInstructions;
    }

    /**
     * @param DocumentList $documentList
     */
    public function setDocumentList(DocumentList $documentList): void
    {
        $this->documentList = $documentList;
    }

    /**
     * @param SendingInsides $sendingInsides
     */
    public function setSendingInsides(SendingInsides $sendingInsides): void
    {
        $this->sendingInsides = $sendingInsides;
    }

    /**
     * @param string $outWardCode
     */
    public function setOutWardCode(string $outWardCode): void
    {
        $this->outWardCode = $outWardCode;
    }

    /**
     * @param string $toPackageItems
     */
    public function setToPackageItems(string $toPackageItems): void
    {
        $this->toPackageItems = $toPackageItems;
    }

    /**
     * @param \DateTime $deadlineReverseLogistic
     */
    public function setDeadlineReverseLogistic(\DateTime $deadlineReverseLogistic): void
    {
        $this->deadlineReverseLogistic = $deadlineReverseLogistic;
    }

    /**
     * CodigoHomepaq
     * @param string $tapDestinationCode
     */
    public function setTapDestinationCode(string $tapDestinationCode): void
    {
        $this->tapDestinationCode = $tapDestinationCode;
    }

    /**
     * AdmisionHomepaq
     * @param string $isHomePaq
     */
    public function setIsHomePaq(string $isHomePaq): void
    {
        $this->isHomePaq = $isHomePaq;
    }

    /**
     * @param string $transportCompanyCode
     */
    public function setTransportCompanyCode(string $transportCompanyCode): void
    {
        $this->transportCompanyCode = $transportCompanyCode;
    }

    /**
     * @param string $originalShipmentCode
     */
    public function setOriginalShipmentCode(string $originalShipmentCode): void
    {
        $this->originalShipmentCode = $originalShipmentCode;
    }

    /**
     * @param string $originalAndReturnShipmentIndicator
     */
    public function setOriginalAndReturnShipmentIndicator(string $originalAndReturnShipmentIndicator): void
    {
        $this->originalAndReturnShipmentIndicator = $originalAndReturnShipmentIndicator;
    }

    /**
     * @param string $isInsuredShipping
     */
    public function setIsInsuredShipping(string $isInsuredShipping): void
    {
        $this->isInsuredShipping = $isInsuredShipping;
    }

    /**
     * @param string $sumOfInsuranceInEuroCents
     */
    public function setSumOfInsuranceInEuroCents(string $sumOfInsuranceInEuroCents): void
    {
        $this->sumOfInsuranceInEuroCents = $sumOfInsuranceInEuroCents;
    }

    /**
     * @param string $isCODInsured
     */
    public function setIsCODInsured(string $isCODInsured): void
    {
        $this->isCODInsured = $isCODInsured;
    }

    /**
     * @param string $sumOfCODInsuranceInEuroCents
     */
    public function setSumOfCODInsuranceInEuroCents(string $sumOfCODInsuranceInEuroCents): void
    {
        $this->sumOfCODInsuranceInEuroCents = $sumOfCODInsuranceInEuroCents;
    }

    /**
     * @param string $typeOfCOD
     */
    public function setTypeOfCOD(string $typeOfCOD): void
    {
        $this->typeOfCOD = $typeOfCOD;
    }

    /**
     * @param string $accountNumberForCODPayment
     */
    public function setAccountNumberForCODPayment(string $accountNumberForCODPayment): void
    {
        $this->accountNumberForCODPayment = $accountNumberForCODPayment;
    }

    /**
     * @param string $correosPaqUserId
     */
    public function setCorreosPaqUserId(string $correosPaqUserId): void
    {
        $this->correosPaqUserId = $correosPaqUserId;
    }
}