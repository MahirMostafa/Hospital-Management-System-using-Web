<?php
function cookie_c()
{
    setcookie('uname', $_SESSION['name'], time() + 200, '/');
    setcookie('upass', $_SESSION['pass'], time() + 200, '/');
    setcookie('uemail', $_SESSION['email'], time() + 200, '/');
}
?>
