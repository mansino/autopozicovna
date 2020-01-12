<?php

function openCon(){
  $dbhost = 'localhost';
  $dbuser = 'user';
  $dbpass = 'H@hzkT3hab4Ky';
  $db = 'autopozicovna';

  $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Unable to connect" . $conn -> error);
  $GLOBALS['conn'] = $con;
  return $con;
}

function closeCon($conn){
  $conn->close();
}
?>
