<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Галерея</title>
	<link rel="stylesheet" href="/style.css" type="text/css" />
</head>
<body>
  <div class="add_foto">
    <form action="" method="POST" enctype="multipart/form-data">
      <span> <b>Добавить изображение: </b> </span>
	  <input type="text" name="imgname" maxlength="20" id="textname">
      <input type="file" name="userfile"> 	
      <button type="submit" name="send">Загрузить</button> <br>
      <span><?=$message?></span>
    </form>
  </div>    
 <!--  <?="<pre>",  print_r($_FILES),  "</pre>";?> -->
  
<?php
	$imgname = $_POST['imgname'];
	$size = $_FILES['userfile']['size'];
	
	require_once 'config.php'; 
	require_once 'photo.php'; 
	
	$query ="SELECT * FROM Photos";
	$result = mysqli_query($link, $query) ;
	$table = "<table border='1'><tr><th>№ фото</th><th>Имя фото</th><th>Фото</th><th>Размер файла</th><th>Дата</th></tr>";
	if(mysqli_num_rows($result)>0){		
		$n=1;
		while($data = mysqli_fetch_assoc($result)){
			$table.="<tr><td>$n</td><td>".$data['name']."</td><td><a href=image.php?photo=".$data['adr']."><img src=".PHOTO_SMALL."".$data['adr']."></td><td>".$data['size']." байт</td><td>".$data['dateadd']."</td></tr>";
			$n++;
		}
		$table.="</table>";
		echo $table;
	}
	else{
		die("Данные отсутствуют!");
	}
	
	// закрываем подключение
	mysqli_close($link);
?>

</body>
</html>