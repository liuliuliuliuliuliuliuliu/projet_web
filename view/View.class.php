<?php
    
        class View extends MyObject {
            protected $args;
            protected $templateNames;
        
            public function __construct($controller,$templateName) {
                
                $request = Request::getCurrentRequest();


                $this->templateNames = array();
                $this->templateNames['head'] = 'head';
                $this->templateNames['top'] = 'top';
                $this->templateNames['foot'] = 'foot';
                $this->templateNames['content'] = $templateName;
                
            }
            public function setArg($key, $val) {
                $this->args[$key] = $val;
            }
            
            public function render() {
                $this->loadTemplate($this->templateNames['head'], $this->args);
                $this->loadTemplate($this->templateNames['top'], $this->args);
                $this->loadTemplate($this->templateNames['content'], $this->args);
                $this->loadTemplate($this->templateNames['foot'], $this->args);
                /* $this->loadTemplate($this->templateNames['information'], $this->args); */
                /* $this->__ROOT_DIR . 'index_login.php'; */
            }
            /*  public function rester_inscription(){
                $this->__ROOT_DIR . 'index_creecompte.php';
            } */
        
            public function loadTemplate($name,$args=NULL) {
                $templateFileName =__ROOT_DIR  . '/templates/'. $name . 'Template.php';
                if(is_readable($templateFileName)) {
                    if(isset($args))
                        foreach($args as $key => $value)
                    $$key = $value;
                 require_once($templateFileName);
                }
                else
                    throw new Exception('undefined template "' . $name .'"');
            }

           

        }  
            
    ?>