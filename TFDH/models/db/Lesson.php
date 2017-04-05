<?php
namespace TFDH\models\db;
use ao\php\framework\models\db\Entiteit;

class Lesson EXTENDS Entiteit
{
    private $id;

    protected $time;
    protected $date;
    protected $location;
    protected $max_persons;
    

    public function __construct()
    {
        $this->id = filter_var($this->id,FILTER_VALIDATE_INT);
    }
}