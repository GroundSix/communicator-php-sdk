<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class GetMailingListColumns extends Resource
{
    public $mailingListId;

    /**
     * GetMailingListColumns constructor.
     * @param $mailingListId
     */
    public function __construct($mailingListId)
    {
        $this->$mailingListId = $mailingListId;
    }


}