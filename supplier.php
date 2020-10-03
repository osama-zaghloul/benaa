<?php
include_once "database.php";
include_once "operation.php";

class supplier extends Database implements Operations
{
   var $supId , $supName ,$supType , $supCity ,$supArea , $supStreet;

    public function getsupId()
    {
        return $this->supId;
    }

    public function setsupId($Id)
    {
        $this->supId = $Id;
    }

    public function getsupName()
    {
        return $this->supName;
    }

    public function setsupName($na)
    {
        $this->supName = $na;
    }

     public function getsupType()
    {
        return $this->supType;
    }

    public function setsupType($ty)
    {
        $this->supType = $ty;
    }

    public function getsupCity()
    {
        return $this->supCity;
    }

    public function setsupCity($ci)
    {
        $this->supCity = $ci;
    }

    public function getsupArea()
    {
        return $this->supArea;
    }

    public function setsupArea($ar)
    {
        $this->supArea = $ar;
    }

     public function getsupStreet()
    {
        return $this->supStreet;
    }

    public function setsupStreet($st)
    {
        $this->supStreet = $st;
    }








    public function checkmaterial()
    {
        $log = parent::Runsearch("select * from supplier where supType='Materials' limit 10");
        return $log;
    }
    public function checkequipment()
    {
        $log = parent::Runsearch("select * from supplier where supType='Equipments' limit 8");
        return $log;
    }
    public function checksupequipment()
    {
        $log = parent::Runsearch("select * from supplier where supType='Equipments' ");
        return $log;
    }
     public function checksupmaterial()
    {
        $log = parent::Runsearch("select * from supplier where supType='Materials' ");
        return $log;
    }
    public function checksupmaterials($supId)
    
    {
        $log = parent::Runsearch("select * from vw_supmaterials where  supId=$supId ");
        return $log;
    }

    public function checksupequipments($supId)
    
    {
        $log = parent::Runsearch("select * from vw_supequipments where  supId=$supId ");
        return $log;
    }
    


   public function Add()
    {
        return parent::RUNDML("insert into supplier (supName , supType , supCity , supArea , supStreet) values ('" . $this->getsupName() . "','" . $this->getsupType() . "','" . $this->getsupCity() . "','" . $this->getsupArea() . "','" . $this->getsupStreet() . "')", "");
    }
    public function Update()
    {
        
     }
     public function Updatesup($supId)
    {
         return parent::RUNDML("update supplier set supName='" . $this->getsupName() . "',supType='" . $this->getsupType() . "',supCity='" . $this->getsupCity() . "',supArea='" . $this->getsupArea() . "',supStreet='" . $this->getsupStreet(). "' where supId='" . $supId . "'", "ok your data has been updated");
     }
    public function Delete()
    { }
     public function Deletesup($sup)
     {
       return parent::RUNDML(" Delete from supplier where supId= '".$sup."'","");
     }


    public function Search(){
        $log = parent::Runsearch("select * from supplier ");
        return $log;
    }

    public function Searchsup($supId){
        $log = parent::Runsearch("select * from supplier where supId=$supId ");
        return $log;
    }
}
