<?php
require_once('database.php');
function user_auth($name , $pass , $email)
{   
    $con = getConnection() ;
    $user_check_query = " SELECT * FROM users WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $results = mysqli_query($con, $user_check_query);
    return $results;
}

function user_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob , $pic)
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO users (uname, email, password, nid , phone , gender , address , dob , pic) 
    VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob' , '$pic')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}
function user_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address)
{
    $con = getConnection() ;
    $update_query = "UPDATE users SET phone = '$phone' , nid = '$nid' , email = '$email' , dob = '$dob' , address = '$address' WHERE  uname ='$name' AND password ='$pass' AND email = '$email1'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function user_Pupdate($name ,$pass, $email ,$vpass)
{
    $con = getConnection() ;
    $update_query = "UPDATE users SET password = '$vpass' WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

?>