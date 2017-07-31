<?php

/**
*	Derslerim Uygulaması
*	Kullanıcı adı ve parolası ile giriş yapan kullanıcıya
*	almakta olduğu derslerin bir listesi gösterilecektir
*/

/**
*	Kökte kullanıcı bilgilerini saklayacağız
*	Kullanıcı için ihtiyaç duyacağımız bilgiler:
*	-	Kullanıcı adı	"string"
*	-	Parola			"string"
*	-	Öğrencinin tam adı	"string"
*	-	Öğrencinin numarası	"string"
*	-	Öğrencinin almakta olduğu dersler "array"
*		-	Dersin Adı "string"
*/

/**
*	Bu dosyada giriş yapmış olan kullanıcının derslerini listeleyeceğiz
*	Eğer giriş yapmış bir kullanıcı yoksa onu giriş yapma formuna yönlendireceğiz
*/

require_once "init.php";

//	SESSION'da user değeri yoksa girişe yönlendirelim
if( ! isset($_SESSION['user']) )
{
	header("Location: login-form.php");
	die();
}

$username = $_SESSION['user'];
$student = $users[$username];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Derslerim</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><?=$student['number']?> - <?=$student['fullname']?> öğrencisinin dersleri</h1>
	<ul>
		<?php foreach($student['lessons'] as $lesson): ?>
		<li><?=$lesson?></li>
		<?php endforeach; ?>
	</ul>
	<a href="logout.php">Çıkış</a>
</body>
</html>











