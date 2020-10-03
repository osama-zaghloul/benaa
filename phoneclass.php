<?php
include_once "database.php";
include_once "operation.php";

class phone extends Database implements Operations
{
   var $supId , $supPhone;

    public function getsupId()
    {
        return $this->supId;
    }

    public function setsupId($Id)
    {
        $this->supId = $Id;
    }

    public function getsupPhone()
    {
        return $this->supPhone;
    }

    public function setsupPhone($ph)
    {
        $this->supPhone = $ph;
    }

    

   public function Add()
    {
        return parent::RUNDML("insert into supplier_phone (supId_fk,supPhone) values('".$this->getsupId()."','" . $this->getsupPhone() . "')", "");
    }
    public function Update()
    {
        
     }
     public function Updatephone($supId)
    {
         return parent::RUNDML("update supplier_phone set supPhone='" . $this->getsupPhone() . "' where supId_fk='" . $supId . "'", "ok phone has been updated");
     }
    public function Delete()
    { 

    }
     public function Deleteph($sup)
     {
       return parent::RUNDML(" Delete from supplier_phone where supId_fk= '".$sup."'","");
     }


    public function Search()
    {
        $log = parent::Runsearch("select * from supplier_phone ");
        return $log;
    }

    public function Searchsup($supId)
    {
        $log = parent::Runsearch("select * from supplier where supId=$supId ");
        return $log;
    }
}
