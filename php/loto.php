<?php

/*
 * 5 kolon sayısal loto oynatma
 *
 * 1. Bir kolon yaratma kodunu belli bir sayıda tekrar etmek için for döngüsü içinde yazma
 * 2. Bir kolon yaratmak için; 1-49 arasındaki sayılardan eşsiz 6 tanesini seçmek
 * 3. Bu sayıları küçükten büyüğe sıralamak
 *
 * 4. Bu kolonları tutan diziyi foreach döngüsüne alacağız.
 * 5. Kolonların içerisindeki sayıları ekrana yazdıracağız.
 */

$kolonlar = []; // Her bir kolonu tutan dizi
$oynanacakKolonSayisi = 20;

for($i=0; $i<$oynanacakKolonSayisi; $i++){
	$kolon = [];
	do {
		// $yeniSayi = rand(1,49);
		// if(!in_array($yeniSayi, $kolon))
		// 	$kolon[] = $yeniSayi;
		$kolon[] = rand(1,49);
		$kolon = array_unique($kolon);
	} while(count($kolon) < 6);
	sort($kolon);
	$kolonlar[] = $kolon;
}
?>

<?php foreach($kolonlar as $index => $kolon): ?>
	<h3>Kolon <?php echo $index+1; ?></h3>
	<p>
		<?php foreach($kolon as $x => $sayi): ?>
			<?php echo $sayi; ?>
			<?php if($x < 5) echo " - "; ?>
		<?php endforeach; ?>
	</p>
<?php endforeach; ?>







<?php
$dizi = range(1, 49); // $dizi = [1,2,3,4,5,6...49]
shuffle($dizi); // $dizi = [23,14,66,45,1,3...]
$sonuc = array_slice($dizi, 0, 6); // $sonuc = [23,14,66,45,1,3]


















