<?php  
function session($name,$email,$pass)
{
    $_SESSION['name'] = $name ;
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
}

?>