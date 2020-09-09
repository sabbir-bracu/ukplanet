<?php
   $title = "Manage Orders"; 
   include ('header.php') ;
  ?>
 
<div class="container">
	<div class="col-lg-8">
		<br>
	<table class="table table-bordered">

		<?php	
			include('../model/manageOrder.php');
			include('../controller/manageOrder.php');
		?>
	</table>
	</div>
	<br>
	<div class="col-lg-4">
	<form method="post" enctype="multipart/form-data">
	    <table class="table table-bordered">
	      <thead>
	        <tr class="warning">
	          <td><b>Order ID</b></td>
	          <td><input type="text" name="order-id-input"></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr class="warning">
	          <td>
	            Order Status
	          </td>
	          <td>
	            <input type="text" name="order-status-input">
	          </td>
	        </tr>
	        <tr class="warning">
	          <td>
	            <button type="submit" name="delete_order" class="btn btn-danger">Delete Orders</button>
	          </td>
	          <td>
	            <button type="submit" name="modify_order" class="btn btn-info">Modify Order</button>
	          </td>
	        </tr>
	      </tbody>
	    </table>
    </form>
    
  </div>
</div>

<?php include ('footer.php') ?>