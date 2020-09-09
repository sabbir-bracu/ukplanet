<?php 
	include ('all_products.php');
 	foreach ($products as $product_id => $product) {
      echo get_list_view_html($product_id,$product);
  	} 
 ?>