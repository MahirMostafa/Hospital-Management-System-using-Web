<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
         <title>Report Update</title>
         <style>
          .update
          {
            background-color :  lightgreen ;
            border: 0;
            outline: none;
            cursor: pointer;
          }  
          .delete
          {
            background-color : red ;
            border: 0;
            outline: none;
            cursor: pointer;
          } 
        </style>
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
                        
                      <table border="1" bgcolor="white">
                        <center>
                        <tr>
                            <td width="20%">Order Id : </td>
                            <td width="20%">Sample Id: </td>
                            <td width="25%">Patient Name: </td>
                            <td width="10%">Findings:</td>
                            <td width="20%">Advice:</td>
                            <td width="20%">Actions: </td>
                        </tr>
                        <?php 
                 require_once('../models/report_db.php');
                 $status = view_report();
                 if ($status->num_rows > 0) 
                 {
                    
                    while($row = $status->fetch_assoc()) {
                        $oid = $row["oid"];
                        $sid = $row["sid"];
                        $pname = $row["pname"];
                        $findings =$row["findings"];
                        $advice =$row["advice"];
                        echo "<tr><td>$oid</td><td>$sid</td><td>$pname</td><td>$findings</td><td>$advice</td>
                        <td><a href='update_report_view.php?oid=$oid'><input type='submit' value='Update' class='update'></a>
                        <a href='../Controllers/delete_report.php?oid=$oid'><input type='submit' value='Delete' class='delete'></a></td>
                        </tr>";
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