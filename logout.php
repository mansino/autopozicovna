<?php
  session_start();
  if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    if(isset( $_SESSION['user_id'] )){
      session_destroy();
      $resp = '{"ok": true}';
    }else $resp = '{"ok": false, "msg": "false - no session"}';
  }else $resp = '{"ok": false, "msg":"false - nopost"}';

  echo $resp;
?>
