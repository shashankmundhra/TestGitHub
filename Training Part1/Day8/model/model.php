<?php

class DataModel {

    public $host = "127.0.0.1";
    public $username = "root";
    public $password = "root";
    public $database = "employee_db2";

    function connectDatabase() {
        global $conn;
        $conn= mysql_connect($this->host, $this->username, $this->password);
        if (!$conn) {
            echo "error connecting";
            exit;
        }
        $db = mysql_select_db('employee_db2', $conn);

        if (!$db) {
            echo"error in database selection";
            exit;
        }
    }
    
    
    function validate($firstName,$lastName,$age)
    {
        
        if(!ctype_alpha( $firstName )) {
            echo '<script type="text/javascript">alert("Invalid Type.Must be a Char .");</script>';
            return false;
        } elseif (!ctype_alpha( $lastName )) {
            echo '<script type="text/javascript">alert("Invalid Type.Must be a Char .");</script>';
            return false;
        } elseif ((is_nan($age)) || $age<18) {
            echo '<script type="text/javascript">alert("Must be a number greater than 18 .");</script>';
            return false;
        }          
         else {
            return true;
    }}

    function insert($firstName, $lastName, $age, $file) {
        global $conn;
     
        $sql="insert into employee(`firstName`,`lastName`,`age`,`file`)values('$firstName','$lastName','$age','$file')";

        $result=mysql_query($sql,$conn);
        if($result==true){
            
            return true;
        }
        else{
            mysql_error ();
        }
    }
    
    function delete($age){
        global $conn;
         
        $sql = "DELETE FROM employee WHERE age='$age'";
        $result=mysql_query($sql,$conn);
 
        if(!$result)
       {
           mysql_error();
       }
       else
       {
           return true;
       }
    }
    
    function search($age)
    {
        global $conn;
        $array=array();
        $sql="select * from `employee` where age LIKE '$age%'";
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
    function updatesearch($firstName,$lastName,$age)
    {
        global $conn;
        $array=array();
        $sql="UPDATE `employee_db2`.`employee` SET `firstName` = '$firstName', `lastName` = '$lastName' WHERE `age` = $age;";
        $result=mysql_query($sql,$conn);
    }
    

}
