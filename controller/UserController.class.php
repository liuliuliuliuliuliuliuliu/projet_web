<?php
    class UserController extends Controller {
        protected $user;
        
        
        public function __construct($request) {
            parent::__construct($request);
            //session_start();
            $userId = NULL;
            
            $userId = $request->read('user');
            if(!is_null($userId))
            $this->user = User::getWithId($userId);
            
        }


        public function defaultAction($currentRequest){
            $view = new UserView($this,'information');
            $view ->setUser($this->user);
            $view->render();
        }


            public function profile($currentRequest) {
            $view = new UserView($this,'user');
            $view ->setUser($this->user);
            $view->render();
        }

            public function profile_1($currentRequest) {
                $view = new UserView($this,'etudientHome');
                $view ->setUser($this->user);
                $view->render();
            }

           /*  public function questionnaire($currentRequest) {
                $view = new UserView($this,'Questionnaire');
                $view ->setUser($this->user);
                $view->render();
            } */

    }

?>