<html>
    <body>
        <form action = "leggiFile.php" method = "post">
            <h1>Lettura da file</h1>
            <input type = "text" name = "nomeFile" placeholder="nome file">
			<input type = "submit" name="bottone" value="cerca file">
        </form>

        <?php 
            $filename = $_POST["nomeFile"];
            $handler = fopen($filename, 'r');

            if ($handler == false) {
                echo "Impossibile aprire il file \"". $_POST["bottone"] . "\"";
                exit;
            }

            $size = 1024;

            while (!feof($handler)) {   //controllo che non si sia arrivati alla fine del file
                $content = fread($handler, $size);
                echo $content;
            }

            fclose($handler);
        ?>
    </body>
</html>