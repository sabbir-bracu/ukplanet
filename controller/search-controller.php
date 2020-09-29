<?php 
	$query = 'SELECT * from products where brand like "%' . $keywords . '%" or model like "%' . $keywords . '%" or year like "%' . $keywords . '%" 
            or storage like "%' . $keywords . '%" or CONCAT(brand, " ", model) like "%' . $keywords . '%" or CONCAT(brand, " ", model, " ", year)
             like "%' . $keywords . '%" or CONCAT(brand, " ", model, " ", year, " ", processor, " ", ram) like "%' . $keywords . '%"  ';
  $result = mysqli_query($db,$query);
 ?>