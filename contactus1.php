<html>

  <head>
    <title> Contact | Go 4 Food </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="aboutus.php"><i class="fa fa-users"></i> About</a></li>
            <li class="active"><a href="contactus.php"><i class="fa fa-envelope"></i> Contact Us</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Sign Up </a></li>
            <li><a href="#"> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into CONTACT1(name,email,mobile,subject,message) VALUES('" . $name . "','" . $email . "','" . $mobile . "','" . $subject . "','" . $message ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div>
  <center>
	<div>
		<h2> <?php echo "Welcome $name!" ?> </h2>
		<h1>Your message has been sent.</h1>
		<p>Go back to the site <a href="index.php">HERE</a></p>
	</div>
  </center>
</div>

    </body>
</html>