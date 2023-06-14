<?php
require_once "../LinkModelController.php";

$userController = new DataController();

if (!empty($_SESSION['id_users'])) {
    $id_users = $_SESSION['id_users'];
    $usernames = $userController->showUsername($id_users);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <div class="background">
        <div class="word">
        <?php if (isset($usernames) && !empty($usernames)): ?>
            <?php foreach ($usernames as $username): ?>
                <h1><?php echo $username; ?></h1>
            <?php endforeach; ?>
        <?php else: ?>
            <h1>No usernames found.</h1>
        <?php endif; ?>
        <a href="../Controller/LogoutController.php"><button class="tombol">Keluar</button></a>
        </div>
    </div>
  
</body>
</html>
