<?php

namespace TFDH\models;
use ao\php\framework\models\AbstractModel;

class BezoekerModel extends AbstractModel {

    public function __construct($control, $model) {
        parent::__construct($control, $model);
    }
    
    public function controleerInloggen()
    {
        $ln=  filter_input(INPUT_POST, 'username');
        $pw=  filter_input(INPUT_POST, 'password');
        
        if ( ($ln!==null) && ($pw!==null) )
        {
             $sql = 'SELECT * FROM `Person` WHERE `loginname` = :ln AND `password` = :pw';
             $sth = $this->dbh->prepare($sql);
             $sth->bindParam(':ln',$ln);
             $sth->bindParam(':pw',$pw);
             $sth->execute();
             
             $result = $sth->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__.'\db\Person');
             
             if(count($result) === 1)
             {   
                 $this->startSession();   
                 $_SESSION['gebruiker']=$result[0];
                 return REQUEST_SUCCESS;
             }
             return REQUEST_FAILURE_DATA_INVALID;
        }
        return REQUEST_FAILURE_DATA_INCOMPLETE;
    }
    
    public function register(){
        $fn= filter_input(INPUT_POST, 'fn');
        $pp= filter_input(INPUT_POST, 'pp');
        $ln=filter_input(INPUT_POST, 'ln');
        $dob=filter_input(INPUT_POST, 'dob');
        $un=filter_input(INPUT_POST, 'un');
        $pw=filter_input(INPUT_POST,'pw');
        $pw2=filter_input(INPUT_POST,'pw2');
        $gender=filter_input(INPUT_POST,'gender');
        $st=filter_input(INPUT_POST,'st');
        $pc=filter_input(INPUT_POST,'pc');
        $ct=filter_input(INPUT_POST,'ct');
        $em=filter_input(INPUT_POST,'em',FILTER_VALIDATE_EMAIL);
        
        if($fn===null || $ln===null || $dob===null || $un===null ||$pw===null ||$pw2===null|| $gender===null || $st==NULL || $pc==NULL || $ct==NULL || $em==NULL)
        {
            return REQUEST_FAILURE_DATA_INCOMPLETE;
        }
        
        if( $em===false)
        {
            return REQUEST_FAILURE_DATA_INVALID;
        }
        
        if($pw === $pw2)
        {
            $sql=   "INSERT INTO `Person`  (loginname,password,firstname,preprovision, 
                lastname,dateofbirth,gender,emailaddress,street,postal_code,place,role)
                VALUES (:loginname,:password,:firstname,:preprovision, 
                :lastname,:dateofbirth,:gender,:emailaddress,:street,:postal_code,:place,'Lid') ";
            $stmnt = $this->dbh->prepare($sql);
        }
        else{
           return REQUEST_FAILURE_DATA_INVALID; 
        }
        $stmnt->bindParam(':loginname', $un);
        $stmnt->bindParam(':password', $pw2);
        $stmnt->bindParam(':firstname', $fn);
        $stmnt->bindParam(':preprovision', $pp);
        $stmnt->bindParam(':lastname', $ln);
        $stmnt->bindParam(':dateofbirth', $dob);
        $stmnt->bindParam(':gender', $gender);
        $stmnt->bindParam(':emailaddress', $em);
        $stmnt->bindParam(':street', $st);
        $stmnt->bindParam(':postal_code', $pc);
        $stmnt->bindParam(':place', $ct);
        
        try
        {
            $stmnt->execute();
        }
        catch(\PDOEXception $e)
        {
            return REQUEST_FAILURE_DATA_INVALID;
        }
        
        if($stmnt->rowCount()===1)
        {            
            return REQUEST_SUCCESS;
        }
        return REQUEST_FAILURE_DATA_INVALID; 
    }
    
}