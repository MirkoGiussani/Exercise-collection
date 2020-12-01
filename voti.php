<!-- POPOLAZIONE ARRAY -->
<?php
    // dichiaro nome file
    $path = "voti.txt";
    //istanzio fuori dal contesto del while var generica credenziali che diventerà array associativo
    $voti;
    //creo  hendle del file e verifico che esista
    if ($file = fopen($path, "r")) {
        while (!feof($file)) {
            $line = fgets($file);
            $user = substr($line, 0, strpos($line, ":"));
            $voti = substr($line, strpos($line, ":"), strlen($line));
            // $password = substr($line, strpos($line, ";") + 1, strpos($line, "|") - 1);
            // $password = $password . " .";
            // $password = substr($password, 0, strpos($password, "|"));

            // $_CREDENZIALI[$nomeUtente] = $password;
        }
        fclose($file);
        return $voti;
    } else {
        echo ("Impossibile aprire il file!");
    }
?>