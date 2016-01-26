<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class CreateMailingListExtract extends Resource
{
    public $extract;

    /**
     * CreateMailingListExtract constructor.
     * @param $extract
     */
    public function __construct($extract)
    {
        $this->extract = $extract;
    }


}