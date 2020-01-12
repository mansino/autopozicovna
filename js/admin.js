$(document).ready(function(e){
    $("#uploadForm").on('submit', function(e){
      e.preventDefault();
      var obj = this;
      $.ajax({
        type: 'POST',
        url: 'update_car.php',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData:false
      }).done(function(resp){
        if(resp.ok){
          addNewCar({"pk":resp.pk, "name": obj.name.value, "img_url": resp.img_url, "price": obj.price.value, "properties": obj.properties.value });
          $("#uploadForm")[0].reset();
        }else alert(resp.message);
      });
    });
});

function removeCar(pk, file_path){
  $.ajax({
    type: 'POST',
    url: 'update_car.php',
    dataType: 'json',
    data: 'type=removecar&pk=' + pk + "&file_path=" + file_path
  }).done(function(resp){
    if(resp.ok){
      $("[data-row=" + pk + "]").remove();
    }else alert("Nepodarilo sa odstrániť auto");
  });
}

function logout(){
  $.ajax({
    type: 'POST',
    url: 'logout.php',
    dataType: 'json'
  }).done(function(resp){
    if(resp.ok) location.reload();
    else alert("Nepodarilo sa odhlásiť");
  });
}

function addNewCar(json){
  html = '<tr data-row="' + json.pk + '">';
  html += '<td><img src="' + json.img_url + '" class="car_img"/></td><td>' + json.name + '</td>';
  html += '<td class="all_properties">';
  var prop = json.properties.split("@");
  for(var i = 0 ; i < prop.length; i++){
    html += '<span>' + prop[i] + '</span>';
  }
  html += '</td>';
  html += '<td>' + json.price + '&euro;</td>';
  html += '<td><button type="button" class="btn btn-danger" onclick="removeCar(' + json.pk + ',\"' + json.img_url + '\")">odstrániť</button></td>';
  html += '</tr>';
  $("#table_cars tbody").append(html);
}
