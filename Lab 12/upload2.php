<?php
   if(isset($_FILES['ff'])){
      $errors= array();
      $file_name = $_FILES['ff']['name'];
      $file_size =$_FILES['ff']['size'];
      $file_tmp =$_FILES['ff']['tmp_name'];
      $file_type=$_FILES['ff']['type'];
      
      
      if(empty($errors)==true){
        echo "Success<br>";
         move_uploaded_file($file_tmp,"C:/xampp/htdocs/uploads/".$file_name);
         
        //  $file = file($file_name);
        
         $file = file("C:/xampp/htdocs/uploads/".$file_name);
         if (is_array($file) || is_object($file))
        {
            foreach($file as $val)
            {
                echo($val."<br>");
            }
            
        }
        }
        else
        {
         print_r($errors);
        }
   }
?>