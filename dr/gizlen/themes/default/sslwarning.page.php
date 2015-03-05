<html>
<head>
	<title>Security Warning</title>
	<style type="text/css">
html, body {
	background: #0b1933;
	text-align: center;
}
body {
	font: 80% Tahoma;
}
#wrapper {
	margin: 100px auto;
	width: 500px;
	text-align: left;
	background: #fff;
	padding: 10px;
   border: 5px solid #ccc;
}
form { 
   text-align: center;
}
	</style>
   <base href="<?php echo GLYPE_URL; ?>/">
</head>
<body>
	<div id="wrapper">
		<h1>Uyar�!</h1>
		<p>G�zatmaya �al��t���n�z sitenin g�venli bir ba�lant�s� var.</p>
      <p>Hedef site proxy ba�lant�s�n�n sa�lad��� gizlemeyi engelleyerek g�venli bilgilerinizi gizleyemeyebilir.</p>
      <form action="includes/process.php" method="get">
         <input type="hidden" name="action" value="sslagree">
			<input type="submit" value="Continue anyway...">
         <input type="button" value="Return to index" onclick="window.location='../../../../';">
		</form>
      <p><b>Not:</b> Bu uyar�y� tekrar g�r�nmeyecektir.</p>
	</div>
</body>
</html>