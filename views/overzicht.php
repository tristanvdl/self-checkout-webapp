		<div class="cta-button">
			<h3>Overzicht</h3>
		</div>
			<div class="sort-by">
				<div class="text"><h4>Sort by:</h4></div>
				<div class="sort-button">
					<a class="" href="#">Price</a>
				</div>
				<div class="sort-button">
					<a class="" href="#">Alphabet</a>
				</div>
				<div class="clear"></div>
			</div><!--End Sort by-->

		<?php
		foreach($resultall as $row){
		  $imgNumber = $row['product_image'];
		  $price = $row['product_price'];
		  $name = $row['product_name'];
			$id = $row['id'];
		  ?>
		    <div class='product darkgray'>
<<<<<<< HEAD
		      <div class='info-button'><a href='?action=product&id= <?php echo $id;  ?>'><i class='fa fa-arrow-circle-right' aria-hidden='true'></i></a></div>
=======
			<a href='product.html'>
>>>>>>> 7968615f0ad18c2bc99c1e109d064580aa91a0c7
		        <div class='image'>
		          <img src='assets/links/<?php echo $imgNumber; ?>.JPG' alt='backpack'>
		        </div>
		        <div class='info-product'>
		          <div class='title-product'>
		            <h1><?php echo $name; ?></h1>
		          </div>
		          <div class='price-product'>
		            <h4><span class='bold'>Prijs:</span> &euro; <?php echo $price; ?></h4>
		          </div>
		        </div><!--End info-product-->
		      <div class='clear'></div>
		  </a>
		    </div><!--End product-->
		<?php } ?>
