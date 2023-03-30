<?php
$nameErr = $phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $passErr = $genderErr = $msg1 = $msg2 ="" ;
$name = $phone = $nid = $email = $dob = $address =  $pass = $gender = "";
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
$db = mysqli_connect('localhost', 'root', '', 'hospital users');

if(isset($_POST['submit']))
{
    if($nameErr == "" && $phoneErr == "" && $nidErr == "" && $emailErr == "" &&  $dobErr == "" && $addErr=="" && $passErr == "" && $genderErr == "" )
    {
         $user_check_query = " SELECT * FROM users WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);

    if($user)
    {
        if($user['uname'] === $name )

        { 
            $msg1= "<h3>User Already Exists" . "<br> " . "! Please Login !</h3>";
        }  
        
        if( $user['email'] === $email)
        {
            $msg1= "<h3>User Already Exists" . "<br> " . "! Please Login !</h3>";
        }
    }
   
    else
    {
    
        $query = "INSERT INTO users (uname, email, password, nid , phone , gender , address , dob ) 
        VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob')";
        mysqli_query($db, $query);
        $msg1= "<h3>Registeration Successfull" . "<br> " . "! Please Login !</h3>";
    }
           
    }
}  


?>
