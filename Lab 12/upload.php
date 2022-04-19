<?php
   if(isset($_FILES['ff'])){
      $errors= array();
      $file_name = $_FILES['ff']['name'];
      $file_size =$_FILES['ff']['size'];
      $file_tmp =$_FILES['ff']['tmp_name'];
      $file_type=$_FILES['ff']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['ff']['name'])));
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"C:/xampp/htdocs/uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>