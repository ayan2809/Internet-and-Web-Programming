<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>

<body>
    <?php
    $user = $_POST["accno"];
    $pass = $_POST["pass"];
    
    setcookie("checkUser", $user, time() + 24 * 60 * 60, "/");
    $cookie_user = $_COOKIE["checkUser"];
    setcookie("checkPass", $pass, time() + 24 * 60 * 60, "/");
    $cookie_pass = $_COOKIE["checkPass"];
    // echo "Account No: " . $_COOKIE["checkUser"]. "<br>";
    // echo "Account No: " . $_COOKIE["checkPass"]. "<br>";
    $credentials = file_get_contents(__DIR__ . "/password.txt");
    $arr = explode(" ", $credentials);
    if ($arr[0] == $cookie_user && $arr[1] == $cookie_pass) {
        echo "login Successful <br> <br> The IWP curriculum Details is: ";
        $filecontent = file_get_contents(__DIR__ . "/iwp.txt");
        echo"<br>";
        $brr = explode(" ", $filecontent);
        for ($i = 0; $i < count($brr); $i++) {
            echo $brr[$i];
            echo "<br>";
        }
        echo"<br>";
        echo "<form action='question2_19BCE1872_bank.php' method='post'>
Enter Account No: <input type='text' name='accno'><br><br>
<input type='submit' id='btn1'>
</form>";
    } else {
        echo "Login Unsuccessful";
    }
    ?>
</body>

</html>