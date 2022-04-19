<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ayan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql2="SELECT EXISTS(SELECT * FROM ayan WHERE regd='19BCE1872')";
$sql = "DELETE FROM ayan WHERE regd='19BCE1872'";

// if ($conn->query($sql2) === TRUE) {
    // $sql = "DELETE FROM ayan WHERE regd='19BCE1872'";
    // {
        if ($conn->query($sql) === TRUE) {

        echo "Record deleted successfully";
        }
        // else{
        //     echo "Record was not deleted";
        // }
    // }
  
// }
 else {
  echo "Record Does not Exists " . $conn->error;
}

$conn->close();
?>