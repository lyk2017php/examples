<?php

/*
 * Bu sayfada kullanıcının yeni renk tercihini alıp, ihtiyaç duyduğumuz
 * her zaman kullanabilmek için kaydetmeliyiz.
 * Bunu sağlayabilmek adına cookienin bahşedilmiş nimetlerinden 
 * yararlanacağız inş. cnm ya.
 */

if(isset($_GET['color'])) setcookie("color", $_GET['color']);
header("Location: index.php");