<?php    session_start() ; ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
    <title>change password</title>
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
                    <td>
                    <form method="post" action="handler.php" enctype="">
           
            <fieldset>
            <legend><b>CHANGE PASSWORD</b</legend>
                <table>
                    <tr>
                        <th>Email:</th>
                        <td><input type="email" id="email" name="email" ></td>
                    </tr>
                    <tr>
                        <th>Current password : </th>
                        <td><input type="password" id="pass" name="pass"></td>
                    </tr>
                    <tr>
                        <th>  New password : </th>
                        <td><input type="password" id="npass" name="npass" > </td>
                        </tr>
                    <tr>
                         <th>Retype password : </th>
                         <td><input type="password" id="cpass" name="cpass" ></td>
                         </tr>
                    <tr>
                        <th><input type="submit" value="submit"></th>
                    </tr>
                     </table>
                        </fieldset>
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

