<?php
$nameErr = $emailErr = $passErr = $err1 = $err2 = $err3 = "";
$name = $email = $pass ="";
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
        $valid = false;

        $file = fopen('userinfo.txt', 'r');
  while (($data = fgets($file)) !== false) {
    $temp = explode('|', $data);
    if ($name === trim($temp[0]) && $email=== trim($temp[3]) && $pass === trim($temp[6])) 
    {
      $valid = true;
      $_SESSION['name'] = $name ;
      setcookie('flag', 'true', time()+300, '/');
      break;
    }
  }
  fclose($file);

  if ($valid) {
    echo "<p>Login successful</p>";
     header('Location: dashboard_p.php');
  } else {
    $err1= "Wrong Information !!";
    $err2= "Or" ;
    $err3= "User Doesn't Exist !!" ;
  }
    }
}
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="welcome page of the website">
        <title>Login</title>
    </head>
    <body bgcolor=skyblue>
        <center>
            <table>
                <tr>
                    <td>
                        <center>                                
                        <header><h1>X Hospital Limited</h1></header>
                       </center>      
                       
                    </td>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" enctype="">
                         <fieldset>
                            <legend align="center">
                            <h2>Login</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th align="right">Name:</th>
                                    <td><input type="text" name="name"></td>
                                    <td> <?php echo $nameErr ; 
                                               echo $err1 ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email"></td>
                                    <td> <?php echo $emailErr ;
                                                echo $err2; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Password:</th>
                                    <td><input type="password" name="pass"></td>
                                    <td> <?php echo $passErr ; 
                                                echo $err3 ; ?> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox" name="check" value="check">Remmember me</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                     <a href ="forgetpass.php">Forget password? </a>
                                     
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" id="" name="login" value="login"> 
                                       <input type="reset" id="" name="" value="Erase all">
                                    <td>
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

