<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class DataImporter extends Resource {

	/**
	 * @var
     */
	public $dataImport;

	/**
	 * @param $dataImport
     */
	public function __construct($dataImport)
	{
		$this->dataImport = $dataImport;
	}
}
