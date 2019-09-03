<?php


namespace CorreosSdk\Factories;


use CorreosSdk\StructType\DescAduanera;

class ProductList
{
    /**
     * @var array
     */
    private $productDescriptionList;

    public function __construct()
    {
        $this->productDescriptionList = [];
    }

    public function addProduct(ProductDescription $productDescription)
    {
        array_push($this->productDescriptionList, $productDescription);
    }

    public function buildProductList() : DescAduanera
    {
        $resultProductList = [];
        foreach ($this->productDescriptionList as $productDescription) {
            /**
             * @var ProductDescription $productDescription
             */
            $resultProductList[] = $productDescription->buildProduct();
        }

        return new DescAduanera($resultProductList);
    }
}