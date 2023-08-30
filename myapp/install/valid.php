<?php
$myfile = fopen("../config/config.txt", "r") or die("Unable to open file!");
fgets($myfile);
fgets($myfile);
if($_POST["config"]=="conf")
{
    if($_POST["id"] == fgets($myfile) & $_POST["mdp"] == fgets($myfile))
    {
        header("location:install.php?test=2");
    }
    else
    {

    }
}

    
    $txt = $_POST["Serveur"];
    fwrite($myfile, $txt."\n");

    $txt = $_POST["Port"];
    fwrite($myfile, $txt."\n");

    $txt = $_POST["Utilisateur"];
    fwrite($myfile, $txt."\n");

    $txt = $_POST["password"];
    fwrite($myfile, $txt."\n");

    $txt = $_POST["Langue"];
    fwrite($myfile, $txt."\n");
   
    $txt = $_POST["monetaire"];
    fwrite($myfile, $txt."\n");
  
    fclose($myfile);
    header("location:../index.php");
?>