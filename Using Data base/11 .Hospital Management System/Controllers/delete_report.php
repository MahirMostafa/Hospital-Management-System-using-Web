<?php

    require_once('../models/report_db.php');
    $oid = $_GET['oid'];
     $status = report_delete($oid);
     if($status)
     {
      echo"<h3 align ='center'>REPORT DELETED</h3>";
      echo '<a href="../Views/update_report.php">Go back</a>';
     }
    

?>