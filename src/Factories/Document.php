<?php


namespace CorreosSdk\Factories;


class Document
{
    /**
     * Documento
     * @var int
     */
    private $nameToScan;

    /**
     * AccDocumento
     * possible values 1 or 2
     * @var int
     */
    private $scanAndValidate;

    /**ObsDocumento
     * @var string
     */
    private $observation;

    /**
     * Document constructor.
     * @param int $nameToScan
     * @param int $scanAndValidate
     * @param string $observation
     */
    public function __construct(int $nameToScan = null, int $scanAndValidate = null, string $observation = null)
    {
        $this->nameToScan = $nameToScan;
        $this->scanAndValidate = $scanAndValidate;
        $this->observation = $observation;
    }

    /**
     * @return int
     */
    public function getNameToScan(): int
    {
        return $this->nameToScan;
    }

    /**
     * @return int
     */
    public function getScanAndValidate(): int
    {
        return $this->scanAndValidate;
    }

    /**
     * @return string
     */
    public function getObservation(): string
    {
        return $this->observation;
    }

}