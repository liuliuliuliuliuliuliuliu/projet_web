<?php
    class AnonymousController extends Controller {
        public function __construct($currentRequest) {
            parent::__construct($currentRequest);
            if(count($_POST)==5)
            $this -> validateInscription($currentRequest);
            else if (count($_POST)==2){
                $this -> Connect($currentRequest);
                /* $this -> createQCM($currentRequest); */
            }
            
            else if (count($_POST)>=11)
            $this -> createQuestionnaire($currentRequest);
            
            else if (count($_POST)==6)
            $this -> createQCM($currentRequest);
            else if (count($_POST)==7)
            $this -> createQCU($currentRequest);
            else if (count($_POST)==3)
            $this -> createQRL($currentRequest);
        }

        public function Connect($currentRequest){
            $user = User::tryLogin($currentRequest->read('inscLogin'),$currentRequest->read('inscPassword'));
            $login = $currentRequest->read('inscLogin');
            $password = $currentRequest->read('inscPassword');
            /***************************** */
            if($login=="luc.fabresse"&&$password=="luc.fabresse"){
                $id = $user->id();
                $newRequest = new Request();
                $newRequest->changeController('user');
                $newRequest->write('user',$id);
                $controller = Dispatcher::dispatch($newRequest);
                $controller -> execute_1();
            }
            else if($user) {
                $id = $user->id();
                $newRequest = new Request();
                $newRequest->changeController('user');
                $newRequest->write('user',$id);
                $controller = Dispatcher::dispatch($newRequest);
                $controller -> execute_2();
            }
            else {
                $view = new View($this,'signIn');
                $view->render();
                echo("<script>alert('login ou mot de pass incorrect！');</script>");
            }
        }
        
        public function defaultAction($currentRequest){
            $view = new AnonymousView($this,'head');
            $view->render();
        }
        //******************************************** */
        public function profile($currentRequest){
            $view = new AnonymousView($this,'head');
            $view->render();
        }
        public function inscription($currentRequest){
            $view = new AnonymousView($this,'inscription');
            $view->render();
        }
        public function signIn($currentRequest){
            $view = new AnonymousView($this,'signIn');
            $view->render();
        }

        public function validateInscription($request) {
            $login = $request->read('inscLogin');
            if(User::isLoginUsed($login)) {
                $view = new View($this,'inscription'); 
                /* $view->setArg('inscErrorText','This login is already used'); */
                echo("<script>alert('This login is already used');</script>");
                $view->render();
            } 
            else {
            $password = $request->read('inscPassword');
            $nom = $request->read('nom');
            $prenom = $request->read('prenom');
            $mail = $request->read('mail');
            $user = User:: create($login, $password,$nom,$prenom,$mail);
            /* if(!isset($user)) { */
             /*    $view = new View($this,'inscription');
                $view->setArg('inscErrorText', 'Cannot complete inscription');
                $view->render(); */
           /*  } 
            else { */
                $id = $user->id();
                $newRequest = new Request();
                $newRequest->changeController('user');
                $newRequest->write('user',$id);
                $controller = Dispatcher::dispatch($newRequest);
                $controller -> execute();
           /*  } */
            }
        }
          public function createQuestionnaire($request){
            print_r($_POST);
            
            $titre=$request->read('QuestionnaireTitre');
            $mail_questionnaire=$request->read("QuestionnaireMail");
            $description=$request->read("QuestionnaireDescription");
            $dateOuverture=$request->read("QuestionnaireDateOuverture");
            $dateFermeture=$request->read("QuestionnaireDateFermeture");
            $idEtat=$request->read("QuestionnaireEtat");

            $idModeAcces=$request->read("QuestionnaireAcces");
            $matricule=$request->read("QuestionnaireMatricule");
            $supprimable=$request->read("QuestionnaireSupprimable");
            $retourarriere=$request->read("QuestionnaireRetourArriere");
            $temps=$request->read("QuestionnaireTemps");
            $modifiable=$request->read("QuestionnaireModifiable");
            User:: create_1($titre, $description,$idModeAcces,$idEtat,$mail_questionnaire,$matricule,$dateOuverture,$dateFermeture,$modifiable,$supprimable,$temps,$retourarriere);
            echo("<script>alert('Questionnaire crée avec succès');</script>");
            
        } 
        public function createQCM($request){
            print_r($_POST);
            
            $idTypeQuestion=1;
           
            $timeQuestion=$request->read("QuestionTime");
            $questionText=$request->read("Question");
            $reponseQCM1=$request ->read("ReponseQCM1");
            $reponseQCM2=$request ->read("ReponseQCM2");
            $reponseQCM3=$request ->read("ReponseQCM3");
            $reponseQCM4=$request ->read("ReponseQCM4");
            User:: create_2($idTypeQuestion,$timeQuestion,$questionText);
            echo("<script>alert('Question crée avec succès');</script>");
            
        } 
        public function createQCU($request){
            print_r($_POST);
            
            $idTypeQuestion=2;
           
            $timeQuestion=$request->read("QuestionTime");
            $questionText=$request->read("Question");
            $reponseQCU1=$request ->read("ReponseQCU1");
            $reponseQCU2=$request ->read("ReponseQCU2");
            $reponseQCU3=$request ->read("ReponseQCU3");
            $reponseQCU4=$request ->read("ReponseQCU4");
            $reponseQCU=$request ->read("ReponseQCU");
            User:: create_2($idTypeQuestion,$timeQuestion,$questionText);
            
            User:: create_reponse2($reponseQCU1,$reponseQCU2,$reponseQCU3,$reponseQCU4,$reponseQCU);
            echo("<script>alert('Question crée avec succès');</script>");
            
        } 
        public function createQRL($request){
            print_r($_POST);
            
            $idTypeQuestion=3;
           
            $timeQuestion=$request->read("QuestionTime");
            $questionText=$request->read("Question");
            $reponseQRL=$request ->read("ReponseQRL");
           
            User:: create_2($idTypeQuestion,$timeQuestion,$questionText);
            
            User:: create_reponse3($reponseQRL);
            echo("<script>alert('Question crée avec succès');</script>");
            
        } 
        public function voir_questionnaire($request) {
            $idQuestionnaire=$request->read('QuestionnaireID');
            User:: findQuestionnaire($idQuestionnaire);
            $view = new UserView($this,'questionnaire');
            //$view ->setUser($this->user);
            $view->render();
        }
    }

    ?>