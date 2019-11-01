<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="style.css">
    <script src="menus.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body>
<header>
  <div class="menu" onclick="openActionMenu()"></div>
  <div class="logo"></div>
  <div class="login-header" onclick="openLoginMenu()"><?php include 'includes/login.header.php'; ?></div>
</header>

<div id="login-menu" class="login-form">
  <div id="close" onclick="closeLoginMenu()"> X </div>
  <h1>LogIn:</h1>
  <div id="login-form">
    <form class="login" action="login.inc.php" method="post" >
      <input type="text" name="Username" value="" required placeholder="userName">
      <input type="password" name="Password" value="" required placeholder="PassWord">
      <button type="submit" name="button-submit-login">Log Me In</button>
    </form>
  </div>
</div>

<div id="action-menu">
  <?php include 'includes/menu.main.php' ?>
</div>
