
this is welcome page

<a href="delete.php" name="Submit" method="post"> tocreate </a>
<br>

<?php

session_start();
ob_start();
$_SESSION['field1'] = $_POST['field1'];

if(isset($_SESSION['field1']))
{
 
$cookie_name = $_SESSION['field1'];
$cookie_value = "sha";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

}

else{
    
    header('Location:main1.php');
}
?> 