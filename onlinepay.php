<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2']) || !isset($_SESSION['cart'])){
header("location: customerlogin.php"); 
}

?>

<html>

  <head >
    <title> Online Payment | GO 4 FOOD</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="COD.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <li class="active" style="font-size: 20px" ><a href="index.php"> GO 4 FOOD </a></li>
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
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
            <li><a href="#"><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
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
            <li><a href="logout_u.php"><i class="fa fa-sign-out"></i> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>



<div class="container">
          <br><br>
          <h1 class="text-center" style="text-align: center;text-shadow: 2px 2px lightgreen ; font-size:50px ; color:darkgreen ">Online Payment</h1>
          <p class="text-center" style="font-size: 20px">Enter your payment details below.</p>
          <center><hr style=" border:2px solid darkgray ; width:20%"></center>
          <br><br>
          
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="credit-card-div">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-muted"> Credit Card Number</h5>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" required="" />
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font"> Expiry Month</span>
                                <input type="text" class="form-control" placeholder="MM" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  Expiry Year</span>
                                <input type="text" class="form-control" placeholder="YY" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  CVV</span>
                                <input type="text" class="form-control" placeholder="CVV" required="" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3"><br>
                                <img src="images/creditcard.png" class="img-rounded" required="" />
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">

                                <input type="text" class="form-control" placeholder="Name On The Card" required="" />
                            </div>
                        </div>
                        <br>
                       
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                             <a href="payment.php"><input type="submit" class="btn btn-danger btn-block" value="CANCEL" required="" /></a>   
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                              <a href="COD.php"><input type="submit" class="btn btn-success btn-block" value="PAY NOW" required="" /></a>  
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          
        </div>
    </div>
    
</div>


           </body>
           <br><br><br>
           <footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2022 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>