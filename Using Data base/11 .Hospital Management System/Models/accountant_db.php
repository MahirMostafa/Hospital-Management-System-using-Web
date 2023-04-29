<?php
require_once('database.php');
function accountant_auth($name , $pass , $email)
{   
    $con = getConnection() ;
    $user_check_query = " SELECT * FROM accountant WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $results = mysqli_query($con, $user_check_query);
    return $results;
}

function accountant_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob , $pic , $doj ,$salary)
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO accountant (uname, email, password, nid , phone , gender , address , dob , pic ,joindate , salary) 
    VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob' , '$pic' , '$doj' , '$salary')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}

function accountant_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address)
{
    $con = getConnection() ;
    $update_query = "UPDATE accountant SET phone = '$phone' , nid = '$nid' , email = '$email' , dob = '$dob' , address = '$address' WHERE  uname ='$name' AND password ='$pass' AND email = '$email1'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function accountant_Pupdate($name ,$pass, $email ,$vpass)
{
    $con = getConnection() ;
    $update_query = "UPDATE accountant SET  password = '$vpass' WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function accountant_Picupdate($name ,$pass, $email ,$new_pic)
{
    $con = getConnection() ;
    $update_query = "UPDATE accountant SET  pic = '$new_pic' WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function accountant_view()
{
    $con = getConnection() ;
    $view_query = "SELECT uname ,email , salary  FROM  accountant" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}

?>