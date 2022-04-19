<?php
session_start();
$regno = $_POST["regd"];
$_SESSION['number'] = $regno;
echo "The Register Number is: " . $regno . "<br>";
echo "<br>";
if (
    $_SESSION['number'][2] == 'B' && $_SESSION['number'][3] == 'A' &&
    $_SESSION['number'][4] == 'I'
) {
    $bai = file_get_contents(__DIR__ . "/BAICurriculum.txt");
    $arr = explode(" ", $bai);
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
        echo "<br>";
    }
} else if (
    $_SESSION['number'][2] == 'B' && $_SESSION['number'][3] == 'C' &&
    $_SESSION['number'][4] == 'E'
) {
    $bce = file_get_contents(__DIR__ . "/BCSECurriculum.txt");
    $brr = explode(" ", $bce);
    for ($i = 0; $i < count($brr); $i++) {
        echo $brr[$i];
        echo "<br>";
    }
}
else
{
    echo "No Details available for this curriculum";
}
session_destroy();
