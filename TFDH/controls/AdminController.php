<?php

namespace TFDH\controls;
use ao\php\framework\controls\abstractController;

class AdminController extends AbstractController {

    public function __construct($control, $model) {
        parent::__construct($control, $model);
    }

    public function defaultAction()
    {
        $gebruiker = $this->model->getGebruiker();
        $this->view->set("gebruiker",$gebruiker);
    }
    
    public function uitloggenAction()
    {
        $this->model->uitloggen();
        $this->forward('default','bezoeker');
    }
    
    public function ledenAction()
    {
        $gebruiker = $this->model->getGebruiker();
        $this->view->set("gebruiker",$gebruiker);
        
        $leden = $this->model->getLeden();
        $this->view->set('leden',$leden);
    }
    
    public function instructeursAction()
    {
        $gebruiker = $this->model->getGebruiker();
        $this->view->set("gebruiker",$gebruiker);
        
        $instructeurs = $this->model->getInstructeurs();
        $this->view->set('instructeurs',$instructeurs);
    }
    
    public function trainingenAction()
    {
        $gebruiker = $this->model->getGebruiker();
        $this->view->set("gebruiker",$gebruiker);
        
        $trainingen = $this->model->getTrainingen();
        $this->view->set('trainingen',$trainingen);
    }
    
    public function addInstructeurAction()
    {
        if($this->model->isPostLeeg())
        {
           $this->view->set("boodschap","Vul gegevens in van de nieuwe instructeur");          
        }
        else
        {   
            $result=$this->model->addInstructeur();
            switch($result)
            {               
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    $this->view->set("boodschap", "instructeur is niet toegevoegd. Niet alle vereiste data ingevuld.");  
                    $this->view->set('form_data',$_POST);
                    break;
                case REQUEST_FAILURE_DATA_INVALID:
                    $this->view->set("boodschap", "instructeur is niet toegevoegd. Er is foutieve data ingestuurd.");  
                    $this->view->set('form_data',$_POST);
                    break;
                case REQUEST_SUCCESS:
                    $this->view->set("boodschap", "instructeur is toegevoegd."); 
                    $this->forward("instructeurs");
                    break;  
            }  
        }
        $instructeurs = $this->model->getInstructeurs();
        $this->view->set('instructeurs',$instructeurs);
        
        $gebruiker = $this->model->getGebruiker();
        $this->view->set('gebruiker',$gebruiker);
    }
    
    public function updateInstructeurAction()
    {
        
    }
    
    public function deleteInstructeurAction()
    {
        $result = $this->model->deleteInstructeur();
        switch($result)
        {
            case REQUEST_FAILURE_DATA_INCOMPLETE:
                $this->view->set('boodschap','geen te verwijderen instructeur gegeven, dus niets verwijderd');
                break;
            case REQUEST_FAILURE_DATA_INVALID:
                $this->view->set('boodschap','te verwijderen instructeur bestaat niet');
                break;
            case REQUEST_NOTHING_CHANGED:
                $this->view->set('boodschap','te verwijderen instructeur bestaat niet.');
                break;
            case REQUEST_SUCCESS:
                $this->view->set('boodschap','Instructeur verwijderd.');
                break;
        }
        $this->forward('instructeurs');
    }
    
    public function addLidAction()
    {
        
    }
    
    public function updateLidAction()
    {
        
    }
    
    public function deleteLidAction()
    {
        $result = $this->model->deleteLid();
        switch($result)
        {
            case REQUEST_FAILURE_DATA_INCOMPLETE:
                $this->view->set('boodschap','geen te verwijderen lid gegeven, dus niets verwijderd');
                break;
            case REQUEST_FAILURE_DATA_INVALID:
                $this->view->set('boodschap','te verwijderen lid bestaat niet');
                break;
            case REQUEST_NOTHING_CHANGED:
                $this->view->set('boodschap','te verwijderen lid bestaat niet.');
                break;
            case REQUEST_SUCCESS:
                $this->view->set('boodschap','Lid verwijderd.');
                break;
        }
        $this->forward('Leden');
    }
    
    public function addTrainingAction()
    {
        if($this->model->isPostLeeg())
        {
           $this->view->set("boodschap","Vul gegevens in van de nieuwe training");          
        }
        else
        {   
            $result=$this->model->addTraining();
            switch($result)
            {               
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    $this->view->set("boodschap", "training is niet toegevoegd. Niet alle vereiste data ingevuld.");  
                    $this->view->set('form_data',$_POST);
                    break;
                case REQUEST_FAILURE_DATA_INVALID:
                    $this->view->set("boodschap", "training is niet toegevoegd. Er is foutieve data ingestuurd.");  
                    $this->view->set('form_data',$_POST);
                    break;
                case REQUEST_SUCCESS:
                    $this->view->set("boodschap", "training is toegevoegd."); 
                    $this->forward("trainingen");
                    break;  
            }  
        }
        $trainingen = $this->model->getTrainingen();
        $this->view->set('trainingen',$trainingen);
        
        $gebruiker = $this->model->getGebruiker();
        $this->view->set('gebruiker',$gebruiker);
    }
    
    public function updateTrainingAction()
    {
        $training = $this->model->getTraining();
        $this->view->set('training',$training);
        
        $gebruiker = $this->model->getGebruiker();
        $this->view->set('gebruiker',$gebruiker);
        
        if($this->model->isPostLeeg())
        {
           $this->view->set("boodschap","Wijzig hier de training gegevens");
        }
        else
        {
            $result = $this->model->updateTraining();
            switch($result)
            {
                case REQUEST_SUCCESS:
                    $this->view->set('boodschap','wijziging gelukt');
                    $this->forward('trainingen');
                    break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                    $this->view->set("boodschap","De gegevens waren incompleet. Vul compleet in!");
                    break;
                case REQUEST_NOTHING_CHANGED:
                    $this->view->set("boodschap","Er was niets te wijzigen");
                    break;
                case REQUEST_FAILURE_DATA_INVALID:
                    $this->view->set("boodschap","Vul correcte gegevens in.");
                    break;
            }             
        }
    }
    
    public function deleteTrainingAction()
    {
        $result = $this->model->deleteTraining();
        switch($result)
        {
            case REQUEST_FAILURE_DATA_INCOMPLETE:
                $this->view->set('boodschap','geen te verwijderen training gegeven, dus niets verwijderd');
                break;
            case REQUEST_FAILURE_DATA_INVALID:
                $this->view->set('boodschap','te verwijderen training bestaat niet');
                break;
            case REQUEST_NOTHING_CHANGED:
                $this->view->set('boodschap','te verwijderen training bestaat niet.');
                break;
            case REQUEST_SUCCESS:
                $this->view->set('boodschap','Training verwijderd.');
                break;
        }
        $this->forward('trainingen');
    }

}