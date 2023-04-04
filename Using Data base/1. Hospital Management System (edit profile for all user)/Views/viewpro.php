<?php    
 session_start() ;
 if(isset($_COOKIE['flag']))
{
    include_once('../Controllers/viewpro_control.php')
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>View Profile</title>
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
                    <td width="60%">
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
                    <td bgcolor ="white">
                      
            
            <fieldset>
            <table boarder="1" width="" height="">
                <legend><b>PROFILE </b></legend>
                <tr>
                 <th> <?php echo $msg1 ; ?> </th>
                </tr>
                                
            <tr>
                <td><b>Name:</b> <?php echo $name; ?></td>
                <td rowspan="5"><img src="../images/propic.jpg" height="100px" width="100px"> <br>
                    <center><a href="Changepic.php">Change</a></center>
               </td>
            </tr>
            <tr><td><b>Email    :</b><?php echo $email; ?></td></tr>
            <tr><td><b>Phone No :</b><?php echo $phone; ?></td></tr>
            <tr><td><b>NID      :</b><?php echo $nid; ?></td></tr>
            <tr><td><b>Gender   :</b><?php echo $gender; ?></td></tr>
            <tr><td><b>Date Of Birth    :</b><?php echo $dob; ?></td></tr>
            <tr><td><b>Address   :</b><?php echo $address; ?></td></tr>
            <tr><td><a href="edit_profile.php">Edit profile</a> <br></td></tr>
            </table>
            </fieldset>
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

