<?php 
$state= $_POST["state"];
 $cap= $_POST["capital"];
  $data=array("West Bengal"=>"Kolkata","Tamil Nadu"=>"Chennai","Chattisgarh"=>"Raipur","Madhya Pradesh"=>"Bhopal","Gujarat"=>"Surat"); 
  $check=0; 
foreach($data as $v=>$v_value) 
{ 
    if($v==$state) 
    { 
        $check=1; break; 
    } 
} 
if($check==0) 
{ 
    $data += array($state => $cap); echo "State and city have been added to the array. Thank you!"; 
} 
else
{ 
    echo "Given state and capital already exist in the array";
} 
?>