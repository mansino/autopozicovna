<?php
  include "connect.php";
  $conn = openCon();
  $img_start = '/auto/';
?>
<!doctype html>
<html>
  <?php include "templates/head.php";?>
  <body>
    <?php include "templates/navigation.php";?>
    <main role="main">
  		<section id="main_offer">
  			<div class="main_bg"></div>
  			<div class="container">
  				<div class="row">
  					<?php include "templates/vehicle_form.php"; ?>
  					<div class="col-sm-12 col-md no-padding">
  						<div class="main_head">
  							<p><span>SELECTION BY MARK</span><span>SELECTION BY TYPE</span><span>NEW ARRIVALS</span></p>
  						</div>
  						<div class="main_content_w">
  							<div class="first_part">
  								<p><img src="img/checkbox.png" /><span>Seasonal Tires</span></p>
  								<p><img src="img/checkbox.png" /><span>Clean Car With Full Tank</span></p>
  								<p><img src="img/checkbox.png" /><span>Slovak Highway Sign</span></p>
  							</div>
  							<div class="second_part">
  								<p><img src="img/checkbox.png" /><span>Unlimited Mileage</span></p>
  								<p><img src="img/checkbox.png" /><span>Replacement of the Vehicle in Case of Failure</span></p>
  								<p><img src="img/checkbox.png" /><span>Second Wire Free</span></p>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</section>
  		<section id="cards">
  			<div class="container">
  				<div class="row custom_border box_shadow">
  					<div class="col-md-6 card_item">
  						<h4>Donec Tempus</h4>
  						<p class="text-center">Sed ac commodo felis. Donec in urna et velit tincidunt semper sit amet a purus. Duis ut nisl eget ex consequat accumsan et id nisi. Suspendisse efficitur suscipit mauris quis cursus. Sed a mollis justo. Suspendisse vestibulum sit amet felis eget posuere. Vestibulum id urna ut quam iaculis cursus eu in dolor.</p>
  						<img class="img-fluid" title="Picture" src="./img/card1.png"/>
  					</div>
  					<div class="col-md-6 card_item">
  						<h4>Vestibulum Auctor</h4>
  						<p class="text-center">Sed vel dapibus lorem. Fusce in vestibulum erat. Quisque ornare eleifend libero, at sodales enim vehicula a. Nam sit amet vulputate purus. Quisque ac enim in sem cursus rutrum ac vel sapien. Fusce mollis mattis auctor. Etiam eget varius turpis. Donec feugiat libero vitae ante bibendum egestas quis a ligula.</p>
  						<img class="img-fluid" title="Picture" src="./img/card2.png"/>
  					</div>
  				</div>
  			</div>
  		</section>
  		<?php include "templates/slider.php";?>
  	</main>
  </body>
  <?php include "templates/footer.php";
  closeCon($conn);
  ?>
</html>
