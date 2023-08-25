<?php
    $myfile = fopen("../config/config.txt", "w") or die("Unable to open file!");
    $txt = $_POST["Serveur"];
    fwrite($myfile, $txt);
    $txt = $_POST["Port"];
    fwrite($myfile, $txt);
    $txt = $_POST["Utilisateur"];
    fwrite($myfile, $txt);
    $txt = $_POST["password"];
    fwrite($myfile, $txt);
    $txt = $_POST["Langue"];
    fwrite($myfile, $txt);
    $txt = $_POST["monetaire"];
    fwrite($myfile, $txt);
    fclose($myfile);
?>