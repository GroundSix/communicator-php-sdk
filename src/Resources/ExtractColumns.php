<?php namespace GroundSix\Communicator\Resources;

/**
 * Class ExtractColumns
 * @package GroundSix\Communicator\Resources
 */
class ExtractColumns
{
    /**
     * @var array
     */
    public $ExtractColumns;

    /**
     * @param array $ExtractColumns
     */
    public function __construct(array $ExtractColumns)
    {
        $this->ExtractColumns = $ExtractColumns;
    }

}