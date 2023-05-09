<?php
// connect to mysql database
$con = mysqli_connect("localhost", "root", "", "onlinedu") or die("Error " . mysqli_error($con));

// check if form is submitted
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $upwd = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT name1 FROM student_details WHERE email = '" . $uemail. "' and password1 = '" . md5($upwd) . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['user_id'] = $row['name1'];
        // $_SESSION['user_name'] = $row['name'];
        header("Location:../booking.html");
    }
    else
    {
        // login failed
        header("Location:../loginerror.html");
    }
}
?>