<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>View Profile</title>
    </head>
    <style>
         table
            {
                width: 100%;
                
            }
         table,tr,td
            {
                border: 1px solid black;
                border-collapse: collapse;
            }
    </style>
   
    <body bgcolor=skyblue>
        
            <table>
                <tr>
                    <th>
                        <header align ="Left"><h1>X Hospital Limited</h1></header>
                
                        <center>
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
                    <td bgcolor ="white">
                      
            
            <fieldset>
            <table boarder="1" width="" height="">
                <legend><b>PROFILE </b></legend>
            <tr>
                <td>Name: Mahir</td>
                <td rowspan="5"><img src="images/propic.jpg" height="100px" width="100px"> <br>
                    <center><a href="change_profile_picture.php">Change</a></center>
               </td>
            </tr>
            <tr><td>Email    :Mahir@aiub.edu</td></tr>
            <tr><td>Gender    :Male</td></tr>
            <tr><td>Date Of Birth    :19/09/1998</td></tr>
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
    echo "Please Login !!" ;
}
?>


