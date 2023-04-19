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
?>