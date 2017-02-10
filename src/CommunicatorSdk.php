<?php namespace GroundSix\Communicator;

use GroundSix\Communicator\Resources\Resource;
use GroundSix\Communicator\Resources\CommunicatorCredentials;
use ReflectionClass;
use SoapHeader;
use SoapClient;
class CommunicatorSdk {

	public $communicatorCredentials;
	protected $services = [];

	public function __construct($username, $password)
	{
		$this->communicatorCredentials = new CommunicatorCredentials;
		$this->communicatorCredentials->username = $username;
		$this->communicatorCredentials->password = $password;
	}

	public function post(Resource $resource) {
		$resource_reflection = new ReflectionClass($resource);
		$service = $this->service($resource_reflection->getNamespaceName());

		$header_reflection = new ReflectionClass($service->header);
		$name = $resource_reflection->getShortName();

		$header_name = $header_reflection->getShortName();

		$client = new SoapClient($service->url . '?WSDL', array("trace" => 1, 'soap_version' => \SOAP_1_2));

		$header = new SoapHeader('http://ws.communicatorcorp.com/', $header_name, $service->header);
		$client->__setSoapHeaders($header);

        // Progressive Backoff attempts to the API before giving up
        $attempts = 5;
        for ($attempt = 1; $attempt <= $attempts; $attempt++) {
            try {
                return $client->{$name}((array) $resource);
            } catch (\SoapFault $e) {

                // If we have maxed out our attempts, throw the exception
                if ($attempt == $attempts) {
                    throw $e;
                }

                // Backoff 1.5 ^ $attempt seconds
                $timeout = (1.5 ** $attempt) * 1000000;
                usleep($timeout);
            }
        }
	}

	protected function service($type)
	{
		if (! isset($this->services[$type])) {
			$service = str_replace('GroundSix\\Communicator\\', '\\GroundSix\\Communicator\\Services\\', $type);
			if (! class_exists($service)) {
				throw new Services\ServiceException("Unknown service: " . $service);
			}
			$this->services[$type] = new $service;

			$this->services[$type]->addHeader($this->communicatorCredentials);
		}
		return $this->services[$type];
	}

}
