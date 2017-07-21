<?php
  session_start();      //啟動session
  //判斷使用者是否已登入

  $_SESSION['login'] = TRUE;
  $_SESSION['userName'] = "Isabel";

  if ($_SESSION["login"]) {
      echo $_SESSION['userName'].'登入';
      //header("Location: b1.php");  
  } else {
      echo '失敗';
      //header("Location: error.php");
  }
?>