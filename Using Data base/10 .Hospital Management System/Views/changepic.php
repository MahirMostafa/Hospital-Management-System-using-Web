<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{
 require_once('../Controllers/changepic_control.php');
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>change Profile Picture</title>
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
                    <td width="30%">
                            <header align="center"><b><h4> Settings </h4> </b> </header>
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
           <legend><b>PROFILE PICTURE</b</legend>
            <fieldset>
                <?php echo $msg1 ; ?>
                <img src="<?php echo"../" . "Uploads" ."/" . $identity."/" . $pic ;?>" height="40%%" width="30%">
                <input type="file" id="myfile" name="new_pic" accept="image/*" ><br><br><?php echo $picErr ; ?>
                <input type="submit" name = "submit" value="submit">
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