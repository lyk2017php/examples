<?php
require_once "db.php";

$categoriesQuery = mysql_query("SELECT * FROM categories");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Yeni Yazı Ekle</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="create.php" method="post">
		Başlık: <input type="text" name="title" placeholder="Başlık"><br>
		İçerik: <br>
		<textarea name="content" cols="30" rows="10" placeholder="İçerik"></textarea>
		<br>
		Kategori: <select name="category_id">
			<?php while( $category = mysql_fetch_object($categoriesQuery) ): ?>
				<option value="<?=$category->id?>"><?=$category->title?></option>
			<?php endwhile; ?>
		</select>
		<br>
		<button type="submit">Ekle</button>
	</form>
</body>
</html>