<?php
// var_dump($_POST);

// $yeniKisi = $_POST;

$yeniKisi = array(
	"isim" => $_POST['isim'],
	"soyisim" => $_POST['soyisim'],
	"dogumYili" => (int)$_POST["dogumYili"],
	"hobileri" => $_POST["hobileri"],
	"notlar" => $_POST['notlar']
	);

$okunacakDosyaAdi = "data.json";
$dosyaKaynagi = fopen($okunacakDosyaAdi, "r");
$dosyaIcerigi = fread($dosyaKaynagi, filesize($okunacakDosyaAdi));
fclose($dosyaKaynagi);

$kisiler = json_decode($dosyaIcerigi, true);


$kisiler[] = $yeniKisi;

$yeniKisilerJson = json_encode($kisiler);

$dosyaKaynagi = fopen("data.json", "w+");
$yazdiMi = fwrite($dosyaKaynagi, $yeniKisilerJson);
fclose($dosyaKaynagi);

header("Location: index.php");


?>