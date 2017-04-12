<?php
namespace TFDH\models\db;
use ao\php\framework\models\db\Entiteit;

class Person EXTENDS Entiteit
{
    protected $id;
    protected $loginname;
    protected $password;
    protected $preprovision;
    protected $lastname;
    protected $dateofbirth;
    protected $gender;
    protected $emailaddress;
    protected $hiring_date;
    protected $salary;
    protected $street;
    protected $postal_code;
    protected $place;
    protected $role;

    public function __construct()
    {
        $this->id = filter_var($this->id,FILTER_VALIDATE_INT);
    }
}