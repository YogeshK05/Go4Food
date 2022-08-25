<?php
session_start();
?>

<html>

  <head>
    <title> About | GO 4 FOOD</title>
  </head>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="managerlogin.css">
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

<!--

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

      <div class="team-section">
  <!--<h1>GO 4 FOOD</h1>-->
  <div class="logo">
      <img src="images/logo.png">
<br><br>
<img src="images/3.jpg" style="width: 70%; box-shadow: 0px 0px 30px gray;">
<br><br>
<table>
  <tr>
    <td style="text-align: justify;padding: 20px; font-family: cursive;">
  Eating is one of life’s pleasure and pride – so is cooking and serving good food to others. A restaurant is a commercial outfit which specializes in the preparation of quality food and to serve them to satisfy the customer’s demands. Their motto is “Customers are our assets and satisfied customers are our source of wealth”. Go 4 Food do have state of the art kitchens in their premises, where food items are prepared, following a fixed menu to serve the customers.
    </td>
    <td style="text-align: justify;padding: 20px; font-family: cursive;">
  Eating is the place where people are served food, drinks and desserts for their money. The food is served normally within a building even though presently, one can be given packed food to be eaten away. Food in a restaurant is prepared by chefs. Sometimes, restaurants specialize in the kind of food they offer. As with so many ideas that evolve over time, restaurants now serve a larger role in society, they have become places of social contact. 
    </td>
  </tr>
</table>
  </div>
    <h4 style="font-family: Times New Roman"><b>Click on the photo to know more..</b></h4>
  <span class="border"></span>
  <div class="ps">
    <a href="#p1"><img src="https://media.istockphoto.com/vectors/simple-man-head-icon-set-vector-id1196083861?k=20&m=1196083861&s=612x612&w=0&h=XNRxC4ohwTlL7KBis1Dc_MZASQSKfC9IoBfe2Oq9eL0=" alt="person image"></a>
    <a href="#p2"><img src="https://media.istockphoto.com/vectors/simple-man-head-icon-set-vector-id1196083861?k=20&m=1196083861&s=612x612&w=0&h=XNRxC4ohwTlL7KBis1Dc_MZASQSKfC9IoBfe2Oq9eL0=" alt="person image"></a>
    <a href="#p3"><img src="https://media.istockphoto.com/vectors/simple-man-head-icon-set-vector-id1196083861?k=20&m=1196083861&s=612x612&w=0&h=XNRxC4ohwTlL7KBis1Dc_MZASQSKfC9IoBfe2Oq9eL0=" alt="person image"></a>
    <a href="#p4"><img src="https://media.istockphoto.com/vectors/simple-man-head-icon-set-vector-id1196083861?k=20&m=1196083861&s=612x612&w=0&h=XNRxC4ohwTlL7KBis1Dc_MZASQSKfC9IoBfe2Oq9eL0=" alt="person image"></a>
    <a href="#p5"><img src="https://media.istockphoto.com/vectors/simple-man-head-icon-set-vector-id1196083861?k=20&m=1196083861&s=612x612&w=0&h=XNRxC4ohwTlL7KBis1Dc_MZASQSKfC9IoBfe2Oq9eL0=" alt="person image"></a>
  </div>
  <div class="section" id="p1">
    <span class="name">Shubhankar Joshi</span>
    <span class="border"></span>
  </div>
  <div class="section" id="p2">
    <span class="name">Yogesh Kadam</span>
    <span class="border"></span>
  </div>
  <div class="section" id="p3">
    <span class="name">Varad Kajarekar</span>
    <span class="border"></span>
  </div>
  <div class="section" id="p4">
    <span class="name">Krunal Kale</span>
    <span class="border"></span>
  </div>
  <div class="section" id="p5">
    <span class="name">Jayesh Kamane</span>
    <span class="border"></span>
  </div>
</div>
         </body>
         <footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2022 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>