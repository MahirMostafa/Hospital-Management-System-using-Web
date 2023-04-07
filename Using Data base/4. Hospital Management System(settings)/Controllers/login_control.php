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

if(isset($_POST['login']))
{
    if($nameErr == "" && $emailErr == "" && $passErr == "")
    {   
        session_start();
        require_once('session_control.php');
        require_once('cookie_control.php');
        require_once('../models/users_db.php');
        require_once('../models/doctors_db.php');
        require_once('../models/admin_db.php');
        require_once('../models/pathologist_db.php');
        require_once('../models/pharmacist_db.php');
        require_once('../models/receptionist_db.php');
        require_once('../models/accountant_db.php');
        $results = user_auth($name , $pass , $email);
        if (mysqli_num_rows($results) == 1)
        {  

            session($name ,$email ,$pass);
            setcookie('flag', 'true', time()+86400, '/');
            if(isset($_POST['check']))
            {
             cookie_c();
            }
            header('Location: dashboard_u.php');
        }
        else
        {
            $results = doctor_auth($name , $pass , $email);
            if (mysqli_num_rows($results) == 1)
            {   
              
                session($name , $email ,$pass);
                setcookie('flag', 'true', time()+86400, '/');
                if(isset($_POST['check']))
                {
                    cookie_c();
                }
             header('Location: dashboard_d.php');
            }
             else
           {
            
            $results = patho_auth($name , $pass , $email);
            if (mysqli_num_rows($results) == 1)
            {   
              
                session($name , $email ,$pass);
                setcookie('flag', 'true', time()+86400, '/');
                if(isset($_POST['check']))
                {
                    cookie_c();
                }
             header('Location: dashboard_p.php');
            }
            else
            {
                $results = accountant_auth($name , $pass , $email);
                if (mysqli_num_rows($results) == 1)
                {   
                  
                    session($name , $email ,$pass);
                    setcookie('flag', 'true', time()+86400, '/');
                    if(isset($_POST['check']))
                    {
                        cookie_c();
                    }
                 header('Location: dashboard_acc.php');
                }
                else
                {
                    $results = admin_auth($name , $pass , $email);
                    if (mysqli_num_rows($results) == 1)
                    {   
                      
                        session($name , $email ,$pass);
                        setcookie('flag', 'true', time()+86400, '/');
                        if(isset($_POST['check']))
                        {
                            cookie_c();
                        }
                     header('Location: dashboard_a.php');
                    }
                    else
                    {
                     
                    $results = recep_auth($name , $pass , $email);
                    if (mysqli_num_rows($results) == 1)
                    {   
                      
                        session($name , $email ,$pass);
                        setcookie('flag', 'true', time()+86400, '/');
                        if(isset($_POST['check']))
                        {
                            cookie_c();
                        }
                     header('Location: dashboard_rec.php');
                    }
                    else
                    {
                          
                    $results = pharma_auth($name , $pass , $email);
                    if (mysqli_num_rows($results) == 1)
                    {   
                      
                        session($name , $email ,$pass);
                        setcookie('flag', 'true', time()+86400, '/');
                        if(isset($_POST['check']))
                        {
                            cookie_c();
                        }
                     header('Location: dashboard_ph.php');

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
            }
              
           }
    
           
   }
}

}  

?>

