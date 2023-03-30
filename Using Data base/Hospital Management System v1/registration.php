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

<!DOCTYPE html>
<html lang="eng">
    <head>
      <title>Registration</title>
    </head>
    <body bgcolor=skyblue>
        <center>
            <table>
                <tr>
                    <th>
                        <center>                                
                        <header><h1>X Hospital Limited</h1></header>
                        <marquee>!!! In Quality We Believe !!!</marquee>
                       </center>      
                       
                    </th>
                </tr>
                <tr>
                    <td>
                        <nav> 
                            <h3><b>
                            <center>
                              <a href="home.php" >Home</a> |
                              <a href="Login.php" >Login</a> |
                              <a href="Registration.php">Registration</a> |
                              <a href="contact.php">Contact Us</a> |
                              <a href="About.php">About</a>
                            </center>
                            </b></h3>
                        </nav>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="">
                         <fieldset>
                            <legend align="center">
                            <h2>Registration</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th colspan="2"> <?php echo $msg1 ; ?> </th>
                               </tr>
                                <tr>
                                    <th align="right">Name:</th>
                                    <td><input type="text" name="name"></td>
                                    <td> <?php echo $nameErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Phone Number:</th>
                                    <td><input type="number" name="pnumber" placeholder="Must be 11"></td>
                                    <td> <?php echo $phoneErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">NID Number:</th>
                                    <td><input type="number" name="nid"></td>
                                    <td> <?php echo $nidErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email"></td>
                                    <td> <?php echo $emailErr ; ?> </td>
                                </tr>
                                
                                <tr>
                                    <th align="right">Date Of Birth:</th>
                                    <td><input type="date" name="dob"></td>
                                    <td> <?php echo $dobErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Gender:</th>
                                    <td><input type="radio"  name="gender" value="male" >Male 
                                        <input type="radio"  name="gender" value="female">Female
                                        <input type="radio"name="gender" value="others">Others
                                     </td>
                                     <td> <?php echo $genderErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align=right>Photo:</th>
                                    <td align=left><input type="file" id="pic" name="pic" ></td>
                                 </tr>
                                 <tr>
                                    <th align=right>Address:</th>
                                    <td>
                                       <address><textarea name="add"></textarea></address>
                                    </td>
                                    <td> <?php echo $addErr ; ?> </td>
                                 </tr>
                                 <tr>
                                    <th align=right><label>Password:</label></th>
                                    <td><input type="password" name="pass" placeholder="Must be 8 character"></td>
                                    <td> <?php echo $passErr ; ?> </td>
                                 </tr>                                    
                                 <tr>
                                    <th align=right><label>Confirm password:</label></th>
                                    <td><input type="password" name="cpass" placeholder="Re-type your password"></td>
                                    <td> <?php echo $passErr ; ?> </td>
                                 </tr>                                    
                                 <tr>
                                    <td></td>
                                    <td><input type="submit" id="" name="submit" value="Confirm"> 
                                       <input type="reset" id="" name="" value="Erase all">
                                    <td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td>
                                       <a href="login.php">
                                       <input type="button" value="Already have an account?"></a>
                                    </td>
                                    </td>
                                 </tr>
                            </table>
                         </fieldset>
                        </form>
                        
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <footer>
                            <p>&copy; 2023 X Hospital Management System. All rights reserved.</p>
                        </footer>
                    </td>
                </tr>
            </table>
        </center>
        
    </body>
</html>
