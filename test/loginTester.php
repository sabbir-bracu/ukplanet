<?php
  include('../controller/server.php');
  $title = "Login"; 

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

<div class="container">
<div class="row center">
  <div class="col-md-6 offset-md-3">
    <h3>Login</h3>
  </div>
</div>
<div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post" action="loginTester.php">
        <div class="form-group" hidden>
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="sparnabd">
          <small id="emailHelp" class="form-text text-muted">Enter username. Not Email</small>
        </div>
        <div class="form-group" hidden>
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="12345">
        </div>
        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
      </form>
    </div>
</div>
</div>






