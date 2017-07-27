<?php

$okunacakDosyaAdi = "data.json";
$dosyaKaynagi = fopen($okunacakDosyaAdi, "r");
$dosyaIcerigi = fread($dosyaKaynagi, filesize($okunacakDosyaAdi));
fclose($dosyaKaynagi);

$kisiler = json_decode($dosyaIcerigi, true);


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
<a href="addForm.php">Yeni Kişi Ekle</a>


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















