<?php namespace GroundSix\Communicator\Resources;

/**
 * Class ExtractColumn
 * @package GroundSix\Communicator\Resources
 */
class ExtractColumn extends Resource
{
    /**
     * @var
     */
    public $ColumnId;
    /**
     * @var
     */
    public $RelationshipId;

    /**
     * ExtractColumn constructor.
     * @param $ColumnId
     * @param $RelationshipId
     */
    public function __construct($ColumnId, $RelationshipId = 0)
    {
        $this->ColumnId = $ColumnId;
        $this->RelationshipId = $RelationshipId;
    }


}