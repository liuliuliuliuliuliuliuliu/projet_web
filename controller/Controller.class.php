<?php
abstract class Controller extends MyObject {
    private $request;
    public function __construct($currentRequest) {
        $this->request = $currentRequest;
    }
    
    Abstract function defaultAction($currentRequest);

    public function execute(){
        $getaction=$this->request->getAction();
        if(!$getaction){
            $this->defaultAction($this->request);
      }
       else {
            $action = $getaction;
           $this->$action($this->request);
        }
    }
    public function execute_1(){
        $getaction=$this->request->getAction();
        if(!$getaction){
            $this->profile($this->request);
      }
       else {
            $action = $getaction;
           $this->$action($this->request);
        }
    }
    public function execute_2(){
        $getaction=$this->request->getAction();
        if(!$getaction){
            $this->profile_1($this->request);
      }
       else {
            $action = $getaction;
           $this->$action($this->request);
        }
    }

    public function questionnaire(){
        $getaction=$this->request->getAction();
        if(!$getaction){
            $this->questionnaire($this->request);
      }
       else {
            $action = $getaction;
           $this->$action($this->request);
        }
    }
    
    }






?>