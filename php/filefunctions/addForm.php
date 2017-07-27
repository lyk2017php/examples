<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Örneği</title>
</head>
<body>
	<form action="add.php" method="POST">
		İsminiz: <input type="text" name="isim" placeholder="İsminizi girin"><br>
		Soyisminiz: <input type="text" name="soyisim" placeholder="Soyisminizi girin"><br>
		Doğum Yılınız:
		<select name="dogumYili">
			<option disabled="disabled" selected="selected">Seçiniz</option>
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
		</select>
		<br>
		<hr>
		Hobileriniz:<br>
		<input type="checkbox" name="hobileri[]" value="ata binmek">
		ATA BİNMEK<br>
		<input type="checkbox" name="hobileri[]" value="attan inmek" 
		id="chkAttanInmek">
		<label for="chkAttanInmek" style="cursor: pointer;">ATTAN İNMEK</label><br>
		<input type="checkbox" name="hobileri[]" value="esege binmek"> EŞEĞE BİNMEK<br>
		<input type="checkbox" name="hobileri[]" value="plazma izlemek">
		PLAZMA İZLEMEK<br>
		<hr>
		Notlar:<br>
		<textarea name="notlar" cols="30" rows="10"></textarea>
		<br>
		<!-- <input type="submit" value="falan"> -->
		<button type="submit"> Ekle </button>


	</form>
</body>
</html>





