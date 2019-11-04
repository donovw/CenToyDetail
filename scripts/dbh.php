<?php
$servername = "";
$dbusername = "root";
$dbpassword = "";
$db = "centoydetail";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $db);
  if (!$conn) {
      die("connection failed".mysqli_connect_error());
  }
