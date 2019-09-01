<?php


namespace CorreosSdk\MainComponents;


use CorreosSdk\StructType\ADUANATYPE;

/**
 * ADUANATYPE
 * Class SendingInsides
 * @package CorreosSdk\MainComponents
 */
class SendingInsides
{
    const DOCUMENTS_CONTENT_TYPE = '1';

    const GOODS_CONTENT_TYPE = '2';

    const GIFTS_CONTENT_TYPE = '3';

    const COMMERCIAL_SAMPLES_CONTENT_TYPE = '4';

    const RETURNED_GOODS_CONTENT_TYPE = '5';

    const OTHER_CONTENT_TYPE = '6';

    /**
     * @var string
     */
    private $sendingContentType;
    /**
     * EnvioComercial
     * @var string
     */
    private $isCommercialShipment;

    /**
     * FacturaSuperiora500
     * @var string
     */
    private $isShipmentMoreThanFiveHundredsEUR;

    /**
     * DUAConCorreos
     * @var string
     */
    private $isHandleDuaExportByCorreos;

    /**
     *  List DescAduanera
     * @var ProductList
     */
    private $productList;

    /**
     * Factura
     * @var string
     */
    private $invoiceIncludedInShipment;

    /**
     * Licensia
     * @var string
     */
    private $licenseIncludedInShipment;

    /**
     * Certificado
     * @var string
     */
    private $certificateIncludedInShipment;

    /**
     * SendingInsides constructor.
     * @param string $sendingContentType
     * @param string $isCommercialShipment
     * @param string $isShipmentMoreThanFiveHundredsEUR
     * @param ProductDescription $productList
     * @param string|null $isHandleDuaExportByCorreos
     * @param string|null $invoiceIncludedInShipment
     * @param string|null $licenseIncludedInShipment
     * @param string|null $certificateIncludedInShipment
     */
    public function __construct(string $sendingContentType, string $isCommercialShipment, string $isShipmentMoreThanFiveHundredsEUR, ProductList $productList, string $isHandleDuaExportByCorreos = null, string $invoiceIncludedInShipment = null, string $licenseIncludedInShipment = null, string $certificateIncludedInShipment = null)
    {
        $this->sendingContentType = $sendingContentType;
        $this->isCommercialShipment = $isCommercialShipment;
        $this->isShipmentMoreThanFiveHundredsEUR = $isShipmentMoreThanFiveHundredsEUR;
        $this->productList = $productList;
        $this->invoiceIncludedInShipment = $invoiceIncludedInShipment;
        $this->licenseIncludedInShipment = $licenseIncludedInShipment;
        $this->certificateIncludedInShipment = $certificateIncludedInShipment;
        $this->isHandleDuaExportByCorreos = $isHandleDuaExportByCorreos;
    }

    public function buildSendingInsides() : ADUANATYPE
    {
        return new ADUANATYPE(
            $this->sendingContentType,
            $this->isCommercialShipment,
            $this->isShipmentMoreThanFiveHundredsEUR,
            $this->isHandleDuaExportByCorreos,
            $this->productList->buildProductList(),
            !empty($this->invoiceIncludedInShipment) ? "S" : null,
            $this->invoiceIncludedInShipment,
            !empty($this->licenseIncludedInShipment) ? "S" : null,
            $this->licenseIncludedInShipment,
            !empty($this->certificateIncludedInShipment) ? "S" : null,
            $this->certificateIncludedInShipment,
            null,
            null,
            null,
            null,
            null,
            null
        );
    }

}