<?php    session_start() ;
 if(isset($_COOKIE['flag']))
{

?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <title>Admin Panel</title>
  <style>
    body {
      background-color: skyblue;
    }

    h1 {
      text-align: center;
    }

    table {
      margin: auto;
    }

    th {
      text-align: center;
    }

    td {
      padding: 10px;
      text-align: center;
    }

    a {
      color: black;
      text-decoration: none;
      font-weight: bold;
      padding: 10px;
      border: 1px solid black;
      border-radius: 5px;
    }

    button {
      color: white;
      background-color: green;
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Admin Panel</h1>
  <a href="logout.php"  style="color:red;">LogOut</a>
  <table >
    <tr>
      <th><h2><b>Register for Employees</b></h2></th>
    </tr>
    <tr>
      <td><a href="registration_ad.php">Admin</a></td>
    </tr>
    <tr>
      <td><a href="registration_pa.php">Pathologist</a></td>
    </tr>
    <tr>
      <td><a href="registration_rec.php">Receptionist</a></td>
    </tr>
    <tr>
      <td><a href="registration_doc.php">Doctor</a></td>
    </tr>
    <tr>
      <td><a href="registration_pha.php">Pharmacist</a></td>
    </tr>
    <tr>
      <td><a href="registration_acc.php">Accountant</a></td>
    </tr>
  </table>
  <form method="post" action="../Controllers/view_salary_control.php">
    <table>
      <tr>
        <th><h2><b>Employees Salary Information</b></h2></th>
      </tr>
      <tr>
        <td><button type="submit" name="button1">Admins Salary Information</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="button2">Pathologists Salary Information</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="button3">Receptionists Salary Information</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="button4">Doctors Salary Information</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="button5">Pharmacists Salary Information</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="button6">Accountants Salary Information</button></td>
      </tr>
    </table>
  </form>
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
