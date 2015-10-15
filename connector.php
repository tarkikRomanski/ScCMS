<?php
namespace Connector;


class connector
{
    private $db_name = null;
    public function __construct($db_name){
        $this->getDbName($db_name);
    }


    public function getDbName()
    {
        return $this->db_name;
    }

    public function setDbName($db_name)
    {
        $this->db_name = $db_name;
    }
}