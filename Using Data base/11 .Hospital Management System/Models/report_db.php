<?php
require_once('database.php');
function report_create($pname , $sid , $oid , $findings , $advice)
{
    $con = getConnection() ;
    $create_query = "INSERT INTO reports (pname, sid, oid , findings , advice)  VALUES ('$pname' ,' $sid ' ,' $oid ' ,' $findings' ,' $advice')"  ;
    $status = mysqli_query($con, $create_query);
    return $status;
}

function report_exist($sid , $oid)
{   
    $con = getConnection() ;
    $report_check_query = " SELECT * FROM reports WHERE sid ='$sid' AND oid ='$oid'" ;
    $results = mysqli_query($con, $report_check_query);
    return $results;
}

function view_report()
{
    $con = getConnection() ;
    $view_query = "SELECT oid ,sid , pname ,findings ,advice FROM reports" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}

function view_report1($oid)
{
    $con = getConnection() ;
    $view_query = "SELECT * FROM reports WHERE oid = '$oid'" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}

function report_update($pname , $sid , $oid , $findings , $advice)
{
    $con = getConnection() ;
    $update_query = "UPDATE reports SET pname = '$pname', sid = '$sid', oid = '$oid' , findings = '$findings' , advice ='$advice' WHERE oid = '$oid'"  ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function report_delete($oid)
{
    $con = getConnection() ;
    $delete_query = "DELETE FROM reports WHERE oid = '$oid' ";
    $status = mysqli_query($con, $delete_query);
    return $status; 
}
?>