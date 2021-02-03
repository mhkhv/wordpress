<?php

abstract  class onlineGateway{
    protected $option;

    public function __construct()
    {
        $this->option=array(
            "melat"=>array(
              "username"=>"asasd"
            ),
            "saman"=>array(
                "username"=>"afsdsg"
            )
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();
}

class Mellat extends onlineGateway{

    private $gatewayName;
    public function __construct()
    {

    }
    public function sendRequest()
    {
        var_dump($this->option);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}