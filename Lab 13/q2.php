<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ayan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT regd, name, mark FROM ayan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Registration Number: " . $row["regd"]. " - Name: " . $row["name"]. " " . $row["mark"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>