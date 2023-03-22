<?php
session_start();
if(isset($_SESSION['name']))
{
    session_destroy();
    header ('Location: home.php');
}
else{
    echo"You must log in First ";
}

?>