<?php

$xml_data = simplexml_load_file("question2.xml") or 
die("Error: Object Creation failure");

$count=0;
echo "Names of the students who scored greater than 40 in both the CATs are: <br><br>";

foreach ($xml_data->children() as $data)
{
    
    if($data->cat1marks > 40 && $data->cat2marks > 40)
    {
        $count++;
        echo $data->name."<br>";
    }
    
}
echo  "<br>Number of students with greater than 40 in both the CATs is ", $count."<br>";
