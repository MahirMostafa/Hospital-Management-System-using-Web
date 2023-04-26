<?php
$emailErr = $err1 = "";
$email = $pass = "";
$msg1 =  "";

function input_data($data)
{
    $data = trim($data) ;
    $data = stripcslashes($data) ;
    $data = htmlspecialchars($data) ;
    return $data ;
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['email']))
    {
        $emailErr = "Email Required";
    }
    else
    {
        $email = input_data($_POST['email']) ;
    }
}
?>

<?php

if(isset($_POST['submit']))
{
    if($emailErr == "")
    {
        $valid = false;
        $file = fopen('userinfo.txt', 'r');
        while (($data = fgets($file)) !== false) {
            $temp = explode('|', $data);
            if ($email === trim($temp[3])) 
            {
                $valid= true ;
                $pass = trim($temp[6]) ;
                break;

            }
        }
        fclose($file);
        if ($valid) {
            $msg1=  "<h4><b>Email Matched</b></h4>"."<br>" .
              "<h4><b>Your Password iS :</b>" . $pass . "</h4>";

          } else {
            $err1= "Wrong Information !!" . "<br>" . "Or" . "<br>" . "User Doesn't Exist !!" ;
                       
          }
    }
}

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
     <title>Contact</title>
     <style>
        body {
          background-color: skyblue;
        }
        table {
          width: 60%;
          margin: auto;
        }
        th, td {
          padding: 5px;
        }
        th {
          text-align: right;
        }
        h1 {
          margin: 0;
        }
        nav {
          background-color: white;
          padding: 5px;
          margin-bottom: 10px;
        }
        nav a {
          text-decoration: none;
          padding: 10px;
        }
        fieldset {
          border: 2px solid black;
          padding: 5px;
          width: 100%;
          margin: auto;
        }
        legend {
          font-weight: bold;
          font-size: 20px;
        }
        input[type=text], input[type=number], input[type=email], input[type=password], textarea {
          width: 100%;
          padding: 5px 30px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=radio] {
          margin-right: 10px;
        }
        input[type=submit], input[type=reset] {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        input[type=submit]:hover, input[type=reset]:hover {
          background-color: #45a049;
        }
        input[type=file] {
          margin-top: 8px;
        }
        footer {
          text-align: center;
          padding: 10px;
        }
      </style>
    </head> 
    <body bgcolor=skyblue>
        <center>
            <table>
                <tr>
                    <th>
                        <header><h1>X Hospital Limited</h1></header>
                    </th>
                </tr>
                <tr>
                    <td>
                        <nav> 
                            <h3><b>
                            <center>
                              <a href="home.php" >Home</a> |
                              <a href="Login.php" >Login</a> |
                              <a href="Registration.php">Registration</a> |
                              <a href="contact.php">Contact Us</a> |
                              <a href="About.php">About</a>
                            </center>
                            </b></h3>
                        </nav>
                    </td>
                </tr>
                <tr>
                <td>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="">
    <fieldset>
        <legend><b>FORGET PASSWORD</b></legend>
        <table>
            <tr>
                <td colspan= "3"><center><?php echo $msg1 ?></center></td>
           </tr>
                <tr>
                <th>
                    Enter Email:
                </th>
                <td><input type="email" id="email" name="email"> </td>
                <td> <?php echo $emailErr ,$err1;  ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type ="submit" name ="submit" value="Submit"><br>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

                </td>
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