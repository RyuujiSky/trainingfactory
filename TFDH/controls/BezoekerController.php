<?php

namespace TFDH\controls;
use ao\php\framework\controls\abstractController;

class BezoekerController extends AbstractController {

    public function __construct($control, $model) {
        parent::__construct($control, $model);
    }

    public function defaultAction()
    {
        
    }

    protected function loginAction(){
        if($this->model->isPostLeeg())
        {
            $this->view->set("boodschap","Vul uw gegevens in");
        }
        else
        {
            $resultInlog=$this->model->controleerInloggen();
            switch($resultInlog)
            {
                case REQUEST_SUCCESS:
                    $this->view->set("boodschap","Welkom op de beheers applicatie. Veel werkplezier");
                    $recht = $this->model->getGebruiker()->getRole();
                    $this->forward("default", $recht);
                    break;
                case REQUEST_FAILURE_DATA_INVALID:
                    $this->view->set("boodschap","Gegevens kloppen niet. Probeer opnieuw.");

                    break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    $this->forward("default", "bezoeker");
                    break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    $this->forward("default", "bezoeker");
                    $this->view->set("boodschap","niet alle gegevens ingevuld");
                    break;
            }
        }
    }
    
    public function registerAction(){
         if($this->model->isPostLeeg())
        {
           $this->view->set("boodschap","Vul uw gegevens in");
        }
        else
        {   
            $result=$this->model->register();
            switch($result)
            {
                case REQUEST_SUCCESS:
                     $this->view->set("boodschap","U bent successvol geregistreerd!");                     
                     $this->forward("default");
                     break;
                case REQUEST_FAILURE_DATA_INVALID:
                     $this->view->set('form_data',$_POST);
                     $this->view->set("boodschap","emailadres niet correct of gebruikersnaam bestaat al"); 
                     break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                     $this->view->set('form_data',$_POST);
                     $this->view->set("boodschap","Niet alle gegevens ingevuld");
                     break;
            }
        }    
    }
    
    public function trainingAction(){
        
    }
    
    public function ruleAction(){
        
    }
    
    public function locationAction(){
       
       
    }
    
  
}