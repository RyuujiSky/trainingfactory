<?php
namespace TFDH\models\db;
use ao\php\framework\models\db\Entiteit;

class Training EXTENDS Entiteit
{
    private $id;

    protected $description;
    protected $duration;
    protected $extra_costs;
    

    public function __construct()
    {
        $this->id = filter_var($this->id,FILTER_VALIDATE_INT);
    }
}