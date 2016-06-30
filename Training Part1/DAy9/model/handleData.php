<?php

class DataModel {

    public $host = "127.0.0.1";
    public $username = "root";
    public $password = "root";
    public $database = "employee_db";

    function connectDatabase() {
        global $conn;
        $conn= mysql_connect($this->host, $this->username, $this->password);
        if (!$conn) {
            echo "error connecting";
            exit;
        }
        $db = mysql_select_db('employee_db', $conn);

        if (!$db) {
            echo"error in database selection";
            exit;
        }
    }

    function insert($firstName, $lastName, $email, $dob) {
        global $conn;
     
        $sql="insert into employee(`firstName`,`lastName`,`email`,`dob`)values('$firstName','$lastName','$email','$dob')";

        $result=mysql_query($sql,$conn);
        if($result==true){
            
            return true;
        }
        else{
            mysql_error ();
        }
    }
    function search($email)
    {
        global $conn;
        $array=array();
        $sql="select * from `employee` where email LIKE '$email%'";
        $result=mysql_query($sql,$conn);
        while($row= mysql_fetch_assoc($result))
        {
           $array=$row;
            
        }
        if(!$result)
        {
            mysql_error();
        }
        
        else
        {
            return $array;
        }
    }

}
