<?php

/**
*	Bu sayfaya POST ile gönderilen kullanıcı adı ve parolasını
*	dizimizde kayıtlı kullanıcılarla karşılaştırıp, uygun eşleşmeyi
*	bulduğumuz kullanıcı bilgileriyle giriş yaptıracağız
*/

require_once "init.php";

$formdanGelenKullaniciAdi = $_POST['username'];
$formdanGelenParola = $_POST['password'];

if( isset( $users[ $formdanGelenKullaniciAdi ] ) ) {
	//	kullanıcı dizimizde bu kullanıcı adına sahip bir eleman bulunuyormuş
	if( $users[ $formdanGelenKullaniciAdi ]['password'] === $formdanGelenParola )
	{
		//	kullanıcı adı ve parola eşleştirmesi doğru, kullanıcı girişini yapalım
		$_SESSION['user'] = $formdanGelenKullaniciAdi;
	} else {
		//	bu kullanıcının parolası bu değil
		setcookie("error", "Parola hatalı", time()+5);
	}
} else {
	//	bu kullanıcı adına sahip bir kayıt yok
	setcookie("error", "Böyle bir kullanıcı bulunmuyor", time()+5);
}

header("Location: index.php");





