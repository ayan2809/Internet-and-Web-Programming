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
         
        
        $ans=0;
         $file = file("C:/xampp/htdocs/uploads/".$file_name);
         if (is_array($file) || is_object($file))
        {
            


            foreach($file as $val)
            {
                $array = explode(" ", $val);
                $ans+=$array[3];
                echo ($array[3]."<br>");
                // echo($val[0]."<br>");
            }
            $size=count($file);
            $ans/=$size;
            $count=0;
            foreach($file as $val)
            {
                $array = explode(" ", $val);
                if((int)$array[3]>(int)$ans)
                {
                    $count++;
                }
            }
            echo ("Average of the class is :".$ans);
            echo("<br> Number of students who scored above average is :".$count);
            
        }
        }
        else
        {
         print_r($errors);
        }
   }
?>