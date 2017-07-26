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

require "loto_functions.php";

?>

<?php foreach(kolonlarYarat(10) as $index => $kolon): ?>
	<h3>Kolon <?php echo $index+1; ?></h3>
	<p>
		<?php foreach($kolon as $x => $sayi): ?>
			<?php echo $sayi; ?>
			<?php if($x < 5) echo " - "; ?>
		<?php endforeach; ?>
	</p>
<?php endforeach; ?>






