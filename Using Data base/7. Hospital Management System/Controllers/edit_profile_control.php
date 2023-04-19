<?php
$name = $phone1 = $nid1 = $email1= $dob1 = $address1 =  $pass = $identity = "";

$name = $_SESSION['name'];
$email= $_SESSION['email'];
$pass = $_SESSION['pass'];

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
        $phone1 = $user['phone'] ;
        $email1 = $user['email'];
        $dob1 = $user['dob'] ;
        $address1 = $user['address'] ; 
        $nid1 = $user['nid'] ;
     
    }
    else
    {
        $results = doctor_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
            $identity = "doctor";
            $phone1 = $user['phone'] ;
            $email1 = $user['email'];
            $dob1 = $user['dob'] ;
            $address1 = $user['address'] ; 
            $nid1 = $user['nid'] ;
           
        }
         else
       {
        
        $results = patho_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
            $identity = "pathologist";
            $phone1 = $user['phone'] ;
            $email1 = $user['email'];
            $dob1 = $user['dob'] ;
            $address1 = $user['address'] ; 
            $nid1 = $user['nid'] ;
        }
        else
        {
            $results = accountant_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if ($user)
            {   
                $identity = "accountant";
                 $phone1 = $user['phone'] ;
                 $email1 = $user['email'];
                 $dob1 = $user['dob'] ;
                 $address1 = $user['address'] ; 
                 $nid1 = $user['nid'] ;
            }
            else
            {
                $results = admin_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "admin";
                    $phone1 = $user['phone'] ;
                    $email1 = $user['email'];
                    $dob1 = $user['dob'] ;
                    $address1 = $user['address'] ; 
                    $nid1 = $user['nid'] ;
                }
                else
                {
                 
                $results = recep_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "receptionist";
                    $phone1 = $user['phone'] ;
                    $email1 = $user['email'];
                    $dob1 = $user['dob'] ;
                    $address1 = $user['address'] ; 
                    $nid1 = $user['nid'] ;
                }
                else
                {
                      
                $results = pharma_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "pharmacist";
                    $phone1 = $user['phone'] ;
                    $email1 = $user['email'];
                    $dob1 = $user['dob'] ;
                    $address1 = $user['address'] ; 
                    $nid1 = $user['nid'] ;
                    
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
$phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $msg1 = "" ;
$emailErr1 = "Login Required ". "<br>". "if changed !!";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

if(empty($_POST['pnumber']))
{
    $phoneErr = "Phone Number required !!"  ;
}
else
{
$phone = input_data($_POST['pnumber']);
if(strlen($phone) !=11)
{
    $phoneErr = "Invalid phone number" ;
}
}
if(empty($_POST['nid']))
{
    $nidErr = "Nid required !!"  ;
}
else
{
$nid = input_data($_POST['nid']);
}
if(empty($_POST['email']))
    {
        $emailErr = "Email required !!" ;
        $emailErr1 = "";
    }
    else
    {
       $email = input_data($_POST['email']) ;
    }
    
    if(empty($_POST['dob']))
    {
        $dobErr = "Date Of Birth required !!" ;
    }
    else
    {
       $dob = input_data($_POST['dob']) ;
    }

    if(empty($_POST['add']))
    {
        $addErr = "Address required !!" ;
    }
    else
    {
       $address = input_data($_POST['add']) ;
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
if(isset($_POST['submit']))
{
    if($phoneErr == "" && $nidErr == "" && $emailErr == "" &&  $dobErr == "" && $addErr=="")
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
      
        $status = user_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = user_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            { 
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    }
    
    else
    {

    if($identity == "pathologist")
    {
     
        $status = patho_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = patho_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            { 
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    }
    else
    {
       
    if($identity == "doctor")
    {
     
        $status = doctor_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = doctor_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            {   
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    } 
    else
    {
       
    if($identity == "admin")
    {
     
        $status = admin_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = admin_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            {   
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    } 
    else
    {
        
    if($identity == "pharmacist")
    {
     
        $status = pharma_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = pharma_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            {   
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    }
    else
    {
        
    if($identity == "accountant")
    {
     
        $status = accountant_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = accountant_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            {   
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
            $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
        }
       
    }
    else
    {
        
    if($identity == "receptionist")
    {
     
        $status = recep_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address);
        if($status)
        {
            $results = recep_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if($user['email']==$email1)
            { 
                $msg1= "<h3>Data Updated" . "<br> " . "! Please view Your Profile !</h3>";
            }
            else
            {   
                session_destroy();
                setcookie('flag', 'true', time()-10, '/');
                header('Location: message_redirect2.php');

            }
            
        }
        else{
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