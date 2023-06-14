<?php
require_once "LinkModelController.php";
$loginController = new LoginController();
$loginController->handleForm();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="center">
  <h1>Login</h1>
  <form  method="post">
    <div class="txt_field">
      <input type="text" placeholder="Username" name="username" required>
      <span></span>
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="password" placeholder="Password" name="password" required>
      <span></span>
      <label>Password</label>
    </div>
    <input type="submit" name="submit" value="Login">
  </form>
</div>
</body>
</html>