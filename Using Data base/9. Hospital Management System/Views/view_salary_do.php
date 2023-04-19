<!DOCTYPE html>
<html lang="eng">
    <head>
     <title>View Salary</title>
     <style>
table {
  border-collapse: collapse;
  width: 50%;
}
        </style>
    </head> 
    <body bgcolor=skyblue>
        <center>
            <table>
                <tr>
                    <th>
                        <header><h1>X Hospital Limited</h1></header>
                        <marquee>!!! In Quality We Believe !!!</marquee>
                    </th>
                </tr>
                <tr>
                    <td>
                        <nav> 
                            <h3><b>
                            <center>
                              Doctors Salary
                            </center>
                            </b></h3>
                        </nav>
                    </td>
                </tr>
                <tr>
                    <td>
                    <table border = "1px solid" align ="center" >
                        <tr> 
                            <th>Name:</th>
                            <th>Email:</th>
                            <th>Salary:</th>
                       </tr>
                    <?php 
                 require_once('../models/doctors_db.php');
                 $status = doctor_view();
                 if ($status->num_rows > 0) 
                 {
                    
                    while($row = $status->fetch_assoc()) {
                        $name = $row["uname"];
                        $email = $row["email"];
                        $salary = $row["salary"];

                        echo "<tr><td>$name</td><td>$email</td><td>$salary</td></tr>";
                    }
                 } else {
                    echo "No results found";
                 }


                    ?>
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