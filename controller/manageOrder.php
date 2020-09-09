<?php 
	$items = array();

	    include ('connection.php');

	    $query = 'SELECT * from orderItems, orders where orders.id = orderItems.orderid';
	    $result = mysqli_query($db,$query);

	    $orderCnt = 0;
	    while ($item_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	      $product_id = $item_row["productID"];
	      $timestamp = $item_row["somoy"];
	      $orderStatus = $item_row["orderStatus"];
	      $user = $item_row["user"];
	      $order_id = $item_row["id"];
	      $person = $item_row["firstName"];
	      $person = $person . ' ' . $item_row["lastName"];
	      $address = $item_row["address"];
	      $address = $address . '<br>' . $item_row["address2"] . ' ';
	      $address = $address . '<br>State: ' . $item_row["state"] . ' City: ' . $item_row["city"];
	      $address = $address . '<br>Telephone: ' . $item_row["telephone"];
	      $address = $address . '<br>Phone: ' . $item_row["phone"];

	      $productQuery = 'SELECT * from products where id = ' . $product_id;
	      $product_result = mysqli_query($db,$productQuery);
	      $row = mysqli_fetch_array($product_result, MYSQLI_ASSOC);

	      $id = $row["id"];
	      $brand = $row["brand"];
	      $year = $row["year"];
	      $name = $row["model"];
	      $type = $row["type"];
	      $size = $row["size"];
	      $processor = $row["processor"];
	      $ram = $row["ram"];
	      $ssd = $row["storage"];
	      $battery = $row["battery"];
	      $cond = $row["cond"];
	      $gpu = $row["gpu"];
	      $bulkPrice = $row["bulkPrice"];
	      $price = $row["sellPrice"];
	      $availability = $row["availability"];
	      $description = $row["description"];
	      $img1 = $row["image1"];
	    

	       $items[$orderCnt] = array(
	      "brand" => $brand,
	      "year" => $year,
	      "name" => $name,
	      "cat"   => $type,
	      "sizes" => $size,
	      "processor" => $processor,
	      "ram" => $ram,
	      "storage" => $ssd,
	      "battery" => $battery,
	      "cond" => $cond,
	      "gpu" => $gpu,
	      "bulkPrice" => $bulkPrice,
	      "price" => $price,
	      "availability" => $availability,
	      "description" => $description,
	      "img-t" => "products/" . $img1,
	      "orderID" => $order_id,
	      "date" => $timestamp,
	      "orderStatus" => $orderStatus,
	      "person" => $person,
	      "address" => $address,
	      "id" => $product_id
	      );
	       $orderCnt = $orderCnt + 1;
	    }
			 		

			foreach ($items as $product_id => $product) {
				 echo get_list_view_html($product_id,$product);
			}

	if (isset($_POST['modify_order'])) {
		// connect to database
		include ('connection.php');

		$get_order_id = $_POST['order-id-input'];
		$newOrderStatus = $_POST['order-status-input'];
		
		$sql = "UPDATE orders SET orderStatus = '$newOrderStatus' WHERE id = '$get_order_id'";

		$modifyAQuery = mysqli_query($db, $sql); // store the submitted data to the database..
		if ($modifyAQuery && $id) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Modified.";
			echo "</div>";
		}
	}

	if (isset($_POST['delete_order'])) {
		// connect to database
		include ('connection.php');

		$get_order_id = $_POST['order-id-input'];
		
		$sql = "DELETE orders, orderItems FROM orders INNER JOIN orderItems WHERE orders.id = orderItems.orderid and orders.id = '$get_order_id'";

		$deleteQuery = mysqli_query($db, $sql); // store the submitted data to the database..
		if ($deleteQuery && $id) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Item deleted.";
			echo "</div>";
		}
		
			
	}
 ?>