<?php

namespace CorreosSdk\Factories;

use CorreosSdk\StructType\IDENTIFICACIONTYPE;

class Identification
{
    /**
     * Nombre
     * @var string
     */
    private $senderName;

    /**
     * Apellido 1
     * @var string
     */
    private $firstName;

    /**
     * Apellido 2
     * @var string
     */
    private $lastName;

    /**
     * Nif
     * @var string
     */
    private $taxIdentificationNumber;

    /**
     * Empressa
     * @var string
     */
    private $companyName;

    /**
     * PesonaContacto
     * @var string
     */
    private $contactPerson;

    /**
     * SenderIdentification constructor.
     * @param string $senderName
     * @param string $companyName
     * @param string $contactPerson
     * @param string $firstName
     * @param string|null $lastName
     * @param string $taxIdentificationNumber
     */
    public function __construct(string $senderName = null, string $firstName = null, string $lastName = null, string $companyName = null, string $contactPerson = null, string $taxIdentificationNumber = null)
    {
        $this->senderName = $senderName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        $this->companyName = $companyName;
        $this->contactPerson = $contactPerson;
    }

    /**
     * @return IDENTIFICACIONTYPE
     */
    public function buildIdentification() : IDENTIFICACIONTYPE
    {
        $identificationType = new IDENTIFICACIONTYPE($this->contactPerson);
        $identificationType->setNombre($this->senderName);
        $identificationType->setApellido1($this->firstName);
        $identificationType->setApellido2($this->lastName);
        $identificationType->setEmpresa($this->companyName);
        $identificationType->setNif($this->taxIdentificationNumber);
        $identificationType->setPersonaContacto($this->contactPerson);

        return $identificationType;
    }

}