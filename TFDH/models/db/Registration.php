<?php
namespace TFDH\models\db;
use ao\php\framework\models\db\Entiteit;

class Registration EXTENDS Entiteit
{
    private $id;

    protected $payment;
    

    public function __construct()
    {
        $this->id = filter_var($this->id,FILTER_VALIDATE_INT);
    }
}