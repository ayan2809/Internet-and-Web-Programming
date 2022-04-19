<?php

$xml_data = simplexml_load_file("question3.xml") or die("Error: Object Creation failure");
// $x=0;

echo '<table id="time-table" border="2"><thead><tr >';
echo '<th style="width:40%; padding: 7px;">Course Code</th>';
echo '<th style="width:30%">Course Name</th>';
echo '<th style="width:40%">Slot</th>';
for ($x = 0; $x < 5; $x++) {
  echo '<tr id=row'.$x.'>';
  echo '<th style="width:40%; padding: 15px;" >',$xml_data->children()[$x]->coursecode .'</th>';
  echo '<th id=col'.$x.' style="width:30%">',$xml_data->children()[$x]->coursename .'</th>';
  
  echo '<th style="width:20%">',$xml_data->children()[$x]->slot .'</th>';
  
}
echo '</tbody></table>';
?>

