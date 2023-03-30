<?php    
session_start() ;
 if(isset($_COOKIE['flag']))
{
?>
<?php
$name = $phone1 = $nid1 = $email1= $dob1 = $address1 =  $pass =  "";

$name = $_SESSION['name'];
$email= $_SESSION['email'];
$pass = $_SESSION['pass'];
if (!empty($name) && (!empty($email)) && (!empty($pass)))
{
    $file = fopen('userinfo.txt', 'r');
  while (($data = fgets($file)) !== false) {
    $temp = explode('|', $data);
    if ($name === trim($temp[0]) && $email=== trim($temp[3]) && $pass === trim($temp[6]))
{
    $phone1 = $temp[1];
    $email1 = $temp[3];
    $nid1= $temp[2];
    $dob1 = $temp[4];
    $address1 = $temp[7];
    break;
}
  }
}
?>
<?php
$phoneErr = $nidErr = $emailErr =  $dobErr = $addErr = $msg1 = "" ;
if($_SERVER["REQUEST_METHOD"] == "POST")
{

if(empty($_POST['pnumber']))
{
    $phoneErr = "Phone Number required !!"  ;
}
else
{
$phone = input_data($_POST['pnumber']);
if(strlen($phone) !=11)
{
    $phoneErr = "Invalid phone number" ;
}
}
if(empty($_POST['nid']))
{
    $nidErr = "Nid required !!"  ;
}
else
{
$nid = input_data($_POST['nid']);
}
if(empty($_POST['email']))
    {
        $emailErr = "Email required !!" ;
    }
    else
    {
       $email = input_data($_POST['email']) ;
    }
    
    if(empty($_POST['dob']))
    {
        $dobErr = "Date Of Birth required !!" ;
    }
    else
    {
       $dob = input_data($_POST['dob']) ;
    }

    if(empty($_POST['add']))
    {
        $addErr = "Address required !!" ;
    }
    else
    {
       $address = input_data($_POST['add']) ;
    }
}

    function input_data($data)
{
    $data = trim($data) ;
    $data = stripcslashes($data) ;
    $data = htmlspecialchars($data) ;
    return $data ;
}

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
       <title>Edit Profile</title>
    </head>
      
    <body bgcolor=skyblue>
       <center>  
      <table border="1" width="70%" height="600px">
                <tr>
                    <th width="20%">
                        <header align ="Center"><h1>X Hospital Limited</h1></header>
                
                       
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
                            <header align="left"><b><h4> Settings </h4> </b> </header>
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="">
                         <fieldset>
                            <legend align="center">
                            <h2>Edit Profile</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th colspan="2"> <?php echo $msg1 ; ?> </th>
                               </tr>
                                
                                <tr>
                                    <th align="right">Phone Number:</th>
                                    <td><input type="number" name="pnumber" placeholder="Must be 11" value="<?php echo $phone1; ?>" ></td>
                                    <td> <?php echo $phoneErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">NID Number:</th>
                                    <td><input type="number" name="nid"  value="<?php echo $nid1; ?>"></td>
                                    <td> <?php echo $nidErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email"  value="<?php echo $email1; ?>"></td>
                                    <td> <?php echo $emailErr ; ?> </td>
                                </tr>
                                
                                <tr>
                                    <th align="right">Date Of Birth:</th>
                                    <td><input type="date" name="dob"  value="<?php echo $dob1; ?>"></td>
                                    <td> <?php echo $dobErr ; ?> </td>
                                </tr>
                                
                               
                                 <tr>
                                    <th align=right>Address:</th>
                                    <td>
                                       <address><textarea name="add"> <?php echo $address1; ?></textarea></address>
                                    </td>
                                    <td> <?php echo $addErr ; ?> </td>
                                 </tr>
                                                         
                                 <tr>
                                    <td></td>
                                    <td><input type="submit" id="" name="submit" value="Confirm"> 
                                       <input type="reset" id="" name="" value="Erase all">
                                    <td>
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