<?php
/**
 * Uygulama: 5 Kolon sayısal loto oynatma.
 */

$kolonlar = [];
for($kolon=1;$kolon<=5;$kolon++){
	$arr = [];
	for($say=0;$say<6;$say++){
		do {
			$secilenSayi = rand(1,49);
		} while(in_array($secilenSayi, $arr));
		$arr[] = $secilenSayi;
	}
	sort($arr);
	$kolonlar[] = $arr;
}
?>

<?php foreach($kolonlar as $index => $kolon): ?>
<h3>Kolon <?php echo $index+1; ?></h3>
<ul>
	<?php foreach($kolon as $secim): ?>
		<li><?php echo $secim; ?></li>
	<?php endforeach; ?>
</ul>
<?php endforeach; ?>