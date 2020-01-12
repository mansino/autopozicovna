<section id="slider">
  <div class="container">
    <h3>Our Offers</h3>
    <div id="multiCarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
        <?php
          if ($result = mysqli_query($conn, "SELECT * FROM cars")) {
            foreach($result as $item) {
              echo '<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 active">';
                echo '<div class="custom_border box_shadow">';
                  echo '<img class="img-fluid mx-auto d-block" src="' . $img_start . $item['img_url'] . '" alt="' . $item['name'] . '">';
                  echo '<p class="car_name">' . $item['name'] . '<span class="car_price">' . $item['price'] . '&euro;</span></p>';
                  echo '<p class="car_info">';
                    $properties = explode("@",$item['properties']);
                    foreach($properties as $prop){
                      echo '<span>' . $prop . '</span>';
                    }
                  echo '</p>';
                echo '</div>';
              echo '</div>';
            }
            mysqli_free_result($result);
          }
        ?>
      </div>
      <a class="carousel-control-prev" href="#multiCarousel" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg text-muted"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next text-faded" href="#multiCarousel" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg text-muted"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
