<?php
$nameErr = $phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $passErr = $genderErr = $picErr = $msg1 = $msg2 ="" ;
$name = $phone = $nid = $email = $dob = $address =  $pass = $gender = $pic = "";
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

    if(empty($_POST['gender']))
    {
        $genderErr = "gender required !!" ;
    }
    else
    {
       $gender = input_data($_POST['gender']) ;
    }

    
    if(empty($_POST['add']))
    {
        $addErr = "Address required !!" ;
    }
    else
    {
       $address = input_data($_POST['add']) ;
    }

    if(empty($_FILES['pic']['name']))
    {
        $picErr = "Profile Pic required !!";
    }
    else
    {
        if(file_exists("../Uploads/doctors/" . $_FILES['pic']['name']))
        {
            $picErr = "Image already exists !!";
        }
        else
        {
            $pic = $_FILES['pic']['name'] ;

        }
      
    }
    
    if(empty($_POST['pass']))
    {
        $passErr = "Password required !!" ;
    }
    else
    {
       $pass1 = input_data($_POST['pass']) ;
       if(strlen($pass1) < 8)
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
       $pass2 = input_data($_POST['cpass']) ;
    }

    if($_POST['pass'] == $_POST['cpass']) 
    {
        $pass = input_data($_POST['pass']) ;
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
if(isset($_POST['submit']))
{
    if($nameErr == "" && $phoneErr == "" && $nidErr == "" && $emailErr == "" &&  $dobErr == "" && $addErr=="" && $passErr == "" && $genderErr == "" && $picErr == "")
    {
     require_once('../models/doctors_db.php');
     $results = doctor_auth($name , $pass ,$email);

    if(mysqli_num_rows($results) == 1)
    {
        $msg1= "<h3>User Already Exists" . "<br> " . "! Please Login !</h3>";
       
    }
   
    else
    {
        $status= doctor_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob , $pic);
        
        if($status)
        {   
            $src= $_FILES['pic']['tmp_name'];
            $des = '../Uploads/doctors/'.$_FILES['pic']['name'];
            if(move_uploaded_file($src, $des))
            {
                $msg1= "<h3>Registeration Successfull" . "<br> " . "! Please Login !</h3>";
            }
            else{

                $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
            }
           
        }
        else
        {
            $msg1 = "<h3> ERROR!!</h3>" ;
        }
      
    }
           
    }
}  


?>
