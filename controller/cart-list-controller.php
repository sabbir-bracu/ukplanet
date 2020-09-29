<?php 
	$userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
    $userIDresult = mysqli_query($db,$userQuery);
    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
    	$userID = $userIDrow["id"];
    };


    $query = 'SELECT * from cart where user = ' . $userID;
    $result = mysqli_query($db,$query);
 ?>