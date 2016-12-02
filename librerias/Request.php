<?php

/**
 * CLASE PARA DEFINIR EL TIPO DE REQUEST WEB
 *
 **/
class Request {
    
    private $dataRequest;
    private $id;
    const POST = 'POST';
    const GET = 'GET';
    const FILES = 'FILES';
    
    public function __construct($dataRequest) {
        $this->dataRequest = $dataRequest;
    }
    
    public function input($inputName){
        $value = null;
        if(isset($this->dataRequest[$inputName])){
            $value = $this->dataRequest[$inputName];
        }
        return $value;
    }
    
    
    public function input2($inputName){
    	$value = null;
    	if(isset($this->dataRequest[$inputName])){
    		$value = $this->dataRequest[$inputName];
    	}
    	return $value;
    }
    
    
}
