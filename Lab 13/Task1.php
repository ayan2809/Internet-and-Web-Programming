    <?php
    $servername = "localhost";
    $username = "root";
    $password = "3690";
    $dbname = "19BCE1872_Ayan_Sadhukhan_Cat2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3306) or die ("Not connected");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO 19BCE1872_Ayan_Sadhukhan_Cat2 (slno, Name, Regd, Mark)
    VALUES (1, 'Ayan', 'Sadhukhan', 'ayansadhukhan28@gmail.com')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
