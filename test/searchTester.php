<?php
   $title = "Search Tester";
   echo '<form class="navbar-form navbar-left" action="searchTester.php" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="keywords" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="search">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>';
   $keywords = $_POST['keywords'];
   $category = 'Search Tester: ' . $keywords ;
  ?>
<div class="container category_title">
<h1><?php echo "$category"; ?></h1>
</div>

<?php
  include('../model/search.php');

  foreach ($products as $product_id => $product) {
      echo get_list_view_html($product_id,$product);
  } 
?>