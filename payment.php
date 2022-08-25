<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Cart | GO 4 FOOD</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="payment.css">
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


<?php
}
?>
      </div>

      </div>
    </nav>

 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_ID . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        
            
          

        <?php
      }
      
  }

        ?>
                    <h1 style="text-align: center;text-shadow: 2px 2px lightgreen ; font-size:50px ; color:darkgreen ; margin-top: 5%">Choose your payment option</h1>
                    <center><hr style=" border:2px solid darkgray ; width:20%"></center>
          
        <br>
<h1 class="text-center">Grand Total: <i class="fa fa-inr"></i><?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center" style="font-size:20px" >including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning" style="font-size: 20px"> Go back to cart </button></a><br>
  <a href="onlinepay.php"><button class="btn btn-success" style="font-size: 20px; margin-top: 5px"> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success" style="font-size: 20px;margin-top: 5px"> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
        <footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2022 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>