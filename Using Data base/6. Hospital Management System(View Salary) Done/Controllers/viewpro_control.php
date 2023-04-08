<?php
$name = $phone = $nid = $email = $dob = $address =  $pass = $gender = $pic = $identity = $msg1 = "";
$name = $_SESSION['name'];
$email= $_SESSION['email'];
$pass = $_SESSION['pass'];
if (!empty($name) && (!empty($email)) && (!empty($pass)))
{
    require_once('session_control.php');
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
        $identity = "users";
        $gender = $user['gender'] ;
        $dob = $user['dob'] ;
        $address = $user['address'] ;
        $nid = $user['nid'] ;
        $phone = $user['phone'];
        $pic = $user['pic'];
     
    }
    else
    {
        $results = doctor_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {  
          $identity = "doctors"; 
          $gender = $user['gender'] ;
          $dob = $user['dob'] ;
          $address = $user['address'] ;
          $nid = $user['nid'] ;
          $phone = $user['phone'];
          $pic = $user['pic']; 
        }
         else
       {
        
        $results = patho_auth($name , $pass , $email);
        $user = mysqli_fetch_assoc($results);
        if ($user)
        {   
         
         $identity = "pathologists";
         $gender = $user['gender'] ;
         $dob = $user['dob'] ;
         $address = $user['address'] ;
         $nid = $user['nid'] ;
         $phone = $user['phone'];
         $pic = $user['pic'];
        }
        else
        {
            $results = accountant_auth($name , $pass , $email);
            $user = mysqli_fetch_assoc($results);
            if ($user)
            {   
                $identity = "accountants";
                $gender = $user['gender'] ;
                $dob = $user['dob'] ;
                $address = $user['address'] ;   
                $nid = $user['nid'] ;
                $phone = $user['phone'];
                $pic = $user['pic'];
            }
            else
            {
                $results = admin_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "admins";
                    $gender = $user['gender'] ;
                    $dob = $user['dob'] ;
                    $address = $user['address'] ;   
                    $nid = $user['nid'] ;
                    $phone = $user['phone'];
                    $pic = $user['pic'];
                }
                else
                {
                 
                $results = recep_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "receptionists";
                    $gender = $user['gender'] ;
                    $dob = $user['dob'] ;
                    $address = $user['address'] ; 
                    $nid = $user['nid'] ;
                    $phone = $user['phone'];
                    $pic = $user['pic'];
                }
                else
                {
                      
                $results = pharma_auth($name , $pass , $email);
                $user = mysqli_fetch_assoc($results);
                if ($user)
                {   
                    $identity = "pharmacists";
                    $gender = $user['gender'] ;
                    $dob = $user['dob'] ;
                    $address = $user['address'] ; 
                    $nid = $user['nid'] ;
                    $phone = $user['phone'];
                    $pic = $user['pic'];
                }
                else
                {
                  $msg1 = "<h3>Error Loading info" . "<br> " . "! Please Login !</h3>";
                }
                }
                }
            }
        }
          
       }

       
}

}

?>