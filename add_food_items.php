<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | GO 4 FOOD </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript">

    function display_alert()
    {
      alert("Data Added Successfully...!!!");
    }
  </script>

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
            <li class="active" style="font-size: 20px"  ><a href="index.php"> GO 4 FOOD</a></li>
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
      <img src="images/slide002.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="images/slide003.jpg" style="width:100%; ">
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
        <a href="myrestaurant.php" class="list-group-item">My Restaurant</a>
        <a href="view_food_items.php" class="list-group-item ">View Food Items</a>
        <a href="add_food_items.php" class="list-group-item active">Add Food Items</a>
        <a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
        <a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
      </div>
    </div>
    </td>


    

<td>
    <div class="container">
      <div class="col-md-5 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading"> Add New Food Item Here</div>
        <div class="panel-body">
          
        <form role="form" action="add_food_items1.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="name">Food Name: </label>
            <div class="input-group">
              <input class="form-control" id="name" type="text" name="name" placeholder="Your Food Name:" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"> Food Price: </label>
            <div class="input-group">
              <input class="form-control" id="price" type="text" name="price" placeholder="Your Food Price (INR)" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-creative-commons" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>


        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"> Upload image: </label>
            <div class="input-group">
              <input class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></label>
            </i>
              </span>
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit" onClick="display_alert()"> ADD FOOD ITEM</button>
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