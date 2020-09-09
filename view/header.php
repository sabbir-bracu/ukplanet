<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo "$title"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="img/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
</head>
<body>
  <?php 
    error_reporting(1);
    session_start(); 

    if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      //header('location: login.php');
    }
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: index.php");
    }


    if (isset($_POST['search'])) {
      $keywords = $_POST["keywords"];
    }
  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="UK Planet Home"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fab fa-apple"></i> Products
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="mb.php">Macbook</a></li>
                <li><a href="mbpro.php">Macbook Pro</a></li>
                <li><a href="mbair.php">Macbook Air</a></li>
                <li><a href="imac.php">iMac</a></li>
                <li><a href="iphone.php">iPhone</a></li>
                <li><a href="ipad.php">iPad</a></li>
                <li><a href="accessories.php">Accessories</a></li>
                <li><a href="windows.php">Windows Laptops</a></li>
              </ul>
            </li> 
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
            <form class="navbar-form navbar-left" action="search.php" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="keywords" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="search">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
            </li>
            


  <!-- logged in user information -->
  <?php  if (isset($_SESSION['username'])) { 
    echo '<li><a onclick="" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <script>
              function clicked() {
                alert("Cart is not available. Please click on Buy Now");
              }
            </script>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="far fa-user-circle"></i> ' . $_SESSION['username'] . '
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="orders.php"><span class="glyphicon glyphicon-ok-circle"></span> Orders</a></li>
                <li><a href="index.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
              </ul>
          </li>';

          //<li><a href="#"><span class="glyphicon glyphicon-user"></span> View Profile</a></li>
    }


    else {
      echo '<li><a onclick="clicked()" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <script>
              function clicked() {
                alert("Cart is not available without login. Please click on Buy Now");
              }
            </script>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="far fa-user-circle"></i> Profile
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-plus-sign"></span> Sign Up</a></li>
              </ul>
            </li>';
    }
  ?>

            
          </ul>
        </div>
      </div>
    </nav>

    <div style="height: 50px;display: block;" class="container after-nav"></div>


	<div>