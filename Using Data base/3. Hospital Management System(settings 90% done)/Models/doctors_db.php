<?php
require_once('database.php');
function doctor_auth($name , $pass , $email)
{   
    $con = getConnection() ;
    $doctor_check_query = " SELECT * FROM doctors WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $results = mysqli_query($con, $doctor_check_query);
    return $results;
}

function doctor_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob)
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO doctors (uname, email, password, nid , phone , gender , address , dob ) 
    VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}

function doctor_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address)
{
    $con = getConnection() ;
    $update_query = "UPDATE doctors SET phone = '$phone' , nid = '$nid' , email = '$email' , dob = '$dob' , address = '$address' WHERE  uname ='$name' AND password ='$pass' AND email = '$email1'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function doctor_Pupdate($name ,$pass, $email ,$vpass)
{
    $con = getConnection() ;
    $update_query = "UPDATE doctors SET password = '$vpass' WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

?>