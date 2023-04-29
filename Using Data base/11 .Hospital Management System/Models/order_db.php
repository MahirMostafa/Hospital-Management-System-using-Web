<?php
require_once('database.php');

function create_order($pid,$tname,$pname,$dname)
{
    $con = getConnection() ;
    $create_query = "INSERT INTO orders (pid ,tname ,pname , dname)  VALUES ('$pid' ,' $tname ' ,' $pname ' ,' $dname')"  ;
    $status = mysqli_query($con, $create_query);
    return $status;
}

function report_order()
{
    $con = getConnection() ;
    $view_query = "SELECT oid ,pid , tname , pname , dname  FROM orders" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}

?>