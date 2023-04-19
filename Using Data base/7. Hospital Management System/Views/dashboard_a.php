<!DOCTYPE html>
<html lang="eng">
    <head>
      <title>Admin Pannel</title>
    </head>
    <body bgcolor=skyblue>
    <h1 align = "center"> Admin Pannel</h1>
    <table align = "center">
        <tr>
            <th><h2><b>Register for Employees</b></h2></th>
        </tr>
        <tr>
            <td><a href="registration_ad.php">Admin</a></td>
        </tr>
        <tr>
            <td><a href="registration_pa.php">pathologist</a></td>
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
    <form method = "post" action ="../Controllers/view_salary_control.php" >
    <table align = "center">
        <tr>
            <th><h2><b>Employees Salary Information</b></h2></th>
        </tr>
        <tr>
            <td><button type="submit" name= "button1" >Admins Salary Information</button></td>
        </tr>
        <tr><td></td></tr>
        <tr>
           <td><button type="submit" name= "button2" value="">pathologists Salary Information</button></td>
        </tr>
        <tr><td></td></tr>
        <tr>
          <td><button type="submit" name= "button3" value="">Receptionists Salary Information</button></td>
        </tr>
        <tr><td></td></tr>
        <tr>
        <td><button type="submit" name= "button4" value="">Doctors Salary Information</button></td>
         
        </tr>
        <tr><td></td></tr>
        <tr>
         <td><button type="submit" name= "button5" value="">Pharmacists Salary Information</button></td>
        </tr>
        <tr><td></td></tr>
        <tr>
         <td><button type="submit" name= "button6" value="">Accountants Salary Information</button></td>
        </tr>
    </table>
</form>
</html>


   