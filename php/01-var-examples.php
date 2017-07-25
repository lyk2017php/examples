<?php
// Değişken tanımlamaları ve örneleri
// boolean, integer, float, string, array

// -- Birden fazla kişinin bilgisinin tutulacağı bir dizi tanımlayın

// - kisiler dizisi
// 	- kisi (n tane)
// 		- adi
// 		- soyadi
// 		- dogumYili
// 		- hobileri
// 		- notlar

// -- Sonrasında seçilen bir kişinin bilgilerinin gösterilmesi, tüm kişilerin bilgilerinin döngüyle gösterilmesi gibi işlemler yapacağız

$tasiniyorMuyuz = true;
$businiftaKacGunKaldik = 5;
$kacAtiyoruz = 3.5;
$enTatliSabahlar = "nutella ile başlar.";
$buBinadakiKurslar = array("PHP", "Web Güvenliği", "Front-End", "Ruby", "Sızma", "Kriptolografi", "Ağ Güvenliği");



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

// $kisiler = [];
$kisiDetay = null;
if(isset($_GET['id'])){
	if(isset($kisiler[$_GET['id']])){
		$kisiDetay = $kisiler[$_GET['id']];
	}
}
?>

<ul>
<?php foreach($kisiler as $id => $kisi): ?>
<li><a href="?id=<?= $id ?>"><?php echo $kisi["isim"]." ".$kisi["soyisim"]; ?></a></li>
<?php endforeach; ?>
</ul>


<?php if($kisiDetay): ?>
<h1><?php echo $kisiDetay['isim']?> <?=$kisiDetay['soyisim']?></h1>
<p>Yaşı: <?=date('Y')-$kisiDetay['dogumYili']?></p>
<p>Hobileri</p>
<ul>
	<?php foreach($kisiDetay['hobileri'] as $hobi): ?>
		<li><?=$hobi?></li>
	<?php endforeach; ?>
</ul>
<p><?=$kisiDetay['notlar']?></p>
<?php endif; ?>













