

<?php    session_start() ; ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
       <title>Edit Profile</title>
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
                    <form method="post" action ="handler.php" enctype="">
            <fieldset>
                <legend><b>EDIT PROFILE</b></legend>
                Name: <input type ="text" id="name" name="name"> <br><br>
                Email: <input type="email" id="email" name="email"> <br> <br>
                
                
                Gender :<input type="radio"  name="gender" value="Male"/>Male
                <input type="radio"  name="gender" value="Female"/>Female
                <input type="radio"  name="gender"value="Others"/>Others<br> <br>
                    
                Date of Birth: <input type="date" id="dob" name="dob"> <br> <br>
                <input type="submit" value="Submit"> 
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

