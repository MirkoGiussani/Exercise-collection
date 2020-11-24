<?php 

    session_start();  //avvio sessione
   if(isset($_SESSION["visite"])){  //controllo di esistenza             
       $_SESSION["visite"]++;
   } else{
       $_SESSION["visite"] = 1;

       //unset($_SESSION["visite"]); //elimina visite dall'array
       //session_destroy();
   }
   echo "visite: " . $_SESSION["visite"] . "</br>";
?>   

<?php
    print_r($_COOKIE);
    echo "<br/>";

    if (isset($_COOKIE["user"])) {
        header("Location: checkData.php");
        //echo "Ciao " . $_COOKIE["user"] . "!";
        //setcookie("nome", "", time()-3600);
    } else {
        echo "benvenuto per la prima volta";
    }
    setcookie("sessione", $_SESSION["visita"], time() + (60*60));
    // echo $_COOKIE["nome"];
?>

<html>
    <head>

    </head>
    <body>
        <h1>Pagina di verifica credenziali.</h1>

        <form action = "checkData.php" method = "post">
                Name: <input type = "text" name = "name" />
                <br />
                Password: <input type = "text" name = "surname" />
                <br />
                <input type = "submit"> <!--pulsante di invio-->
        </form>   
</html>