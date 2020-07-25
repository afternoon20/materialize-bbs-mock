<?php
  
  // タイムゾーン設定
  date_default_timezone_set('Asia/Tokyo');
  

  // エラーメッセージ一覧
  define("FORM_ERROR","入力に不備があります。");
  define("EMPTY_LOGIN_ID","入力に不備があります。");
  define("EMPTY_PASSWORD","入力に不備があります。");
  
  // phpinfo();
  
  // ログイン情報の取得
  session_start();
  // session_end();


  // ユーザー情報仮セット

  // $_SESSION = array();

  // echo $_SESSION(['user']);


?>