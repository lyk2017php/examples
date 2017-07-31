<?php
require "data.php";
// $bodyClass = $availableColors[0];
$bodyClass = "black";

if(isset($_COOKIE['color'])){
	$bodyClass = $_COOKIE['color'];
}

// header("Refresh: 2; url=change-color.php?color=".$availableColors[rand(0,(count($availableColors)-1))]);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gökkuşağı</title>
	<link rel="stylesheet" href="style.css">
	<style>
		<?php foreach($availableColors as $name => $hex): ?>
		body.<?=$name?>{color: <?=$hex?>;}
		div.colors>a.<?=$name?>{background-color: <?=$hex?>; border-radius: 50%;}
		<?php endforeach; ?>
	</style>
</head>
<body class="<?=$bodyClass?>">
	<div class="container">
		<div class="colors">
			<?php foreach($availableColors as $name => $hex): ?>
			<a href="change-color.php?color=<?=$name?>" class="<?=$name?>">&nbsp;</a>
			<?php endforeach; ?>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quisquam consequuntur quod ea reiciendis totam, reprehenderit amet consequatur nobis nostrum, repellat error quo laboriosam voluptatem soluta provident, debitis! Nesciunt, itaque.</p>
	</div>
</body>
</html>