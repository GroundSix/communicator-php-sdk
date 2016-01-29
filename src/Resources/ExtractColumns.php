<?php namespace GroundSix\Communicator\Resources;

/**
 * Class ExtractColumn
 * @package GroundSix\Communicator\Resources
 */
/**
 * Class ExtractColumns
 * @package GroundSix\Communicator\Resources
 */
class ExtractColumns extends Resource
{
    /**
     * @var ExtractColumn[]
     */
    public $ExtractColumns;

    /**
     * @param array $ExtractColumns
     */
    public function __construct(array $ExtractColumns)
    {
        $this->$ExtractColumns = $ExtractColumns;
    }


}