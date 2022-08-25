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

  <link rel="stylesheet" type = "text/css" href ="edit_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript">

    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
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

    
    	<div class="col-xs-3" style="text-align: center;">
<br>
    	<div class="list-group" style="margin-left: 10%">
    		<a href="myrestaurant.php" class="list-group-item ">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item active">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
    
    <div class="col-xs-3">
      <div class="form-area" style="background-color: white; ">
  
    <div style="text-align: center;">
      <h3 style="color: black; text-align: center;text-shadow: 2px 2px lightgreen"><u>Click On Menu </u><br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    /*$description = $_GET['ddescription'];*/


    $query = mysqli_query($conn, "UPDATE food set
    name='$name', price='$price' where F_ID='$F_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM food f WHERE f.R_ID IN (SELECT r.R_ID FROM RESTAURANTS r WHERE r.M_ID='$user_check') ORDER BY F_ID");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: left; color: black; font-size: 15px">
        <?php
      echo "<b><a href='edit_food_items.php?update= {$row['F_ID']}'>{$row['name']}  ></a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM food WHERE F_ID=$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>



<div class="">
<div class="col-md-6">
 <div class="form-area" style="padding: 0px 100px 100px 100px; background: white; border: none;">
        <form action="edit_food_items.php" method="GET">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> <b>EDIT YOUR FOOD ITEMS HERE</b> </h3>

          <div class="form-group">
            <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['name'];  ?> placeholder="Your Food name" required="" >
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Food Price (INR)" required="">
          </div>


          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
      </div>
        </form>


    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
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