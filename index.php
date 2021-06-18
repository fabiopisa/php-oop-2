<?php

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPremium.php';

$prodotto1 = new Product('Forno',120.6, 365412);
var_dump($prodotto1);
$user1 = new User('Vittorio','male',17,true,2018);
var_dump($user1);
$user2 = new UserPremium('Gianni', 'male', 17,true,2022);
var_dump($user2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-2</title>
</head>
<body>
  
</body>
</html>