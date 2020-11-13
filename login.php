<html>
    <head>

    </head>
    <body>
        <form action = "login.php" method = "post">
            Name: <input type = "text" name = "name" />
            <br />
            Surname: <input type = "text" name = "surname" />
            <br />
            <input type = "submit"> <!--pulsante di invio-->
        </form>

        <?php
            $filename = "login.txt";
            $handler = fopen($filename, "r");

            $nomeLogin = $_POST["name"];
            $psswLogin = $_POST["surname"];

            $bytes = filesize('login.txt');
            $content = fread($handler, $bytes);

            $elementi = explode(' ', $content);
            $name = $elementi[0];
            $pssw = $elementi[1];

            if(($nomeLogin == $name) && ($psswLogin == $pssw)){
                echo "Credenziali corrette, Benvenuto!!";
            } else {
                echo "Credenziali errate!";
            }

            fclose($handler);
        ?>
    </body>
</html>