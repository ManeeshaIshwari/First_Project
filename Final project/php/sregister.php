<?php
$servername = "localhost";
$Name = "root";
$Password = "";
$dbname="onlinedu";

$conn = new mysqli($servername,$Name, $Password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["addrs"];
$d=$_POST["password"];
$e=$_POST["number"];
$f=$_POST["cpassword"];

$sql = "INSERT INTO `student_details` (name1,
email,address1,password1,Mobile_Number,Confirm_Password)
VALUES ('$a','$b','$c','$d','$e','$f')";


if($conn->query($sql) === TRUE) {
  header("location:../registersucc.html");
} else {
  header("location:../sregistererror.html");
}


$sql = "SELECT name1,
email,address1,password1,Mobile_Number,Confirm_Password FROM student_details";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "Registered Successfully";
//   }
// } else {
//   echo "0 results";
// }


$conn->close();
?>





