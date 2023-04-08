<?php require_once('../Controllers/regi_control_pha.php');?>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
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
                                    <td align=left><input type="file" id="pic" name="pic" accept="image/*" ></td>
                                    <td> <?php echo $picErr ; ?> </td>
                                    
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
