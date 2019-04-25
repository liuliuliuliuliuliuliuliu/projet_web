<?php

class ProfView extends View{
    protected  $user;

	public function __construct($controller,$templateName) {
        parent::__construct($controller,$templateName);
    
        
    }

    public function setUser($user){
        $this->user = $user;

    }
	
}


?>