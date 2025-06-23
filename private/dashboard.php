<?php
session_start();
$email = $_SESSION['user'];
$select = $pdo ->prepare("SELECT * FROM users WHERE email = :email");
$select->execute([':email' =>$email]);
$user =$select->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>welcome Mr <?php htmlspecialchars($user['username']) ?>!</h1>
    <a href="bookshow.php">Appointemnt</a>
</body>
</html>