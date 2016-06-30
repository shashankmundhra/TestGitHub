<?php

class MVCControl
{
    function begin()
    {
        $result1=false;
        require_once 'model/handleData.php';
        $dataObject=new DataModel;
        $dataObject->connectDatabase();
        
        if(isset($_POST)&& !empty($_POST))
        {
            $dataObject->connectDatabase();
            if(isset($_POST['menuEnter'])){
                include 'views/Data.php';
                
            }
            else if(isset($_POST['search'])) {
                include'views/search.php';
                
            }
            elseif (isset($_POST['searchEnter'])) {
                $firstName=$_POST['searchName'];
                $res=$dataObject->search($firstName);
                
                include 'views/Showresult.php';   
            }
            else if(isset($_POST['formEnter']))
            {
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $email=$_POST['email'];
                $dob=$_POST['DOB'];
               
              $result1=$dataObject->insert($firstName,$lastName,$email,$dob);
             
              if($result1==true)
              {
                  include 'views/Data.php';  
              }
            }
        }
        else
        {
            include 'views/menu.php';
        }
    }
}
