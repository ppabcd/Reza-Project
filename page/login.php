<?php
defined("PAGE") or die("Access Denied");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link rel="stylesheet" href="./asset/css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <center>
      <div class="box">
        <div class="inputan">
          <h1 style="margin-bottom:20px; margin-top: 50px;">Login Admin</h1>
          <form action="#" method="post">
              Username :
              <input class="input" type="text" name="name" value=""placeholder="Username...">
              <span style="margin-right:5px;"> Password :</span>
              <input class="input" style="" type="password" name="pass" value="" placeholder="******">
              <button class="submit submit-login" type="submit" name="login">Sign In</button>
          </form>
        </div>
      </div>
    </center>
    </div>
  </body>
</html>
