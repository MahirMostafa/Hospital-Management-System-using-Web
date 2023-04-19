<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Create report</title>
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
                        
                    <form name="reportForm" method="post" action="../Controllers/report_control.php" onsubmit="return validateForm()">
                        <fieldset>
                            <legend align="center"><h3><b>Summary</b></h3></legend>
                        
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
                                <td><input type="number" name="oid"></td>
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
                                    <textarea name="advice"> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" >
                                    <input type="reset" id="" name="" value="Erase all">
                                </td>
                            </tr>
                          
                        </table>
                        </form>

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

<script>
    function validateForm() {
        var name = document.forms["reportForm"]["name"].value;
        var sid = document.forms["reportForm"]["sid"].value;
        var oid = document.forms["reportForm"]["oid"].value;
        var findings = document.forms["reportForm"]["findings"].value;
        var advice = document.forms["reportForm"]["advice"].value;

        if (name == "") {
            alert("Please enter patient name");
            return false;
        }
        if (sid == "") {
            alert("Please enter sample ID");
            return false;
        }
        if (oid == "") {
            alert("Please enter order ID");
            return false;
        }
        if (findings == "") {
            alert("Please enter findings");
            return false;
        }
        if (advice == "") {
            alert("Please enter advice");
            return false;
        }
    }
</script>
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