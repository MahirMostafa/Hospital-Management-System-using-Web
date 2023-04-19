<?php
require_once('database.php');
function recep_auth($name , $pass , $email)
{   
    $con = getConnection() ;
    $user_check_query = " SELECT * FROM receptionist WHERE uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $results = mysqli_query($con, $user_check_query);
    return $results;
}

function recep_add($name, $email, $pass , $nid , $phone , $gender , $address , $dob ,$pic, $doj ,$salary)
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO receptionist (uname, email, password, nid , phone , gender , address , dob , pic ,joindate , salary) 
    VALUES('$name', '$email', '$pass' , '$nid' , '$phone' , '$gender' , '$address' , '$dob' , '$pic' , '$doj' , '$salary')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}

function recep_update($name ,$pass, $email1 ,$phone , $nid , $email , $dob , $address)
{
    $con = getConnection() ;
    $update_query = "UPDATE receptionist SET phone = '$phone' , nid = '$nid' , email = '$email' , dob = '$dob' , address = '$address' WHERE  uname ='$name' AND password ='$pass' AND email = '$email1'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function recep_Pupdate($name ,$pass, $email ,$vpass)
{
    $con = getConnection() ;
    $update_query = "UPDATE receptionist SET password = '$vpass'  WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}
function recep_Picupdate($name ,$pass, $email ,$new_pic)
{
    $con = getConnection() ;
    $update_query = "UPDATE receptionist SET pic = '$new_pic'  WHERE  uname ='$name' AND password ='$pass' AND email = '$email'" ;
    $status = mysqli_query($con, $update_query);
    return $status;
}
function recep_view()
{
    $con = getConnection() ;
    $view_query = "SELECT uname ,email , salary  FROM receptionist" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}
?>