<a href ="main1.php"> to delete </a><br>

<?php
session_start();
ob_start();

if(isset($_SESSION['field1']))
{    

    echo "Cookie '" . $_SESSION['field1'] . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$_SESSION['field1']];
}
else{
    
    header('Location:main1.php');
}


unset($_SESSION['field1']);
setcookie($cookie_name, $cookie_value, time()-1);
?>