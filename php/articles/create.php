<?php
require_once "db.php";

$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);
$category_id = (int)strip_tags($_POST['category_id']);

//	veritabanına ekleyeceğimiz bilgileri posttan değişkenlere atadık, aynı zamanda strip_tags( ... ) fonksiyonu ile içindeki html etiketlerini de temizledik

//	çalışacak sorgumuz şöyle olmalı
//	INSERT INTO articles (title, content, category_id) VALUES ("$title", "$content", $category_id) 

$addQuery = mysql_query("INSERT INTO articles (title, content, category_id) VALUES ('$title', '$content', $category_id)");

// var_dump($addQuery);

header("Location: index.php");