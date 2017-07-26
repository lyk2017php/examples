<?php

function kolonOlustur()
{
	$kolon = [];
	do {
		// $yeniSayi = rand(1,49);
		// if(!in_array($yeniSayi, $kolon))
		// 	$kolon[] = $yeniSayi;
		$kolon[] = rand(1,49);
		$kolon = array_unique($kolon);
	} while(count($kolon) < 6);
	sort($kolon);
	return $kolon;
}

function kolonlarYarat($yaratilacakKolonSayisi = 5)
{
	$kolonlar = [];
	for($i=0; $i<$yaratilacakKolonSayisi; $i++){
		$kolonlar[] = kolonOlustur();
	}
	return $kolonlar;
}