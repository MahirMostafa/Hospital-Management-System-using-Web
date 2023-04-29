<?php
 require_once('viewpro_control.php');
 $picErr = $new_pic = $msg1 = "";

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(empty($_FILES['new_pic']['name']))
    {
        $picErr = "No Pic selected !!";
    }
    else
    {
        if(file_exists("../Uploads/" . $identity . "/" . $_FILES['new_pic']['name']))
        {
            $picErr = "Image already exists !!";
        }
        else
        {
            $new_pic = $_FILES['new_pic']['name'] ;

        }
      
    }
 }




 if(isset($_POST['submit']))
 {
     if($picErr == "")
     {
 
     
     require_once('../models/users_db.php');
     require_once('../models/doctors_db.php');
     require_once('../models/admin_db.php');
     require_once('../models/pathologist_db.php');
     require_once('../models/pharmacist_db.php');
     require_once('../models/receptionist_db.php');
     require_once('../models/accountant_db.php');
 
    
   if($identity == "users")
   {
     
       $status = user_Picupdate($name ,$pass, $email ,$new_pic);
       if($status)
       {
        
        
        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/users/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/users/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php');  
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
        
       }
       else
       {
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
      
   }
     
     else
     {
 
     if($identity == "pathologists")
     {
      
         $status = patho_Picupdate($name ,$pass, $email ,$new_pic);
         if($status)
         {  
            $src= $_FILES['new_pic']['tmp_name'];
            $des = '../Uploads/pathologists/'.$_FILES['new_pic']['name'];
            if(move_uploaded_file($src, $des))
            {  
               unlink("../Uploads/pathologists/" . $pic);
               $msg1= "<h3> profile picture Changed !!</h3>";
               header('Location: changepic.php');  
            }
            else
            {
    
                $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
            }
         }
         else{
             $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
         }
        
     }
     else
     {
        
     if($identity == "doctors")
     {
      
         $status = doctor_Picupdate($name ,$pass, $email ,$new_pic);
         if($status)
       {
             
        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/doctors/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/doctors/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php');   
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
           
       }
       else{
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
        
     } 
     else
     {
        
     if($identity == "admins")
     {
      
         $status = admin_Picupdate($name ,$pass, $email ,$new_pic);
         if($status)
       {

        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/admins/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/admins/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php');  
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
           
       }
       else
       {
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
        
     } 
     else
     {
         
     if($identity == "pharmacists")
     {
      
         $status = pharma_Picupdate($name ,$pass, $email ,$new_pic);
         if($status)
       {
           
        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/pharmacists/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/pharmacists/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php'); 
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
           
       }
       else
       {
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
        
     }
     else
     {
         
     if($identity == "accountants")
     {
      
         $status = accountant_Picupdate($name ,$pass, $email ,$new_pic);
         if($status)
       {
           
           
        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/accountants/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/accountants/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php');  
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
           
       }
       else{
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
        
     }
     else
     {
         
     if($identity == "receptionists")
     {
      
         $status = recep_Pupdate($name ,$pass, $email ,$new_pic);
         if($status)
       { 
        $src= $_FILES['new_pic']['tmp_name'];
        $des = '../Uploads/receptionists/'.$_FILES['new_pic']['name'];
        if(move_uploaded_file($src, $des))
        {  
           unlink("../Uploads/receptionists/" . $pic);
           $msg1= "<h3> profile picture Changed !!</h3>";
           header('Location: changepic.php');  
        }
        else
        {

            $msg1 = "<h3> ERROR Uploading Image !!</h3>" ;
        }
       }
       else
       {
           $msg1 = "<h3> ERROR UPDATING DATA </h3>" ;
       }
        
     }
     
     else
     {
         
         $msg1 = "error identity";
       
     }
 
 
     }
     }
     }
 
     }
 
     }
 }
            
     }
 }  










?>