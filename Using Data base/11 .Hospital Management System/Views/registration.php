<?php require_once('../Controllers/regi_control.php');?>
<!DOCTYPE html>
<html lang="eng">
    <head>
      <title>Registration</title>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                         <fieldset>
                            <legend align="center">
                            <h2>Registration</h2>
                            </legend>
                            <table align="center">
                                <tr>
                                    <th colspan="2"> <?php echo $msg1 ; ?> </th>
                               </tr>
                                <tr>
                                    <th align="right">Name:</th>
                                    <td><input type="text" name="name"></td>
                                    <td  style="color:red;"> <?php echo $nameErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Phone Number:</th>
                                    <td><input type="number" name="pnumber" placeholder="Must be 11"></td>
                                    <td  style="color:red;"> <?php echo $phoneErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">NID Number:</th>
                                    <td><input type="number" name="nid"></td>
                                    <td  style="color:red;"> <?php echo $nidErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td><input type="email" name="email"></td>
                                    <td  style="color:red;"> <?php echo $emailErr ; ?> </td>
                                </tr>
                                
                                <tr>
                                    <th align="right">Date Of Birth:</th>
                                    <td><input type="date" name="dob"></td>
                                    <td  style="color:red;"> <?php echo $dobErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align="right">Gender:</th>
                                    <td><input type="radio"  name="gender" value="male" >Male 
                                        <input type="radio"  name="gender" value="female">Female
                                        <input type="radio"name="gender" value="others">Others
                                     </td>
                                     <td  style="color:red;"> <?php echo $genderErr ; ?> </td>
                                </tr>
                                <tr>
                                    <th align=right>Photo:</th>
                                    <td align=left><input type="file" id="pic" name="pic" accept="image/*" ></td>
                                    <td  style="color:red;"> <?php echo $picErr ; ?> </td>
                                    
                                 </tr>
                                 <tr>
                                    <th align=right>Address:</th>
                                    <td>
                                       <address><textarea name="add"></textarea></address>
                                    </td>
                                    <td  style="color:red;"> <?php echo $addErr ; ?> </td>
                                 </tr>
                                 <tr>
                                    <th align=right><label>Password:</label></th>
                                    <td><input type="password" name="pass" placeholder="At least 8 character"></td>
                                    <td  style="color:red;"> <?php echo $passErr ; ?> </td>
                                 </tr>                                    
                                 <tr>
                                    <th align=right><label>Confirm password:</label></th>
                                    <td><input type="password" name="cpass" placeholder="Re-type your password"></td>
                                    <td  style="color:red;"> <?php echo $passErr ; ?> </td>
                                 </tr>                                    
                                 <tr>
                                    <td></td>
                                    <td><input type="submit" id="" name="submit" value="Confirm"> 
                                       <input type="reset" id="" name="" value="Erase all">
                                    <td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td>
                                       <a href="login.php">
                                       <input type="button" value="Already have an account?"></a>
                                    </td>
                                    </td>
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
