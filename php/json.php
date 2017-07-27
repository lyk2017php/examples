<?php

// $meyveler = ["elma", "armut", "muz", "nar", "kavun", "domates", "limon"];

// $meyvelerJson = json_encode($meyveler);

// var_dump($meyvelerJson);

// $yeniMeyveler = json_decode($meyvelerJson);

// var_dump($yeniMeyveler);

$kisiler = array(
	array(
		"isim" => "Uğur",
		"soyisim" => "ARICI",
		"dogumYili" => 1993,
		"hobileri" => ['konuşmak', 'yemek yemek'],
		"notlar" => "Mükemmel insan"
		),
	array(
		"isim" => "İlker",
		"soyisim" => "DEMİR",
		"dogumYili" => 1998,
		"hobileri" => ['voleybol', 'tarih'],
		"notlar" => "Çok sıkılıyor, hemen PHP yapalım istedi, geçtik. JS'ciler mağdur."
		),
	array(
		"isim" => "Soner",
		"soyisim" => "PAYCI",
		"dogumYili" => 1995,
		"hobileri" => ['bateri', 'yemek yemek'],
		"notlar" => "Harika insan"
		),
	array(
		"isim" => "Gamze",
		"soyisim" => "GÜLYOL",
		"dogumYili" => 1997,
		"hobileri" => ['voleybol', 'müzik', 'bandana'],
		"notlar" => "Derste kakülleriyle oynamayı sever, ARO"
		),
	array(
		"isim" => "Merve",
		"soyisim" => "TUNÇEL",
		"dogumYili" => 1994,
		"hobileri" => ['tenis', 'müzik', 'İngiliz tarihi'],
		"notlar" => "Formu doldurmadı, doldurmuştum daaaaa, sizin internet çekmiyordu herhalde hocam dedi, inandık. Sürekli soru sormasından memnunuz, devam eder İNŞ. Kim bilir kaç kişi aynı soruyu sorma niyetinde ama sormuyor. Niçin sormuyor? Bu tip sorularla yine bir akşam dersten çıkmış misafirhaneye doğru yürümekteyken birden beni bir köpek ısırdı. Dikiş attılar, bak izi var."
		),
	);

$kisilerJson = json_encode($kisiler);
// header("Content-type: application/json");
// echo $kisilerJson;
echo "<pre>";
var_dump($kisilerJson);

$yeniKisilerObj = json_decode($kisilerJson);

var_dump($yeniKisilerObj);

$yeniKisilerArray = json_decode($kisilerJson, true);

var_dump($yeniKisilerArray);















