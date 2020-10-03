<?php
include_once "database.php";
include_once "operation.php";


class equipcategory extends Database implements Operations
{

    

    
    


    public function Add()
    { }
    public function Update()
    { }
    public function Delete()
    { }
    public function Search(){
        $log = parent::Runsearch("select * from equipcategories ");
        return $log;
    }
}
