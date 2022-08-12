<?php 
require_once "models/User.php";

$user = new User();
// $user->email = "tokyo@test.com";
$user->setEmail("tokyo@test.com");
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
   <h2>ユーザ</h2> 
   <h3>Email</h3>
   <p>
    <?= $user->getEmail() ?>
   </p>
</body>
</html>