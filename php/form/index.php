<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Örneği</title>
</head>
<body>
	<form action="islem.php" method="POST">
		İsminiz: <input type="text" name="isim" placeholder="İsminizi girin"><br>
		Doğum Yılınız:
		<select name="dogum-yili">
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
		Cinsiyet: <input type="radio" name="cinsiyet" value="0">Kadın <input type="radio" name="cinsiyet" value="1">Erkek
		<br>
		<input type="checkbox" name="mezun-mu"> Üniversite mezunu musunuz?
		<br>
		Hobileriniz: <br>
		<select name="hobiler[]" multiple="multiple">
			<option>kitap okumak</option>
			<option>denize girmek</option>
			<option>denizde yüzmek</option>
			<option>denizde yürümek</option>
			<option>nefes almak</option>
			<option>nefes vermek</option>
		</select>
		<hr>
		Öbür türlü (kıps) hobileriniz:<br>
		<input type="checkbox" name="othobiler[]" value="atabinmek">
		ATA BİNMEK<br>
		<input type="checkbox" name="othobiler[]" value="attaninmek" 
		id="chkAttanInmek">
		<label for="chkAttanInmek" style="cursor: pointer;">ATTAN İNMEK</label><br>
		<input type="checkbox" name="othobiler[]" value="esegebinmek"> EŞEĞE BİNMEK<br>
		<input type="checkbox" name="othobiler[]" value="plazmaizlemek">
		PLAZMA İZLEMEK<br>
		<hr>
		Notlar:<br>
		<textarea name="notlar" cols="30" rows="10"></textarea>
		<br>
		<!-- <input type="submit" value="falan"> -->
		<button type="submit"> "falan" </button>


	</form>
</body>
</html>





