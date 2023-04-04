<?php require_once('../Controllers/login_control.php'); ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Login</title>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" enctype="">
                         <fieldset>
                            <legend align="center">
                            <h2>Login</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th align="right">Name:</th>
                                    <td><input type="text" name="name" value="<?php echo $uname; ?>"></td>
                                    <td> <?php echo $nameErr ; 
                                               echo $err1 ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email" value="<?php echo $uemail; ?>"></td>
                                    <td> <?php echo $emailErr ;
                                                echo $err2; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Password:</th>
                                    <td><input type="password" name="pass" value="<?php echo $upass; ?>"></td>
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

