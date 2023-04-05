<?php    
session_start() ;
 if(isset($_COOKIE['flag']))
{
 include_once('../Controllers/changepass_control.php');
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
    <title>change password</title>
    </head>  
    <body bgcolor=skyblue>
        <center>
          <table border="1" width="70%" height="600px">
                <tr>
                <th height="20%">
                        <header align ="center"><h1>X Hospital Limited</h1></header>
                        
                        
                            <h2> Pathology Department </h2>
                            <h3><b>                    
                            
                                  <?php 
                                    echo"Welcome &nbsp;" ;
                                    echo '<a href="viewpro.php">'. $_SESSION['name'] . '</a>' ;
                                   ?>
                                   <a href="logout.php">Logout</a>
                            
                            </b></h3>
                    </th>
                </tr>
                <tr>
                    <td>
                    <table>
                        <tr>
                    <td width="50%">
                            <header align="left"><b><h4> Settings </h4> </b> </header>
                            <ul>
                            <li><a href="dashboard_p.php">Dashboard</a></li>
                            <li><a href="Viewpro.php">View Profile</a></li>
                            <li><a href="edit_profile.php">Edit Profile</a></li>
                            <li><a href="Changepic.php">Change Profile Picture</a></li>
                            <li><a href="changepass.php">Change Password</a></li>
                           </ul>
                           </td>
                                               
                    </td>
                    <td>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="">
           
               <legend align="center"><b>CHANGE PASSWORD</b</legend>
               <fieldset>
                <table>
                     <tr>
                     <th colspan="2"> <?php echo $msg1 ; ?> </th>
                    </tr>
                    <tr>
                        <th align="right">Email:</th>
                        <td><input type="email" id="email" name="email" value = "<?php echo $email; ?>" ></td>
                        <td> <?php echo $emailErr ;?> </td>
                    </tr>
                    <tr>
                        <th align="right">Current password : </th>
                        <td><input type="password" id="pass" name="pass"></td>
                        <td> <?php echo $passErr1 ;echo $passErr12 ; ?> </td>
                    </tr>
                    <tr>
                        <th align="right">  New password : </th>
                        <td><input type="password" id="npass" name="npass" > </td>
                        <td> <?php echo $passErr ; ?> </td>
                        </tr>
                    <tr>
                         <th align="right">Retype password : </th>
                         <td><input type="password" id="cpass" name="cpass" ></td>
                         <td> <?php echo $passErr ; ?> </td>
                         </tr>
                    <tr>
                        <th></th>
                        <td> <input type="submit" value="submit" name = "submit" ></td>
                    </tr>
                     </table>
                        
                         </form>
                    </td>        
                </tr>
                </table>
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
<?php
}
else 
{    
    echo"<center>";
    echo "Please Login !!" ;
    echo '<a href="login.php">Click To Login</a>';
    echo"</center>";
}
?>