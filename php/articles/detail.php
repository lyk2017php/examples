<?php

/**
*	bu sayfada adres çubuğundan ilgili satırın id değerini alacağız
*	bu id değerini kullanarak veritabanına sorguda bulunacağız
*	gelen detay bilgisini ekranda göstereceğiz
*/

$articleId = (int)$_GET['id'];

require_once "db.php";


$article = mysql_fetch_assoc( mysql_query("SELECT * FROM articles WHERE id = " . $articleId) );

$incrementReadCount = mysql_query("UPDATE articles SET read_count=read_count+1 WHERE id = " . $articleId);

$category = mysql_fetch_assoc(mysql_query("SELECT * FROM categories WHERE id = ". $article['category_id']));

?>
<h1><?=$article['title']?></h1>
<p><?=$category['title']?> kategorisinde, <?=$article['read_count']?> kere okundu</p>
<p><?=$article['content']?></p>
<hr>
<a href="index.php">Ana sayfaya dön</a>







