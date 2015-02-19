<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class DataImporterViaFTP extends Resource {

    public $dataImport;

    function __construct($dataImport)
    {
        $this->dataImport = $dataImport;
    }


}