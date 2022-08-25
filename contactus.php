<?php
session_start();
?>

<html>

  <head>
    <title> Contact | GO 4 FOOD </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="contactus.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <!--<script type="text/javascript" src="js/valid_manager.js"></script>-->

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
               <li class="active" style="font-size: 20px"><a href="index.php"> GO 4 FOOD</a></li>
            <li class="active" ><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="aboutus.php"><i class="fa fa-users"></i> About</a></li>
            <li class="active"><a href="contactus.php"><i class="fa fa-envelope"></i> Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><i class="fa fa-sign-out"></i> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user"></i>  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><i class="fa fa-cutlery"></i> Food Zone </a></li>
            <li><a href="cart.php"><i class="fa fa-cart-plus"></i> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><<i class="fa fa-sign-out"></i>  Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="customersignup.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li > <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="customerlogin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>


    <br>

    <center>
      <h1>
     <strong>Want to contact <span class="edit"> Go 4 Food </span>?</strong></h1>
     <br>
    <h4><b>Here are a few ways to get in touch with us.</b></h4>
    <div class="col-xs-5 line"></div>
        <div class="col-xs-2 logo"><img src="images/logo.png"></div>
        <div class="col-xs-5 line"></div>
        <br><br><br><br><br><br><br><br>
</center>
    <div class="col-xs-12 line"></div>
    <hr>
<table style="padding-left: 10%">
  <tr>
    <td style="padding-left: 10%">
      <img src="images/4.png">
    </td>
  
  <td>
    <div class="container" >
    <div class="col-md-5" style="float: none;">
      <div class="form-area">
        <form method="post" action="contactus1.php" >
        <br><!--style="clear: both"-->
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; color: blue;"><b> Contact Form</b></h3>

          <div class="form-group"><!--wrap lebels and form control in single class-->
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div><!--class to textual elements only.-->

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <button class="btn btn-primary pull-right" type="submit">Submit</button>
          <button class="btn btn-primary pull-left" type="reset" style="background-color: green">Reset</button>
          <!--<input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    -->
        </form>

        
      </div>
    </div>
      
    </div>
    </td>
    </tr>
</table>
<br><br><br>
</body>
<footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2022 | &copy All Rights Reserved </p>
  <br>
  </footer>
  
</html>




























































   <!--<?php
/*if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}*/
?>-->

     


             <!--<div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
             <li class="active" ><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="aboutus.php"><i class="fa fa-users"></i> About</a></li>
             <li class="active"><a href="contactus.php"><i class="fa fa-envelope"></i> Contact Us</a></li>

          </ul>

       
<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
            
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              
            </ul>
            </li>
          </ul>


        </div>

      </div>
    </nav>-->