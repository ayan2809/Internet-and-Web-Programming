<?php

$xml_data = simplexml_load_file("question1.xml") or 
die("Error: Object Creation failure");

$count=0;
foreach ($xml_data->children() as $data)
{
    if($data->marks > 25)
    {
        $count++;
    } 
}
echo "Number of students with greater than 25 is ", $count."<br>";
?>