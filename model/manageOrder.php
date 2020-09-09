<?php 
	function get_list_view_html($product_id, $product) {
		    $output = '
		    	<tr class="warning">
					<td>
						<div class="col-lg-12">
							<div class="col-lg-2">
								<img style="max-height: 96px; max-width: 100px;" src="' . $product["img-t"] . '">
							</div>

							<div class="col-lg-8"> 
				      			<a href="http://localhost/ukplanet/product.php?id=' . $product["id"] . '">
	              					<h4>' . $product["brand"] . ' ' . $product["name"] .' ' . $product["year"] . '</h4>
	            				</a>
								<p>Size: <a href="#">13"</a> Qty: <a href="#">1</a></p>
					            <p><strong>Order Time: </strong>' . $product["date"] . '<br><strong>Ordered by: </strong>' . $product["person"] . '<br>
					            <strong>Address: </strong>' . $product["address"] . '
					            </p>
								<p><strong>Order Status: </strong>' . $product["orderStatus"] . '
									<br><strong>Availability: </strong>' . $product["availability"] . '
									<br><strong>Order ID: </strong>' . $product["orderID"] . '
					            </p>
							</div>

							<div class="col-lg-1">
								<p><strong>BDT ' . $product["price"] . '</strong></p>
							</div>
						</div>
					</td>
				</tr>
		    ';
		    
	        return $output;
	    }
 ?>