<?php
  include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Изображение</title>
</head>
<body>
  <a href="index.php"> Назад </a>
  <div>
    <img src="<?=PHOTO.$_GET['photo'] ?>">
  </div>
</body>
</html>
