<?php
require "data.php";

if(isset($_GET['color'])){
	if(isset($availableColors[$_GET['color']])){
		setcookie('color', $_GET['color']);
	}
}

header("Location: index.php");