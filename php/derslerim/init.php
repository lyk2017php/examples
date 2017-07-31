<?php
/**
*	Bütün dosyalarımızın başında dahil ederek
*	her dosyada çalışmasını, bulunmasını istediğimiz
*	kodları burada yazabiliriz
*/
session_start();
require_once "data.php";

/**
*	include -> dosyayı her seferinde dahil eder, bulamazsa uyarı verip kodu yorumlamaya devam eder
*	include_once -> dosyayı bir sefer dahil eder, daha önce bu kod akışına çekildiyse tekrar çekmez, o yüzden genellikle değişken, fonksiyon tanımlamalarında kullanılır
*	require -> dosyayı her seferinde GEREKSİNİR, yani dosyayı bulamazsa ölümcül hata verip çalışmayı durdurur
*	require_once -> dosyayı bir sefer GEREKSİNİR, daha önce bu kod akışında gereksinildi ve çekildiyse tekrar çekmez, dosyayı bulamazsa ölümcül hata verir ve çalışmayı durdurur
*/