<?php    session_start() ; ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
         <title>Report Update</title>
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
                     <table>
                        <tr>
                            <td>
                            <b>Order ID:</b>
                        </td>
                        <td>
                            <b>Sample ID:</b>
                        </td>
                        <td>
                            <b>Patient Name :</b>
                        </td>
                        <td width="50%">
                            <b>File:</b>
                        </td>   
                        </tr>
                        <tr>
                           <td>
                            1.
                           </td> 
                           <td>
                            506
                           </td>
                           <td>
                            Mr.Abc
                           </td>
                           <td>
                            <img src="Images/abcd.png" size="10px">
                           </td>
                        </tr>
                        <tr>
                            <td>
                             2.
                            </td> 
                            <td>
                             506
                            </td>
                            <td>
                             Mr.Abc
                            </td>
                            <td>
                             <img src="Images/abcd.png" size="10px">
                            </td>
                         </tr>
                         <tr>
                            <td>
                             3.
                            </td> 
                            <td>
                             506
                            </td>
                            <td>
                             Mr.Abc
                            </td>
                            <td>
                             <img src="Images/abcd.png" size="10px">
                            </td>
                         </tr>
                         <tr>
                            <td>
                             4.
                            </td> 
                            <td>
                             506
                            </td>
                            <td>
                             Mr.Abc
                            </td>
                            <td>
                             <img src="Images/abcd.png" size="10px">
                            </td>
                         </tr>
                         <tr>
                            <td>
                             5.
                            </td> 
                            <td>
                             506
                            </td>
                            <td>
                             Mr.Abc
                            </td>
                            <td>
                             <img src="Images/abcd.png" size="10px">
                            </td>
                         </tr>
                         <tr>
                            <td>
                             6.
                            </td> 
                            <td>
                             506
                            </td>
                            <td>
                             Mr.Abc
                            </td>
                            <td>
                             <img src="Images/abcd.png" size="10px">
                            </td>
                         </tr>
                           
                      
                     </table>
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