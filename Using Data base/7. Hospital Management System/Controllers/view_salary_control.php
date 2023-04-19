<?php

if(isset($_POST['button1'])) 
{
header('Location: ../Views/view_salary_a.php');
 
}

if(isset($_POST['button2'])) 
{
    header('Location: ../Views/view_salary_pa.php');
}

if(isset($_POST['button3'])) 
{
    header('Location: ../Views/view_salary_re.php');
}

if(isset($_POST['button4'])) 
{
    header('Location: ../Views/view_salary_do.php');
}

if(isset($_POST['button5'])) 
{
    header('Location: ../Views/view_salary_ph.php');
}

if(isset($_POST['button6'])) 
{
    header('Location: ../Views/view_salary_ac.php');
}


?>