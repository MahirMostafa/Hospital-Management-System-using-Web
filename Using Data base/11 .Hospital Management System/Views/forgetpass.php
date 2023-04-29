<?php
$emailErr = $err1 = "";
$email = $pass = "";
$msg1 =  "";

function input_data($data)
{
    $data = trim($data) ;
    $data = stripcslashes($data) ;
    $data = htmlspecialchars($data) ;
    return $data ;
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['email']))
    {
        $emailErr = "Email Required";
    }
    else
    {
        $email = input_data($_POST['email']) ;
    }
}
?>

<?php

if(isset($_POST['submit']))
{
    if($emailErr == "")
    {
        $valid = false;
        $file = fopen('userinfo.txt', 'r');
        while (($data = fgets($file)) !== false) {
            $temp = explode('|', $data);
            if ($email === trim($temp[3])) 
            {
                $valid= true ;
                $pass = trim($temp[6]) ;
                break;

            }
        }
        fclose($file);
        if ($valid) {
            $msg1=  "<h4><b>Email Matched</b></h4>"."<br>" .
              "<h4><b>Your Password Is :</b>" . $pass . "</h4>";

          } else {
            $err1= "Wrong Information !!" . "<br>" . "Or" . "<br>" . "User Doesn't Exist !!" ;
                       
          }
    }
}

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
     <title>Contact</title>
    </head> 
    <body bgcolor=skyblue>
        <center>
            <table>
                <tr>
                    <th>
                        <header><h1>X Hospital Limited</h1></header>
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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="">
    <fieldset>
        <legend><b>FORGET PASSWORD</b></legend>
        <table>
            <tr>
                <td colspan= "3"><center><?php echo $msg1 ?></center></td>
           </tr>
                <tr>
                <th>
                    Enter Email:
                </th>
                <td><input type="email" id="email" name="email"> </td>
                <td  style="color:red;"> <?php echo $emailErr ,$err1;  ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type ="submit" name ="submit" value="Submit"><br>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

                </td>
                <tr>
                    <td>
                        <footer>
                            <center>
                                <p>&copy; 2023 X Hospital Management System. All rights reserved.</p>
                            </center>
                            
                        </footer>
                    </td>
                </tr>
            </table>
        </center>
        
    </body>
</html>