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
}