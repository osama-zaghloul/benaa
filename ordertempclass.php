<?php
include_once "database.php";
include_once "operation.php";

class orderTemp extends Database implements Operations
{
    var $proId, $userName, $supId;
    public function getproId()
    {
        return $this->proId;
    }

    public function setproId($Id)
    {
        $this->proId = $Id;
    }

    public function getuserName()
    {
        return $this->userName;
    }

    public function setuserName($us)
    {
        $this->userName = $us;
    }

    public function getsupId()
    {
        return $this->supId;
    }

    public function setsupId($sup)
    {
        $this->supId = $sup;
    }



    public function Addordertemp($proId,$userName,$supId,$quantity)
    {
        parent::RUNDML("INSERT INTO `ordertemp`(`proId`,`userName`,`supId`,`quantity`) VALUES 
('" . $proId . "','" . $userName . "','" .$supId . "','".$quantity."')", "");
    }
    public function Add()
    { }
    public function Update()
    { }
    public function Delete()
    { }
    public function Search()
    { }
}
