<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js\menus.js" charset="utf-8"></script>
    <script src="js\vehinfo.js" charset="utf-8"></script>
    <script src="js\formatmoney.js" charset="utf-8"></script>
    <script src="js\login.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body>
<header>
  <div class="menu" onclick="openActionMenu()"></div>
  <div class="logo"> <a href="index.php"></a> </div>
  <div class="login-header" onclick="openLoginMenu()"><?php include 'includes/login.header.php'; ?></div>
</header>

<div id="login-menu" class="login-form">
  <div id="close" onclick="closeLoginMenu()"> X </div>
  <h1>LogIn:</h1>
  <div id="login-form">
    <form class="login" id="loginform" method="get">
      <input type="text" name="username" value="" required placeholder="Username">
      <input type="password" name="pass" value="" required placeholder="Password">
      <button type="submit" name="button-submit-login" onclick="logMeIn()">Log Me In</button>
    </form>
  </div>
</div>

<div id="action-menu">
  <?php include 'includes/menu.main.php' ?>
</div>
