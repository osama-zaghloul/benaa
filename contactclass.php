<?php
include_once "database.php";
include_once "operation.php";

class contact extends Database implements Operations
{
    var $contactId, $Email, $firstName, $lastName, $subject , $message;

    public function getcontactId()
    {
        return $this->contactId;
    }

    public function setcontactId($Id)
    {
        $this->contactId = $Id;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Em)
    {
        $this->Email = $Em;
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

    public function getsubject()
    {
        return $this->subject;
    }

    public function setsubject($su)
    {
        $this->subject = $su;
    }

     public function getmessage()
    {
        return $this->message;
    }

    public function setmessage($me)
    {
        $this->message = $me;
    }

    public function Add()
    {
        return parent::RUNDML("insert into contact values ('" . $this->getcontactId() . "','" . $this->getfirstName() . "','" . $this->getlastName() . "','" . $this->getsubject() . "','".$this->getmessage()."','".$this->getEmail()."')", "ok your message has been sent");
    }


    public function Delete()
    {

    }


    public function Update()
    {
    }

    
    public function Search(){}
}
