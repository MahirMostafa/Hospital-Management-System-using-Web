<?php
session_start();
if(isset($_SESSION['name']))
{
    session_destroy();
    setcookie('flag', 'true', time()-10, '/');
    header ('Location: home.php');
}
else{
    echo"You must log in First ";
}

?>