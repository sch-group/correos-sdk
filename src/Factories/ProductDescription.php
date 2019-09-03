<?php


namespace CorreosSdk\Factories;


use CorreosSdk\StructType\DATOSADUANATYPE;

class ProductDescription
{
    /**
     * Cantidad
     * @var int
     */
    private $quantity;

    /**
     * Descripcion
     * 189 for Seeds
     * See Annex 2 table
     * @var string
     */
    private $descriptionCode;

    /**
     * Pesoneto
     * @var int
     */
    private $oneProductWeight;

    /**
     * Valorneto
     * @var string
     */
    private $priceInEuroCent;

    /**
     * NTarifario
     * @var string
     */
    private $tariffNumber;

    /**
     * PaisOrigen
     * @var string
     */
    private $originCountryCode;

    /**
     * ProductDescription constructor.
     * @param int $quantity
     * @param string $descriptionCode
     * @param int $oneProductWeight
     * @param string $priceInEuroCent
     * @param string $tariffNumber
     * @param string $originCountryCode
     */
    public function __construct(int $quantity, string $descriptionCode, int $oneProductWeight, string $priceInEuroCent, string $tariffNumber = null, $originCountryCode = null)
    {
        $this->quantity = $quantity;
        $this->descriptionCode = $descriptionCode;
        $this->oneProductWeight = $oneProductWeight;
        $this->priceInEuroCent = $priceInEuroCent;
        $this->tariffNumber = $tariffNumber;
        $this->originCountryCode = $originCountryCode;
    }

    public function buildProduct() : DATOSADUANATYPE
    {
        return new DATOSADUANATYPE(
            $this->quantity,
            $this->descriptionCode,
            $this->oneProductWeight,
            $this->priceInEuroCent,
            null,
            null
        );
    }

}