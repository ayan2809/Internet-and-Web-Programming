<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ayan";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$mark=$_POST['marks'];
$regd=$_POST['regd'];
$sql ="INSERT INTO ayan (regd,name,mark) VALUES ('$regd','$name','$mark')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>