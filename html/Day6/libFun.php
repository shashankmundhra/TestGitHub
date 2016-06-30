<?php

function deletecookie($cookie)
{
    session_start();
    setcookie("$cookie", "", time() - 1);
    header('location:index.php');
}

function deleteSession()
{
    session_unset();
    session_destroy();
}
?>