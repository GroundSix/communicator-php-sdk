<?php namespace GroundSix\Communicator\DataService;

use GroundSix\Communicator\Resources\Resource;

class FTPDataImport extends Resource {

    /**
     * @var integer
     */
    public $Id;
    /**
     * @var integer
     */
    public $ClientTableId;
    /**
     * @var string
     */
    public $Type;
    /**
     * @var string
     */
    public $Filename;
    /**
     * @var string
     */
    public $Delimiter;
    /**
     * @var string
     */
    public $FormatDate;
    /**
     * @var array
     */
    public $Subscriptions;
    /**
     * @var array
     */
    public $TriggeredDispatches;
    /**
     * @var DataImportStatus
     */
    public $Status;
    /**
     * @var integer
     */
    public $TotalSuccess;
    /**
     * @var integer
     */
    public $TotalFailed;
    /**
     * @var integer
     */
    public $RecordCount;

    /**
     * @param $Id
     * @param $ClientTableId
     * @param string $Type
     * @param $Filename
     * @param $Delimiter
     * @param string $FormatDate
     * @param array $Subscriptions
     * @param array $TriggeredDispatches
     * @param $Status
     * @param $TotalSuccess
     * @param $TotalFailed
     * @param $RecordCount
     */
    function __construct($Id, $ClientTableId, $Type = "Insert", $Filename, $Delimiter, $FormatDate = "yyyy-mm-dd", $Subscriptions = [], $TriggeredDispatches = [], $Status, $TotalSuccess, $TotalFailed, $RecordCount)
    {
        $this->Id = $Id;
        $this->ClientTableId = $ClientTableId;
        $this->Type = $Type;
        $this->Filename = $Filename;
        $this->Delimiter = $Delimiter;
        $this->FormatDate = $FormatDate;
        $this->Subscriptions = $Subscriptions;
        $this->TriggeredDispatches = $TriggeredDispatches;
        $this->Status = $Status;
        $this->TotalSuccess = $TotalSuccess;
        $this->TotalFailed = $TotalFailed;
        $this->RecordCount = $RecordCount;
    }

}