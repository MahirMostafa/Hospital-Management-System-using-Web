<?php    session_start() ; ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Create report</title>
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
                    <td>
        
                            <ul>
                            <li><a href="dashboard_p.php">Dashboard</a></li>
                            <li><a href="report_or.php">View Report Orders</a></li>
                            <li><a href="Create_report.php">Create New Report</a></li>
                            <li><a href="update_report.php">Update Report </a></li>
                            <li><a href="Settings_p.php">Settings</a></li>
                            <li><a href="logout.php">LogOut</a></li>
                           </ul>
                           </td>
                                               
                    </td>
                    <td>
                      <form>
                        <fieldset>
                            <legend><h3><b>Summary</b></h3></legend>
                        <table>
                            <tr>
                                <th>Patient Name :</th>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                               <th>Sample Id :</th>
                               <td><input type="number" name="sid"></td> 
                            </tr>
                            <tr>
                                <th>Order Id :</th>
                                <td><input type="number" name="order"></td>
                            </tr>
                            <tr>
                                <th>
                                Findings:
                            </th> 
                            <td>
                                <textarea name="findings"></textarea>
                            </td> 
                            </tr>
                            <tr>
                                <th>
                                    Advice :
                                </th>
                                <td>
                                    <textarea name="Advice"> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" >
                                </td>
                            </tr>
                          
                        </table>
                        </form>
                        </fieldset
                      
                        >
                        
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