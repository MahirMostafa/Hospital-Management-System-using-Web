
<?php
$phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $msg1 = "" ;
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
$name = $phone1 = $nid1 = $email1= $dob1 = $address1 =  $pass =  "";

$name = $_SESSION['name'];
$email= $_SESSION['email'];
$pass = $_SESSION['pass'];

if (!empty($name) && (!empty($email)) && (!empty($pass)))
{
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
 
     
    }
    else
    {
        $results = doctor_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
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
                  
                    $phone1 = $user['phone'] ;
                    $email1 = $user['email'];
                    $dob1 = $user['dob'] ;
                    $address1 = $user['address'] ; 
                    $nid1 = $user['nid'] ;
                    
                }
                else
                {
                 echo "error loading info !!";
                }
                }
                }
            }
        }
          
       }

       
}

    
    
    /*
    $file = fopen('userinfo.txt', 'r');
  while (($data = fgets($file)) !== false) {
    $temp = explode('|', $data);
    if ($name === trim($temp[0]) && $email=== trim($temp[3]) && $pass === trim($temp[6]))
{
    $phone1 = $temp[1];
    $email1 = $temp[3];
    $nid1= $temp[2];
    $dob1 = $temp[4];
    $address1 = $temp[7];
    break;
}
  } */
}
?>


<?php/*
$phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $msg1 = "" ;
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

*/?> 