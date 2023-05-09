
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
 
    <title>onlinEdu</title>
    <link href="../css/admin3.css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   

    <script>
        $(document).ready(function () {

$('.menu').click(function() {
    $('.overlay').toggleClass('anim');
    $(this).addClass('open')
});

$('.open').click(function(){
    $('.overlay').toggleClass('reverse-animation');
})
});
        </script>
</head>
<body>
    <div class="BG">
        <nav>
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <ul>
            <li><a class="active" href="index.html">Home</a></li>
            
            <li><a href="#">Register</a>
                <ul>
                    <li><a href="register.html">As Student</a></li>
                    <li><a href="tregister.html">As Teacher</a></li>
                </ul>
            </li>

            <li><a href="stlogin.html">Login</a></li>

            <li><a href="#">Classes</a>
                <ul>
                    <li><a href="#">Grade 10</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Grade 11</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Revision</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li><a href="aboutus.html">About</a></li>

            <li><a href="contactus.html">Contact</a></li>
          </ul>
        </nav>
    
      </div>

<div class="container1" class="text-container">
    <Center>
        <img src="../image/logoa.png" width="10%" height="10%">
        <hr>
</Center>
<br><br><br>

<?php
$host = "localhost";
$user = "root";
$passwd = "";
$db = "onlinedu";


//create connection
$conn = mysqli_connect($host, $user, $passwd, $db);
if (isset($_POST['tdet']))
    {
//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($conn,"SELECT * FROM teacher_details");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table border="1" cellpadding="5px">
        <tr>';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
      
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";

    }
    elseif(isset($_POST['sdet'])){
      if(mysqli_connect_errno()){
        die("connection failed: "
            . mysqli_connect_error()
            . " (" . mysqli_connect_errno()
            . ")");
    }
    
    //get results from database
    $result = mysqli_query($conn,"SELECT * FROM student_details");
    $all_property = array();  //declare an array for saving property
    
    //showing property
    echo '<table border="1" cellpadding="5px">
            <tr>';  //initialize table tag
    while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';  //get field name for header
        array_push($all_property, $property->name);  //save those to array
    }
    echo '</tr>'; //end tr tag
    
    //showing all data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($all_property as $item) {
            echo '<td>' . $row[$item] . '</td>'; //get items using property value
        }
        echo '</tr>';
    }
    echo "</table>";

    }
    else{
      if(mysqli_connect_errno()){
        die("connection failed: "
            . mysqli_connect_error()
            . " (" . mysqli_connect_errno()
            . ")");
    }
    
    //get results from database
    $result = mysqli_query($conn,"SELECT * FROM booking");
    $all_property = array();  //declare an array for saving property
    
    //showing property
    echo '<table border="1" cellpadding="5px">
            <tr>';  //initialize table tag
    while ($property = mysqli_fetch_field($result)) {
        echo '<th>' . $property->name . '</th>';  //get field name for header
        array_push($all_property, $property->name);  //save those to array
    }
    echo '</tr>'; //end tr tag
    
    //showing all data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($all_property as $item) {
            echo '<td>' . $row[$item] . '</td>'; //get items using property value
        }
        echo '</tr>';
    }
    echo "</table>";

    }
?>

<div>
<button type="delete" class="button"  class="login-btn" name="delete2"><span>DELETE</span></button>

<button type="update" class="button" class="login-btn" name="update" ><span>UPDATE</span></button>

</div>


</div>
<br>






<footer class="footer-distributed">

    <div class="footer-left">

        <h3><span>onlinEdu</span></h3>

        <p class="footer-links">
            <a href="index.html" class="link-1">Home</a>
            
            <a href="aboutus.html">About</a>
            
            <a href="contactus.html">Contact</a>

            <a href="adminlogin.php">Admin Only</a>
        </p>

        <p class="footer-company-name">onlinEdu © 2022</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Baddegama</span> Galle,Sri Lanka</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+94 677 567 234</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">onlinedu@company.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>
  
</body>
</html>
