<?php
require_once('database.php');
function patho_auth($name , $pass , $email)
{   
    $con = getConnection() ;
    $user_check_query = " SELECT * FROM pathologist WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $results = mysqli_query($con, $user_check_query);
    return $results;
}

function  patho_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob)
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO pathologist (uname, email, password, nid , phone , gender , address , dob ) 
    VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}

function patho_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address)
{
    $con = getConnection() ;
    $update_query = "UPDATE pathologist SET phone = '$phone' , nid = '$nid' , email = '$email' , dob = '$dob' , address = '$address' WHERE  uname ='$name' AND password ='$pass' AND email = '$email1'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

?>