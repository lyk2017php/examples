<?php

$kacLazim = 5;
do{
	$zarAt = rand(1,6);
	if($zarAt === $kacLazim)
		print( "Ahan da bulduk, al sana " . $kacLazim . "\r\n" );
	else
		print($zarAt . "\r\n" );
}while($zarAt!=$kacLazim);

