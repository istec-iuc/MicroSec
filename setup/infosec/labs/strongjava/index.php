<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>java3</title>
    </head>
	<body>


	
	<p>
		Sadece ölüler görür.
	</p>

	

	<form name="low_js" method="post">
		<input type="hidden" name="token" value="ecc76c19c9f3c5108773d6c3a18a6c25c9bf1131c4e250b71213274e3b2b5d08" id="token">
		<label for="phrase">Cevap</label> <input type="text" name="phrase" value="DeğiştirBeni" id="phrase">
		<input type="submit" id="send" name="send" value="Submit">
	</form><script src="yuksek.js"></script>	

	<?php
error_reporting(0);
$phrase = $_POST['phrase'];
		$token = $_POST['token'];
		if ($token == hash("sha256", hash("sha256", "XX" . strrev("pala")) . "ZZ")) {
			echo '<img src="pala2.png" width=250px height=250px>';
		} else {
			echo '<img src="pala.jpeg" width=250px height=250px>';
		}
?>

