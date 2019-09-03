<?php

namespace CorreosSdk\Factories;

use CorreosSdk\StructType\DIRECCIONTYPE;

class Address
{
    /**
     * Tipo (C, AV, etc) street/avenue/etc
     * @var string
     */
    private $streetType;
    /**
     *  Direccion
     * @var string
     */
    private $streetName;

    /**
     * Numero
     * @var string
     */
    private $streetNumber;

    /**
     * Portal
     * @var string
     */
    private $streetDoor;

    /**
     * Bloque
     * @var string
     */
    private $blockNumber;

    /**
     * Escalera
     * @var string
     */
    private $blockStairNumber;

    /**
     * Piso
     * @var string
     */
    private $blockFloorNumber;

    /**
     * Puerta
     * @var string
     */
    private $doorNumber;

    /**
     * Localidad
     * @var string
     */
    private $cityName;

    /**
     * Provincia
     * @var string
     */
    private $provinceName;

    /**
     * Address constructor.
     * @param string $cityName
     * @param string $streetName
     * @param string|null $provinceName
     * @param string|null $streetNumber
     * @param string|null $streetDoor
     * @param string|null $streetType
     * @param string|null $blockNumber
     * @param string|null $blockStairNumber
     * @param string|null $blockFloorNumber
     * @param string|null $doorNumber
     */
    public function __construct(
        string $cityName,
        string $streetName,
        string $provinceName = null,
        string $streetNumber = null,
        string $streetDoor = null,
        string $streetType = null,
        string $blockNumber = null,
        string $blockStairNumber = null,
        string $blockFloorNumber = null,
        string $doorNumber = null
    ) {
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
        $this->streetDoor = $streetDoor;
        $this->blockNumber = $blockNumber;
        $this->blockStairNumber = $blockStairNumber;
        $this->blockFloorNumber = $blockFloorNumber;
        $this->doorNumber = $doorNumber;
        $this->cityName = $cityName;
        $this->provinceName = $provinceName;
        $this->streetType = $streetType;
    }

    /**
     * @return DIRECCIONTYPE
     */
    public function buildDirection(): DIRECCIONTYPE
    {
        return new DIRECCIONTYPE(
            $this->streetType,
            $this->streetName,
            $this->streetNumber,
            $this->streetDoor,
            $this->blockNumber,
            $this->blockStairNumber,
            $this->blockFloorNumber,
            $this->doorNumber,
            $this->cityName,
            $this->provinceName
        );
    }
}