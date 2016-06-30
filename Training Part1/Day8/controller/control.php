<?php

class MVControl
{
    function begin()
    {
        session_start();
          $result1=false;
          require_once 'model/model.php';
          $dataObject=new DataModel();
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
            else if(isset($_POST['formEnter']) && !empty($_POST['formEnter']))
            {
                  
                    $firstName=$_POST['firstName'];
                    $lastName=$_POST['lastName'];
                    $age=$_POST['age'];
                    $result=$dataObject->validate($firstName,$lastName,$age);
           
                    if($result){
                    $file = $_FILES['file']['name']; 
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder="../images/";
                    
                    if(move_uploaded_file($file_loc,$folder.$file))
                    {
                    $result1=$dataObject->insert($firstName,$lastName,$age,$file);
                    }            
        
                    }    include 'views/Data.php';  
                    
            }
            else if(isset($_POST["delete"]))
            {  
            include 'views/deleteform.php';
            }
            
            else if(isset($_POST['delete_age']))
            {
            $age=$_POST['age_delete'];
            $resultvalue= $dataObject->delete($age);
         
                if($resultvalue){
                include 'views/menu.php';
                }
                else{
                echo '<script type="text/javascript">alert("Failure to delete data .");</script>';
                }
            }
            
             else if(isset($_POST["update"]))
            {  
                 include 'views/updatesearch.php';
           
             }
             
            else if(isset($_POST['updatesearchEnter'])){
                    include 'views/updatesearch.php';
                    
                    $_SESSION['age']=$_POST['updatesearchName'];
                    
                    include 'views/updateform.php';
            }
            else if(isset($_POST['updateform'])){
                    $res_d=$dataObject->updatesearch($_POST['firstName'], $_POST['lastName'], $_SESSION['age']);
                    include 'views/Data.php';
                    
            }
        }
        
        
        
        
        
        
        
        else
        {
            include 'views/menu.php';
        }
        }
        }  
    
    




