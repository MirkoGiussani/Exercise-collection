<hmtl>
    <body>
        <form action = "welcome.php" method = "post">  <!--creato per inviare dati-->
            Name: <input type = "text" name = "name" />
            <br />
            Surname: <input type = "text" name = "surname" />
            <br />
            <p>Sesso:</p>
            Maschio <input type="radio" name="sesso" value="maschio">
            <br />
            Femmina <input type="radio" name="sesso" value="femmina">
            <br />
            Altro <input type="radio" name="sesso" value="other">
            <br />
            Descrizione <textarea name="descrizione" rows="4" cols="50" placeholder="Ciao">
            </textarea>
            <br />
            Data di nascita <input type = "text" name = "datanascita" />
            <br /><br />
            <input type = "submit"> <!--pulsante di invio-->
        </form>
    </body>
</html>
