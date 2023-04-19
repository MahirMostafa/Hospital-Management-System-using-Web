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
    $results = report_exist($sid , $oid);

    if(mysqli_num_rows($results) == 1)
    {
         echo"<h3 align ='center'>REPORT Already Exists !!</h3>";
         echo '<a href="../Views/create_report.php">Go back</a>';
       
    }
    else
    {
     $status = report_create($pname , $sid , $oid , $findings , $advice);
     if($status)
     {
      echo"<h3 align ='center'>REPORT DONE</h3>";
      echo '<a href="../Views/create_report.php">Go back</a>';
     }
    }
}
?>