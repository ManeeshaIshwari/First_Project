<?php
            require 'connection.php';

            if(isset($_POST['login'])){

                if(empty($_POST['email']) || empty($_POST['password1'])){
                    die("ERROR: Email or Password is empty.");
                }
                $user_email = $_POST['email'];
                $user_passwd = $_POST['password1'];
if ($_POST['choose']=='student')
               {$sql = "SELECT `password1` FROM `student_details` WHERE `email` LIKE '$user_email'";
                $result = $conn->query($sql);
            
                if ($result->num_rows != 1) {
                    header("location:../loginerror.html");
                }

                $row = $result->fetch_assoc();
                $passwd = $row['password1'];
                if(!hash_equals($user_passwd, $passwd)){
                    header("location:../loginerror.html");
                }
                header("location:../booking.html");
            }
elseif($_POST['choose']=='teacher')
                {$sql = "SELECT `password1` FROM `teacher_details` WHERE `email` LIKE '$user_email'";
                $result = $conn->query($sql);

                if ($result->num_rows != 1) {
                    header("location:../loginerror.html");
                }

                $row = $result->fetch_assoc();
                $passwd = $row['password1'];
                if(!hash_equals($user_passwd, $passwd)){
                    header("location:../loginerror.html");
                                                    }
                header("location:../index.html");
                }}
        ?>