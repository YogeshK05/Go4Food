
<?php
session_start();
?>

<html>

  <head>
    <title> Home | GO 4 FOOD </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="index.css">

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

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/logo.png"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Giving your Hunger a new Option</div>
    </div>
<table> 
  <th style="padding: 10px">  
    <td style="padding: 50px">  <img src="images/Baahubali_Thali.jpg" style="box-shadow: 10px 10px 5px gray; "> </td>
    </th>

     <th>  
    <td>   <h2 style="font-family: cursive;"> Food Connects People </h2>
      <h4 style="font-family: times new roman; text-align:justify;">  
Great food brings people together. When people connect over a meal,
it gives them time to refuel and build relationships with others.
We deliver culinary excellence to guests at corporate workplaces, and manufacturing  companies, college campuses, and organizations of all sizes.  Infusing the best wellness and sustainability practices, seasonal and authentic  ingredients ensures we serve delicious meals 
every time. With Canteen as your food service company, we’ll create dining 
experiences your guests    love. <br> <br> <br>  India is all about mouth watering cuisines. No wonder why Indian cuisine always tops the  foodies list worldwide. And these are not just food ,but the emotions of people. <br><br><br><br><br><br><h3 style="font-family: cursive"><b>Feeling Hungry?</b></h3><br><br><br> <a href="customerlogin.php" role="button" style="background: green; font-size: 20px; color: white; padding: 20px 20px;"> Order Now </a></h4> </td>
<td><img src="images/1.jpeg" style="height: 600px"></td>
    </th>
    <br>
</table>
    </div>
</body>
<footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2021 | &copy All Rights Reserved </p>
  <br>
  </footer>
  
</html>