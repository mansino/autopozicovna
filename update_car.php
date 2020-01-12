<?php
  $message = "";

  if ( !empty( $_POST )  && !empty( $_POST['type'] ) ) {
    include "connect.php";
    $conn = openCon();

    switch($_POST['type']){
      case 'addcar':
        $resp = addCar($conn);
        break;
      case 'removecar':
        $resp = removeCar($conn);
        break;
      case 'updatecar':
        $resp = updateCar($conn);
        break;
      default:
        $resp = '{"ok": false, "message": "Nie je zadaný typ requestu"}';
    }
    echo $resp;
    closeCon($conn);
  }else echo '{"ok": false, "message": "Nie je zadaný typ requestu"}';

  function addCar($conn){
    if ( 0 < $_FILES['file']['error'] ) {
      $message =  $_FILES['file']['error'];
      $resp = '{"ok": false, "message": "' . $message . '"}';
    }else {
      $name = $_FILES["file"]["name"];
      $tmp = (explode(".", $name));
      $ext = end($tmp);
      $img_url = 'img/cars/car_' . time() . '.' . $ext;
      move_uploaded_file($_FILES['file']['tmp_name'], $img_url);
      $sql = mysqli_query($conn, 'INSERT INTO cars ( name , properties , price, img_url) VALUES ("' . $_POST["name"] . '", "' . $_POST["properties"] . '", ' . $_POST["price"] . ', "' . $img_url . '")');
      if( $sql ){
        $resp = '{"ok": true, "message": "Pridanie ok", "pk": ' . mysqli_insert_id( $conn ) . ', "img_url": "' . $img_url . '"}';
      }else {
        $resp = '{"ok": false, "message": "' . mysqli_error($conn) . '"}';
        unlink($img_url);
      }
    }

    return $resp;
  }

  function updateCar($conn){
    $sql = mysqli_query($conn, 'UPDATE cars SET name="' . $_POST["name"] . '" , properties="' . $_POST["properties"] . '" , price="' . $_POST["price"] . '" WHERE pk=' . $_POST["pk"]);
    if( $sql ){
      $resp = '{"ok": true, "message": "Update ok"}';
    }else {
      $resp = '{"ok": false, "message": "' . mysqli_error($conn) . '"}';
    }

    return $resp;
  }

  function removeCar($conn){
    $filepath = $_POST['file_path'];
    if (is_file($filepath))
    {
      unlink($filepath);
      $sql = mysqli_query($conn, 'DELETE FROM cars WHERE pk=' . $_POST["pk"]);
      if( $sql ){
        $resp = '{"ok": true, "message": "Remove ok"}';
      }else {
        $resp = '{"ok": false, "message": "' . mysqli_error($conn) . '"}';
      }
    }else $resp = '{"ok": false, "message": "Nepodarilo sa odstrániť obrázok."}';

    return $resp;
  }
?>
