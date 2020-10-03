<?php
include_once "database.php";
include_once "operation.php";

class client extends Database implements Operations
{
    var $clientId, $Email, $password, $userName, $firstName, $lastName, $clientPhone;

    public function getclientId()
    {
        return $this->clientId;
    }

    public function setclientId($Id)
    {
        $this->clientId = $Id;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Em)
    {
        $this->Email = $Em;
    }

    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($pa)
    {
        $this->password = $pa;
    }

    public function getuserName()
    {
        return $this->userName;
    }

    public function setuserName($us)
    {
        $this->userName = $us;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setfirstName($fi)
    {
        $this->firstName = $fi;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setlastName($la)
    {
        $this->lastName = $la;
    }

    public function getclientPhone()
    {
        return $this->clientPhone;
    }

    public function setclientPhone($ph)
    {
        $this->clientPhone = $ph;
    }

    public function Add()
    {
        return parent::RUNDML("insert into client values ('" . $this->getclientId() . "','" . $this->getEmail() . "','" . $this->getpassword() . "','" . $this->getuserName() . "','" . $this->getfirstName() . "','" . $this->getlastName() . "','" . $this->getclientPhone() . "')", "ok you are logged in");
    }







    //log in function

    public function login()
    {
        $log = parent::Runsearch("select * from client where (userName='" . $this->getuserName() . "' or Email='" . $this->getEmail() . "') and password='" . $this->getpassword() . "'");
        return $log;
    }

    public function checkuser()
    {
        $log = parent::Runsearch("select * from client where (userName='" . $this->getuserName() . "' or Email='" . $this->getEmail() . "')");
        return $log;
    }

    public function Updatepw()
    {

        return parent::RUNDML("update client set password='" . $this->getpassword() . "'where (userName='" . $this->getuserName() . "' or Email='" . $this->getEmail() . "')", "password updated");
    }

    public function Delete()
    {

        return parent::RUNDML("delete * from client where (userName='" . $this->getuserName() . "' or Email='" . $this->getEmail() . "')", "");
    }


    public function Update()
    {
        return parent::RUNDML("update client set Email='" . $this->getEmail() . "',password='" . $this->getpassword() . "',firstName='" . $this->getfirstName() . "',lastName='" . $this->getlastName() . "',clientPhone='" . $this->getclientPhone() . "'where userName='" . $this->getuserName() . "'", "ok your profile has been updated");
    }

    // public function checkcomment()
    // {
    //     $log = parent::Runsearch("select client.userName,comment.commentContent from client inner join comment on client.clientId=comment.clientId_fk");
    //     return $log;
    // }

    public function checkcomment()
    {
        $log = parent::Runsearch("select * from vw_comments");
        return $log;
    }
    public function Search(){}
}

