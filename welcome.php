<hmtl>
    <body>
        <?php
            include("functions.php");
            debug_to_console($_POST);
            if ($_POST["sesso"] == "maschio"){
                 echo "Benvenuto signor " . $_POST["name"] . " " . $_POST["surname"] . ".<br/>";
                 echo "Nato il " . $_POST["datanascita"] . ".<br />";
            } else if ($_POST["sesso"] == "femmina"){
                 echo "Benvenuta signora ". $_POST["name"] . " " . $_POST["surname"] . ".<br />";
                 echo "Nata il " . $_POST["datanascita"] . ".<br />";
            }

            echo "Ecco la sua breve descrizione: " . " \"" . $_POST["descrizione"] . "\"";
			echo "</br>";
			
            $myFile = "ciao.txt";
			
			if(!file_exists($myFile)){
				echo "File non trovato.<br/>";
			}else if(!$file = fopen($myFile, 'r')){
				echo "Non riesco ad aprire il file. <br/>";
			} else {
				echo "Fatto! <br/>";
				while(!feof($file)){
					echo fgets($file)."<br />";
				}
			}
        ?>
    </body>
</html>

