<?php

//	öncelikle bağlantımızı kuruyoruz
$connection = @mysql_connect("localhost", "root", "root");
//	bu bağlantı üzerinden kullanacağımız veritabanımızı seçiyoruz
mysql_select_db("lyk2017_blog", $connection);
//	bu bağlantı üzerinden haberleşirken kullanacağımız karakter setini atıyoruz
mysql_set_charset("utf8", $connection);