<?php

$state = $_POST['state'];
$capital = $_POST['capital'];

foreach( $state as $key => $n ) {
  echo "The name is " . $n . " and email is " . $capital[$key] . ", thank you\n";
}
?>



// if (isset($_GET["state"], $_GET["capital"])) {

//     $state =$_GET["state"];
//     $capital = $_GET["capital"];
//     $a[$state]=$capital;
//     echo $state;
//     echo "</br>";
//     echo $capital;
// }


// $a["Uttar Pradesh"] = "Lucknow"; 
// $a["Punjab"] = "Chandigarh"; 
// $a["Goa"] = "Panaji"; 
// $a["chattisgarh"] = "raipur"; 
// $a["Madhya Pradesh"] = "Bhopal"; 
// $a["Tamil Nadu"] = "Chennai"; 
// $q = $_REQUEST["q"];

// $hint = "";
// if ($q !== "") {
//   $len=strlen($q);
//   foreach($a as  $key => $val) {
//     if (stristr($q, substr($key, 0, $len))) {

//         $hint= " $val";
//       }
//     }
// }
 

// echo $hint === "" ? "Not present in the database" : $hint;
