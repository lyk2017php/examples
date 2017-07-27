<?php


$kisiler = array(
	// "Uğur",
	"ugurarici" => array(
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
	"bursanium" => array(
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

// var_dump($kisiler);

$kisilerJson = json_encode($kisiler);

// echo $kisilerJson;

$dosyaKaynagi = fopen("data.json", "w+");
$yazdiMi = fwrite($dosyaKaynagi, $kisilerJson);

var_dump($yazdiMi);








