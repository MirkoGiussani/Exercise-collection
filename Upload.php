<?php
    if($_FILES["file"]["error"] > 0){
        echo "Error while uploading file " . $_FILES["file"]["error"] . "<br />";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "type: " . $_FILES["file"]["type"] . "<br />";
        echo "size: " . intval ($_FILES["file"]["size"] / 1024) . "Kb" . "<br />";
        echo "Temporary stored: " . $_FILES["file"]["tmp_name"] . "<br />";

        if(file_exists("upload/". $_FILES["file"]["name"])){    //verifico se è presente il file nella cartella upload
            echo "File already exist: " . $_FILES["file"]["name"] . "<br />";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);   //sposto il file nella cartella upload
            echo "File stored in: upload/" . $_FILES["file"]["name"] . "<br/>"; 
        }
        
        if($_FILES["file"]["type"] == "text/plain"){
            $file = fopen("upload/". $_FILES["file"]["name"], "r");

            echo "<br/>";
            while (!feof($file)){   //legge riga per riga il file finchè non è finito
                echo fgets($file) . "<br/>";
            }
            
            fclose($file);
        }
    }
?>