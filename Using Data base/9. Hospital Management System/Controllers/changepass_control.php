<?php
$vpass = $npass = $cpass = $identity = "";
$emailErr = $passErr = $passErr1 = $passErr12 = $msg1 = "" ;
$name = $_SESSION['name'];
$email= $_SESSION['email'];
$pass = $_SESSION['pass'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
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
        $passErr1 = "Password required !!" ;
    }
    else
    {
       $pass1 = input_data($_POST['pass']) ;
       if(strlen($pass1) < 8)
       {
        $passErr1 = "Password length must be 8 !!" ;
       }
       else
       {
        if($pass1 !== $pass )
          {
            $passErr1 = "Wrong Password !!" ;
          }
          else
          {
            $passErr12 = "Password Matched" ;
          }
       }
       
    }

    
    if(empty($_POST['npass']))
    {
        $passErr = "Password required !!" ;
    }
    else
    {
       $pass2 = input_data($_POST['npass']) ;
       if(strlen($pass2) < 8)
       {
        $passErr = "Password length must be 8 !!" ;
       }
       
    }

    
    if(empty($_POST['cpass']))
    {
        $passErr = "Password required !!" ;
    }
    else
    {
       $pass3 = input_data($_POST['cpass']) ;
    }

    if($_POST['npass'] == $_POST['cpass']) 
    {
        $vpass = input_data($_POST['cpass']) ;
    }
    else
    {
        $passErr = "Password Not Matched !!" ;
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


if (!empty($name) && (!empty($email)) && (!empty($pass)))
{
    require_once('../models/users_db.php');
    require_once('../models/doctors_db.php');
    require_once('../models/admin_db.php');
    require_once('../models/pathologist_db.php');
    require_once('../models/pharmacist_db.php');
    require_once('../models/receptionist_db.php');
    require_once('../models/accountant_db.php');
    
    $results = user_auth($name , $pass , $email);
    $user = mysqli_fetch_assoc($results);
    if ($user)
    {   
        $identity = "patient";
    }
    else
    {
        $results = doctor_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
            $identity = "doctor";         
        }
         else
       {
        
        $results = patho_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
            $identity = "pathologist";
        }
        else
        {
            $results = accountant_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if ($user)
            {   
                $identity = "accountant";
            }
            else
            {
                $results = admin_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "admin";
                }
                else
                {
                 
                $results = recep_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "receptionist";
                }
                else
                {
                      
                $results = pharma_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "pharmacist";
                    
                }
                else
                {
                 $msg1= "error loading info !!";
                }
                }
                }
            }
        }
          
       }

       
}

}

?>


<?php
if(isset($_POST['submit']))
{
    if($emailErr == "" && $passErr == "" && $passErr1 == "")
    {

    
    require_once('../models/users_db.php');
    require_once('../models/doctors_db.php');
    require_once('../models/admin_db.php');
    require_once('../models/pathologist_db.php');
    require_once('../models/pharmacist_db.php');
    require_once('../models/receptionist_db.php');
    require_once('../models/accountant_db.php');

   
  if($identity == "patient")
  {
    
      $status = user_Pupdate($name ,$pass, $email ,$vpass);
      if($status)
      {
        session_destroy();
        setcookie('flag', 'true', time()-10, '/');
        header('Location: message_redirect.php');
          
      }
      else{
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
     
  }
    
    else
    {

    if($identity == "pathologist")
    {
     
        $status = patho_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
        { 
            session_destroy();
            setcookie('flag', 'true', time()-10, '/');
            header('Location: message_redirect.php');
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    }
    else
    {
       
    if($identity == "doctor")
    {
     
        $status = doctor_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
      {
            session_destroy();
            setcookie('flag', 'true', time()-10, '/');
            header('Location: message_redirect.php');
          
      }
      else{
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
       
    } 
    else
    {
       
    if($identity == "admin")
    {
     
        $status = admin_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
      {
        session_destroy();
        setcookie('flag', 'true', time()-10, '/');
        header('Location: message_redirect.php');
          
      }
      else
      {
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
       
    } 
    else
    {
        
    if($identity == "pharmacist")
    {
     
        $status = pharma_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
      {
            session_destroy();
            setcookie('flag', 'true', time()-10, '/');
            header('Location: message_redirect.php');
          
      }
      else
      {
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
       
    }
    else
    {
        
    if($identity == "accountant")
    {
     
        $status = accountant_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
      {
          
            session_destroy();
            setcookie('flag', 'true', time()-10, '/');
            header('Location: message_redirect.php');
          
      }
      else{
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
       
    }
    else
    {
        
    if($identity == "receptionist")
    {
     
        $status = recep_Pupdate($name ,$pass, $email ,$vpass);
        if($status)
      {
        
            session_destroy();
            setcookie('flag', 'true', time()-10, '/');
            header('Location: message_redirect.php');
          
      }
      else
      {
          $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
      }
       
    }
    
    else
    {
        
        $msg1 = "error identity";
      
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