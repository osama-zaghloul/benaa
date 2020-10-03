<?php
class Database
{
    var $conn;
    //connection with database
    function __construct()
    {
        // $this->conn=mysqli_connect("mysql6001.site4now.net","a4d0b7_benaadb","osama01098441697","db_a4d0b7_benaadb");
        
        $this->conn=mysqli_connect("localhost","root","","db_a4d0b7_benaadb");
    }

    
    //using to excute insert / update/ delete
    function RUNDML($statment,$msg)
    {
        if (!mysqli_query($this->conn,$statment))
        {
            return mysqli_error($this->conn);
        }
        else return $msg;
    }

    //using to search
    function Runsearch($statment)
    {
        $result=mysqli_query($this->conn,$statment);
        return $result;
    }


}
