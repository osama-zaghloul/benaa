<?php
include_once "database.php";
include_once "operation.php";

class news extends Database implements Operations
{

    public function Searchnews()
    {
        $log = parent::Runsearch("select * from news  ");
        return $log;
    }
    public function Search()
    {
        $log = parent::Runsearch("select * from news order by newsDate desc limit 3 ");
        return $log;
    }
    


    public function Add()
    { }
    public function Update()
    { }
    public function Delete()
    { }
}