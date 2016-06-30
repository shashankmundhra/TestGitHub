<?php

 		session_start();
        $value=$_SESSION["uName"];
        setcookie("cookieId",$value);
        setcookie("cookieEmail",$_SESSION["eMail"]);
        header('location:createCookie.php');
     ?>
