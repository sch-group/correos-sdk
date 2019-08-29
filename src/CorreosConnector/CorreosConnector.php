<?php

namespace CorreosSdk\CorreosConnector;

use CorreosSdk\ServiceType\Solicitud;
use CorreosSdk\StructType\SolicitudEtiqueta;

class CorreosConnector
{
    /**
     * @var CorreosConfig
     */
   private $correosConfig;

    /**
     * CorreosConnector constructor.
     * @param CorreosConfig $correosConfig
     */
    public function __construct(CorreosConfig $correosConfig)
    {
        $this->correosConfig = $correosConfig;
    }

    public function printReceipt()
    {
        $documentationService = new Solicitud($this->correosConfig->getOptions());
        $codEtiquetador = "69RH"; // CLIENT CODE
        $numCliente = "81099174"; // CLIENT NUMBER
        $numContrator = "54034824"; // CLIENT CONTRACT NUMBER
        $care = "000000"; // insurance

        $SolicitudEtiqueta = new SolicitudEtiqueta(
            "27-08-2019 06:24:00",
            $codEtiquetador,
            $numContrator,
            $numCliente,
            "LX403740086ES",
            $care,
            "2"
        );

        $result = $documentationService->SolicitudEtiquetaOp($SolicitudEtiqueta);
        $file = $result->Bulto->Etiqueta->Etiqueta_pdf->Fichero;

        return $file;
    }


}