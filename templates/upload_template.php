<div class="container">
  <div class="row">
    <div class="col">
      <div class="header_wrap text-right">
        <button type="button" class="btn btn-primary" onclick="logout()">Odhlásiť</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <br/>
      <br/>
      <form action="update_car.php" method="post" id="uploadForm">
        <h5>Pridanie auta</h5>
        <input type="hidden" value="addcar" name="type"/>
        <input type="text" name="name" placeholder="názov auta" required>
        <input type="number" name="price" placeholder="cena" required>
        <input type="text" name="properties" placeholder="vlastnosti" required>
        <label>Obrázok:<input type="file" name="file" required></label>
        <br/>
        <br/>
        <input type="submit" value="Pridať vozidlo" class="btn btn-primary">
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php
        $items = mysqli_query($conn, "SELECT * FROM cars");
        if(mysqli_num_rows($items) == 0){
          echo '<p>Žiadne autá v ponuke</p>';
        }else{
          echo '<br/><br/><table class="table" id="table_cars"><thead class="thead-dark"><tr><th style="width:220px;">Obrázok</th><th>Názov auta</th><th>Vlastnosti</th><th>Cena</th><th style="width: 120px;"></th></tr></thead><tbody>';
          foreach($items as $item) {
            echo '<tr data-row="' . $item["pk"] . '"><td><img src="' . $img_start . $item['img_url'] . '" class="car_img"/></td><td>' . $item['name'] . '</td>';
            echo '<td class="all_properties">';
            $properties = explode("@",$item['properties']);
            foreach($properties as $prop){
              echo '<span>' . $prop . '</span>';
            }
            echo '</td>';
            echo '<td>' . $item['price'] . '&euro;</td><td><button type="button" class="btn btn-danger" onclick="removeCar(' . $item["pk"] . ', \'' . $item['img_url'] . '\')">odstrániť</button></td></tr>';
          }
          echo '</tbody></table>';
          mysqli_free_result($items);
        }
      ?>
    </div>
</div>
