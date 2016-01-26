<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class GetTableExtract extends Resource
{
    public $extractId;

    /**
     * GetMailingListExtract constructor.
     * @param $extractId
     */
    public function __construct($extractId)
    {
        $this->extractId = $extractId;
    }


}