<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Report Order</title>
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
                    <td height="400px">
                    <table bgcolor=white>
                        <center>
                            <tr>
                                <th>
                                    Order ID
                                </th>
                                <th>
                                    Test Name
                               </th>
                               <th>
                                   Patient Name
                               </th>
                               <th>
                                 Doctors name
                              </th>
                            </tr>
                            <tr>
                                <td>
                                    1.
                                </td> 
                                 <td>
                                     Vitamin Defficiency
                                 </td>
                                 <td>
                                     Mr.A
                                 </td>
                                 <td>
                                    DR.Mosharof Karim
                                 </td>
                            </tr>  
                            <tr>
                                 <td>
                                    2.
                                </td> 
                                 <td>
                                     Dengue Antigen
                                 </td>
                                 <td>
                                     Mr.B
                                 </td>
                                 <td>
                                    DR.XYZ
                                 </td>
                            </tr>  
                            <tr>
                                 <td>
                                    3.
                                </td> 
                                 <td>
                                     Diabetes
                                 </td>
                                 <td>
                                     Mr.C
                                 </td>
                                 <td>
                                    DR.JKLM
                                 </td>
                            </tr>  
                          </center>
                       </table>
                    </td>
                       </tr>
                    </table>
                    </td>        
                </tr>
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