<?php 
	$userQuery = 'SELECT * from users where username = "' . $_SESSION['username'] . '"';
    $userIDresult = mysqli_query($db,$userQuery);
    while ($userIDrow = mysqli_fetch_array($userIDresult, MYSQLI_ASSOC)) {
    	$userID = $userIDrow["id"];
    };

    $userID = (int) $userID;


    $query = 'SELECT orderItems.productID, orders.orderStatus, orderItems.somoy from orderItems, orders 
    where orders.id = orderItems.orderid and orderItems.userID = ' . $userID;
    $result = mysqli_query($db,$query);
 ?>