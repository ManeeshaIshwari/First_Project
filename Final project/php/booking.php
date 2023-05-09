<?php
$servername = "localhost";
$Name = "root";
$Password = "";
$dbname="onlinedu";

$conn = new mysqli($servername,$Name, $Password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_POST["Course"];
$b=$_POST["Subject"];
$c=$_POST["Teacher"];

if(empty($_POST['MON'])){
    $sw1="";
    }
    else{
    $sw1= $_POST['MON'];
    }
    if(empty($_POST['TUE'])){
    $sw2="";
    }
    else{
    $sw2= $_POST['TUE'];
    }
    if(empty($_POST['WED'])){
    $sw3="";
    }
    else{
    $sw3= $_POST['WED'];
    }
    if(empty($_POST['THU'])){
    $sw4="";
    }
    else{
    $sw4= $_POST['THU'];
    }
    if(empty($_POST['FRI'])){
    $sw5="";
    }
    else{
    $sw5= $_POST['FRI'];
    }
    if(empty($_POST['SAT'])){
    $sw6="";
    }
    else{
    $sw6= $_POST['SAT'];
    }
    if(empty($_POST['SUN'])){
    $sw7="";
     }
    else{
    $sw7= $_POST['SUN'];
        }
    $d=$sw1."/".$sw2."/".$sw3."/".$sw4."/".$sw5."/".$sw6."/".$sw7;
  

$e=$_POST["stime"];
$f=$_POST["etime"];

$sql = "INSERT INTO `booking` (`course`,`subject1`,`teacher`,`days1`,`start_time`,`end_time`)
VALUES ('$a','$b','$c','$d','$e','$f')";


if($conn->query($sql) === TRUE) {
  // echo "Booked Successfully";
  header("Location:../bookingconfirm.html");
} else {
  header("Location:../bookingerror.html");
}


// $sql = "SELECT course,subject1,teacher,days1,start_time,end_time FROM booking";
// $result = $conn->query($sql);

// if($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
  
  $conn->close();
  ?>




