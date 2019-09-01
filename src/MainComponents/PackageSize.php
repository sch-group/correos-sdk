<?php


namespace CorreosSdk\MainComponents;


use CorreosSdk\StructType\Pesos;
use CorreosSdk\StructType\PESOTYPE;

class PackageSize
{
    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * @var string
     */
    private $weight;

    /**
     * PackageSize constructor.
     * @param int $length
     * @param int $height
     * @param int $width
     * @param Weight $weight
     */
    public function __construct(int $length, int $height, int $width, string $weight)
    {
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
    }
    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return Pesos
     */
    public function getWeight(): Pesos
    {
        $peso = new PESOTYPE("R", $this->weight);
        return new Pesos([$peso]);
    }
}