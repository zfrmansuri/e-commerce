<?php
$conn=mysqli_connect("localhost","root","","login_data");

if(!$conn){
  die('not connect'. mysqli_connect_error());
}
$Username = $_REQUEST['uname'];
$Password = $_REQUEST['pass'];

$sql = "INSERT INTO login (uname, pass) VALUES ('$Username', '$Password')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
