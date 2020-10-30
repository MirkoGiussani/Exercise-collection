<hmtl>
	<body style = "text-align: center">
		<form action = "pulsanti.php" method = "post">
			<h1>Esercizio script php integrato</h1>
			<h2>Quale pulsante ho premuto?</h2>
			<input type = "submit" name="bottone" value="Bottone1">
			<input type = "submit" name="bottone" value="Bottone2">
		</form>
		<?php
			if ($_POST["bottone"] == "Bottone1"){
				echo "hai premuto il pulsante 1";
			} if ($_POST["bottone"] == "Bottone2"){
				echo "hai premuto il pulsante 2";
			}
		?>
	</body>

</html>