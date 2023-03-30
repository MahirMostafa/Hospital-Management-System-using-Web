<?php
$nameErr = $emailErr = $passErr = $err1 = $err2 = $err3 = "";
$name = $email = $pass ="";

if(isset($_COOKIE['uname']) && isset($_COOKIE['uemail'])  && isset($_COOKIE['upass']))
{
$uname = $_COOKIE['uname'] ;
$uemail = $_COOKIE['uemail'] ;
$upass = $_COOKIE['upass'] ;
}
else
{
    $uname = $uemail = $upass = "";
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['name']))
    {
        $nameErr ="Name required !!" ;
    }
    else 
    {
        $name = input_data($_POST['name']);
    }
    
    if(empty($_POST['email']))
    {
        $emailErr = "Email required !!" ;
    }
    else
    {
       $email = input_data($_POST['email']) ;
    }

    if(empty($_POST['pass']))
    {
        $passErr = "Password required !!" ;
    }
    else
    {
       $pass = input_data($_POST['pass']) ;
    }
}


function input_data($data)
{
    $data = trim($data) ;
    $data = stripcslashes($data) ;
    $data = htmlspecialchars($data) ;
    return $data ;
}
?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'hospital users');
if(isset($_POST['login']))
{
    if($nameErr == "" && $emailErr == "" && $passErr == "")
    {   
        session_start();
        $query = " SELECT * FROM users WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1)
        {   

            $_SESSION['name'] = $name ;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            setcookie('flag', 'true', time()+300, '/');
            if(isset($_POST['check']))
            {
            setcookie('uname',$_REQUEST['name'],time()+200 ,'/');
            setcookie('upass',$_REQUEST['pass'],time()+200 , '/');
            setcookie('uemail',$_REQUEST['email'],time()+200 , '/');
            }
         header('Location: dashboard_p.php');
        }
        else
        {
            $query = " SELECT * FROM doctors WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1)
            {   
    
                $_SESSION['name'] = $name ;
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $pass;
                setcookie('flag', 'true', time()+300, '/');
                if(isset($_POST['check']))
                {
                setcookie('uname',$_REQUEST['name'],time()+200 ,'/');
                setcookie('upass',$_REQUEST['pass'],time()+200 , '/');
                setcookie('uemail',$_REQUEST['email'],time()+200 , '/');
                }
             header('Location: dashboard_d.php');
        }
        else
        {
            $err1= "Wrong Information !!";
            $err2= "Or" ;
            $err3= "User Doesn't Exist !!" ;
        }
    
           
   }
}

}  

?>
