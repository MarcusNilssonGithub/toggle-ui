<?php

namespace Toggle\Controller;
use Toggle\Model\RequestHandler;

class Controller  {

    public function turnOn($command){
        $requestHandler=new RequestHandler();       
        return $requestHandler->turnOn($command);
    }	

}
