<?php

$json = file_get_contents('question4.json');
$decoded_json = json_decode($json,true);
$marks = $decoded_json['Student'];
$count=0;

foreach($marks as $mark) {
    if($mark['CAT1']>25)
    $count++;
    
   } 

   echo "Number of students with marks greater than 25 is ".$count;

?>
