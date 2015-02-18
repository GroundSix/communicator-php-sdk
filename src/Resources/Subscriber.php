<?php namespace GroundSix\Communicator\Resources;

/**
 * Class Subscriber
 * @package Resources
 */
class Subscriber {

    /**
     * @var array
     */
    public $ColumnMappings;

    /**
     * @var array
     */
    public $Subscriptions;

    /**
     * @var bool
     */
    public $IsGloballyUnsubscribed = false;


    /**
     * @param $email
     * @param $name
     * @param array $subscriptions
     * @param array $columnMappings
     */
    function __construct($email, $name, array $subscriptions, array $columnMappings)
    {
        $this->ColumnMappings = [
            new ColumnMapping($columnMappings["emailColumnId"], $email),
            new ColumnMapping($columnMappings["nameColumnId"], $name),
        ];

        $this->Subscriptions = array_map(function ($value) {
            return new Subscription($value);
        }, $subscriptions);
    }

    /**
     * @return email
     */
    function getEmail()
    {
        return $this->ColumnMappings[0]->Value;
    }

}