<?php

include('../controller/adminController.php');
$pass = $_POST['pass'];

if($pass == "123" || $pass == "abcd")
{
        include("adminLayout.php");
}
else
{
    if(isset($_POST))
    {?>
    	<div class="container"></div>
    	<div style="text-align: center; margin-top: 50px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action="admin.php">
            <h3><span class="glyphicon glyphicon-lock">Password</h3>
            <input type="password" name="pass"></input>
            <input type="submit" name="submit" value="Go"></input>
            </form>
        </div>
    <?}
}

include ('footer.php')
?>