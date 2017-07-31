<?php

/**
*	lyk2017_blog isimli bir veritabanımız var
*	burada bulunan makaleleri listelemek istiyoruz
*	herhangi birinin detayına tıkladığımızda ilgili makaleyi okuyabilmek istiyoruz
*	aynı zamanda makalelerin yanında kategori bilgilerini de görüp bu kategoriye tıkladığımızda yalnızca bu kategoriye ait makalelerin listelenmesini istiyoruz
*
*/

//	her şeyden önce veritabanı bağlantımızı kurmak hepimizin hayrına olacaktır

// //	öncelikle bağlantımızı kuruyoruz
// $connection = @mysql_connect("localhost", "root", "root");
// //	bu bağlantı üzerinden kullanacağımız veritabanımızı seçiyoruz
// mysql_select_db("lyk2017_blog", $connection);
// //	bu bağlantı üzerinden haberleşirken kullanacağımız karakter setini atıyoruz
// mysql_set_charset("utf8", $connection);

require_once "db.php";

//	tüm yazıları çekmek için bir sorgu oluşturuyoruz
$query = mysql_query("SELECT * FROM articles");

//	şu anda $query resource tipinde bir değişken, bu kaynağın içinden her bir satırı tek tek almamız lazım

//	yani içinden veri alabildiğimiz sürece çalışacak, içindeki veriler bittiğinde (ilgili sorgu ile çekilmiş tüm satırlar işleme alındıktan sonra) duracak bir döngüye ihtiyacımız var

// $row = mysql_fetch_assoc($query);
// while( $row ) {
// 	echo $row['title'] . "<br>";
// 	$row = mysql_fetch_assoc($query);
// }


while( $row = mysql_fetch_assoc($query) ):
	?>
<a href="detail.php?id=<?=$row['id']?>"><?=$row['title']?></a>
<hr>
<?php
endwhile;
?>
<hr>
<a href="new-article.php">+ Yeni Yazı Ekle</a>
<?php

// var_dump($query);

// $al = mysql_fetch_assoc($query);

// var_dump($al);

// $al2 = mysql_fetch_assoc($query);

// var_dump($al2);

//	mysql_ ön ekli fonksiyonların kullanımı son buldu. Ancak piyasada çalışmakta olan birçok uygulama hâlâ bu şekilde bağlantı kurduğundan ve bu fonksiyonları kullanarak veritabanı işlemlerini anlamak daha kolay olduğundan eğitimde öncelikle bunları görüyoruz

//	bu yüzden mysqli_ ön ekli örnekleri görelim

// $connection = mysqli_connect("localhost", "root", "root", "lyk2017_blog");
// mysqli_set_charset($connection, "utf8");

// $query = mysqli_query($connection, "SELECT * FROM articles");







