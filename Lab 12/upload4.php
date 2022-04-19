<?php

setcookie("set3",$_POST['b'],time()+3600);

?>


<?php
$b_color = $_COOKIE["set3"];
$msg = "NR Classes";
echo "<body bgcolor=$b_color>";
echo "</body>";
?>
