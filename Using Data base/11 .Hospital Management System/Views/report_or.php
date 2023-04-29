<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Report Order</title>
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
                    <td width="40%">
        
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
                    <table border="1" bgcolor=white>
                        <center>
                            <tr>
                                <th>
                                    Order ID
                                </th>
                                <th>
                                    Patient ID
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
                            <?php 
                 require_once('../models/order_db.php');
                 $status = report_order();
                 if ($status->num_rows > 0) 
                 {
                    
                    while($row = $status->fetch_assoc()) {
                        $oid = $row["oid"];
                        $pid = $row["pid"];
                        $tname = $row["tname"];
                        $pname = $row["pname"];
                        $dname = $row["dname"];
                        echo "<tr><td>$oid</td><td>$pid</td><td>$tname</td><td>$pname</td><td>$dname</td></tr>";
                    }
                 } else {
                    echo "No results found";
                 }


                    ?>
                             
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
{    echo"<center>";
    echo "Please Login !!" ;
    echo '<a href="login.php">Click To Login</a>';
    echo"</center>";
}
?>