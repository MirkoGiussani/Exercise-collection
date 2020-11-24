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

            if(($nomeLogin == $name) && ($psswLogin == $pssw)){
                echo "Credenziali corrette, Benvenuto!!";
                setcookie("user", $_POST["name"], time() + (60 * 60));
            } else {
                echo "Credenziali errate!";
            }

            fclose($handler);
        ?>
    </body>
</html>