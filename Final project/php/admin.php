<?php
require 'connection.php';
session_start();
if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password1'])) {
        die('ERROR: Email or Password is empty.');
    }
    $user_email = $_POST['email'];
    $user_passwd = $_POST['password1'];

    $sql = "SELECT `password1` FROM `admin` WHERE `email` LIKE '$user_email' limit 1";
    $result = $conn->query($sql);
    $fetch = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['email'] = $fetch['password1'];
        echo "<script>window.location='../adminpanel/index3.php'</script>";
    } else {
        echo "<script>window.location='../adminloginerror.html'</script>";
    }

    // if ($result->num_rows != 1) {

    //     header("location:../adminloginerror.html");
    // }

    // $row = $result->fetch_assoc();
    // $passwd = $row['password1'];
    // if (!hash_equals($user_passwd, $passwd)) {
    //     header("location:../registersucc.html");
    // }
    // header("location:../adminpanel/index3.php");
}
?>
