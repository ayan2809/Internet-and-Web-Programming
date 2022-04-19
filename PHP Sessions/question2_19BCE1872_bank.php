<?php
session_start();
$accno = $_POST["accno"];
$_SESSION["number"] = $accno;
echo "Account No: " . $accno . "<br>";
$f = file_get_contents(__DIR__ . "/bank.txt");
$arr = preg_split("/\\r\\n|\\r|\\n/", $f);
$flag = 0;
for ($i = 0; $i < count($arr); $i++) {
    $curr = $arr[$i];
    $curr_details = explode(" ", $curr);
    if ($curr_details[0] == $_SESSION["number"]) {
        $flag = 1;
        echo "Balance : " . $curr_details[1];
        break;
    }
}
if ($flag == 0) {
    echo "bank details not found";
}
session_destroy();
