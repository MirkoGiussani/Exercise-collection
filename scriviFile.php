<html>
        <php
            header("Cache-Control: no-cache"); 
        ? php>
        
    <body>
        <form action = "scriviFile.php" method = "post">
            <h1>Scrittura su file</h1>
            text: <textarea name="text" rows="4" cols="50" placeholder="Scrivi il testo da stampare su file"></textarea>
			<input type = "submit" name="bottone" value="Scrivi su file">
        </form>
        
        <?php
            $filename = 'file.txt';
            $handler = fopen($filename, 'a+');

            if (false == $handler) {
                printf('Impossibile aprire il file %s', $filename);
                exit;
            }

            if (isset($_POST["bottone"])){
                fwrite($handler, $_POST["text"]);
                echo "file aggiornato";
            } else{
                echo "file non aggiornato";
            }
            
        ?> 
    </body>
    
</html>