<?php require_once('../Controllers/login_control.php'); ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Login</title>
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
        input[type=text],input[type=email], input[type=password]{
          width: 100%;
          padding: 5px 30px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
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
                        <center>                                
                        <header><h1>X Hospital Limited</h1></header>
                        <marquee>!!! In Quality We Believe !!!</marquee>
                       </center>      
                       
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" enctype="">
                         <fieldset>
                            <legend align="center">
                            <h2>Login</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th align="right">Name:</th>
                                    <td><input type="text" name="name" value="<?php echo $uname; ?>"></td>
                                    <td  style="color:red;"> <?php echo $nameErr ; 
                                               echo $err1 ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email" value="<?php echo $uemail; ?>"></td>
                                    <td  style="color:red;"> <?php echo $emailErr ;
                                                echo $err2; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Password:</th>
                                    <td><input type="password" name="pass" value="<?php echo $upass; ?>"></td>
                                    <td  style="color:red;"> <?php echo $passErr ; 
                                                echo $err3 ; ?> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox" name="check" value="check">Remmember me</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                     <a href ="forgetpass.php">Forget password? </a>
                                     
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" id="" name="login" value="login"> 
                                       <input type="reset" id="" name="" value="Erase all">
                                    <td>
                                 </tr>
                                
                            </table>
                         </fieldset>
                        </form>
                        
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <footer>
                            <p>&copy; 2023 X Hospital Management System. All rights reserved.</p>
                        </footer>
                    </td>
                </tr>
            </table>
        </center>
        
    </body>
</html>

