<?php
/**
 * Sayfa içeriğindeki metin renginin değiştirilebilir olmasını istiyoruz.
 * Bu renk değişimi işlemini (PHP Sınıfında olduğumuz için) PHP üzerinden
 * yapacağız.
 * Yoksa EŞŞEK değiliz arayüzdeki renk değişikliğini Javascript ile yapmayı biliriz.
 * Kullanıcının ekranda gösterilen renk seçeneklerinden dilediğini seçmesini ve sayfa içeriğinin bu renge dönmesini sağlamalıyız.
 * Kullanıcının yaptığı seçim sayfa yenilendiğinde ve/veya site içerisindeki başka bir sayfaya geçildiğinde de hatırlanmalı ve içerik bu renkte gösterilmelidir. 
 * 
 * RENKLER
 * black
 * red
 * green
 * blue
 */

// if(isset($_GET['color'])){
// 	$color = $_GET['color'];
// } else {
// 	$color = "black";
// }

$available = [
	"black" => "black",
	"red" => "red",
	"green" => "green",
	"blue" => "blue",
	"yellow" => "yellow",
	"darkblue" => "#186196"
];
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "black";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gökkuşağı</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="color: <?php if(array_key_exists($color, $available)) echo $color; ?>;">
<ul class="colors">
	<?php foreach($available as $key => $c): ?>
		<li style="background: <?php echo $c; ?>;"><a href="change.php?color=<?php echo $key; ?>"></a></li>
	<?php endforeach; ?>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iure, accusamus commodi? Hic neque consequuntur debitis voluptate ducimus, repellat voluptatem aut dicta modi eius, amet molestiae obcaecati perspiciatis sit aspernatur!</p>
</body>
</html>