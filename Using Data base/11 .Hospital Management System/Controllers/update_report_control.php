<?php
$pname = $sid = $oid = $findings = $advice = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $pname = $_POST['name']  ;
  $sid = $_POST['sid'] ;
  $oid = $_POST['oid'] ;
  $findings = $_POST['findings'] ;
  $advice = $_POST['advice'] ;
}

if(isset($_POST['submit']))
{
    require_once('../models/report_db.php');
     $status = report_update($pname , $sid , $oid , $findings , $advice);
     if($status)
     {
      echo"<h3 align ='center'>REPORT UPDATED</h3>";
      echo '<a href="../Views/update_report.php">Go back</a>';
     }
    
}

?>