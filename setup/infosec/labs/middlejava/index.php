<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>java</title>
    </head>
	<body>


	<div class="vulnerable_code_area">
	<p>
		Pedo mellon a minno.
	</p>

	

	<form name="low_js" method="post">
		<input type="hidden" name="token" value="XX0713af74b9fbbd72e254a9b668e9a494XX" id="token">
		<label for="phrase">Yaz bakalım</label> <input type="text" name="phrase" value="md5" id="phrase">
		<input type="submit" id="send" name="send" value="Submit">
	</form><script src="orta.js"></script>	</div>
	</body>


	<?php
error_reporting(0);
$phrase = $_POST['phrase'];
		$token = $_POST['token'];
		if ($token == strrev("XX62da2f5c0c17429d265c858a5d2960b6XX")) {
			echo "<p style='color:red'>Selam sana Ey dost!</p>";
		} 
		
		else {
			echo "<p>Token ya da girdiğin kelime yanlış.</p>";
		}
?>
