<?php namespace GroundSix\Communicator\Resources; 

class DataImportSubscription extends Resource {

    /**
     * @var integer
     */
    public $MailingListId;
    /**
     * @var
     */
    public $SubscriptionMethod;

    /**
     * @param $MailingListId
     * @param $SubscriptionMethod
     */
    function __construct($MailingListId, $SubscriptionMethod)
    {
        $this->MailingListId = $MailingListId;
        $this->SubscriptionMethod = $SubscriptionMethod;
    }


}