<?php
    $path = "scriptCredenziali.php";
    include($path);
    echo "ciao " . $_COOKIE["user"] . "! </br>";
    echo "visite: " . $_COOKIE["sessione"] . "</br>";
?>

<html>
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

            $bytesVoti = filesize('votiLogin.txt');
            $contentVoti = fread(fopen("votiLogin.txt", "r"), $bytesVoti);

            $voti = explode(';', $contentVoti);
            $voto1 = $voti[1];
            $voto2 = $voti[2];
            $voto3 = $voti[3];
            $voto4 = $voti[4];

            if(($nomeLogin == $name) && ($psswLogin == $pssw)){
                echo "Credenziali corrette, Benvenuto!!";
                setcookie("user", $_POST["name"], time() + (60 * 60));

                echo "</br> prova voto1: " . $voto1 . "</br>";

                foreach ($voti as $value){
                    echo $value . " ";
                }
                

            } else {
                echo "Credenziali errate!";
            }

            fclose($handler);
        ?>
    </body>
</html>