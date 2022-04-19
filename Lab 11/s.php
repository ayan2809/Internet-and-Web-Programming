<?php
$a["Uttar Pradesh"] = "Lucknow"; 
$a["Punjab"] = "Chandigarh"; 
$a["Goa"] = "Panaji"; 
$a["chattisgarh"] = "raipur"; 
$a["Madhya Pradesh"] = "Bhopal"; 
$a["Tamil Nadu"] = "Chennai"; 
$q = $_REQUEST["q"];

$hint = "";
if ($q !== "") {
  $len=strlen($q);
  foreach($a as  $key => $val) {
    if (stristr($q, substr($key, 0, $len))) {

        $hint= " $val";
      }
    }
}
 

echo $hint === "" ? "Not present in the database" : $hint;
?>
