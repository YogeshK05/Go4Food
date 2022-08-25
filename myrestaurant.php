<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | GO 4 FOOD </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="myrestaurant.css">
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
            <li class="active" style="font-size: 20px" ><a href="index.php"> GO 4 FOOD</a></li>
            <li class="active" ><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active" ><a href="aboutus.php"><i class="fa fa-users"></i> About</a></li>
            <li class="active" ><a href="contactus.php"><i class="fa fa-envelope"></i> Contact Us</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user"></i> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php"><i class="fa fa-dashboard"></i> MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><i class="fa fa-sign-out"></i> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>





    
    <!--<center><img src="images/3.jpg" style="box-shadow: 0px 0px 50px gray"></center>
    <br><br><br>-->

      
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/slide001.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
       
       <!--div class="item">
      <img src="images/home.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div-->

      <div class="item">
      <img src="images/slide002.jpg" style="width:100%; height: 69%">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="images/slide003.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
    
    </div>
    </div>
    <br><br>
     <h1 style="color: black; text-align: center;text-shadow: 2px 2px lightgreen">Hello Manager!!! </h1>
     <p style="font-size: 15px; text-align: center;">Manage all your restaurant from here..</p>
     <center><hr style=" border:2px solid darkgray ; width:20%"></center>
     <br><br><br>
     
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    	<div class="col-xs-3" style="text-align: center; margin-left: 10%">

    	<div class="list-group">
    		<a href="myrestaurant.php" class="list-group-item active">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
    		<a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
    </td>


    

<td>
    <div class="container">
      <div class="col-md-5 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading"> My Restaurant</div>
        <div class="panel-body">
          
        <form role="form" action="myrestaurant1.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="name"> Restaurant's name: </label>
            <div class="input-group">
              <input class="form-control" id="name" type="text" name="name" placeholder="Restaurant's name:" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"> Restaurant's Email-id: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Restaurant's Email-id" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"> Restaurant's Contact number: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Restaurant's Contact number" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"> Restaurant's Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Restaurant's Address" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">ADD RESTAURANT</button>
          </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br><br>
     <!-- </td>
    </tr>
        </table>-->
  </body>
  <footer class="container-fluid text-center" style="background-color: #484848; color: white;">
  <br>
  <p> Go 4 Food 2022 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>






















































































<!--
    <div class="col-xs-9" style="margin-left: 15%">
      <div class="form-area" style="padding: 0px 100px 100px 100px;background-color: white;">
        <form action="myrestaurant1.php" method="POST" style="background-color: white">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; color: black"> My Restaurant</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Restaurant's Name" required="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Restaurant's Email" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Restaurant's Contact Number" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Your Restaurant's Address" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD RESTAURANT </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>-->
