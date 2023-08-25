<?php
$myfile = fopen("../config/config.txt", "r") or die("Unable to open file!");
$configtext = fread($myfile,filesize("../config/config.txt"));
fclose($myfile);
if(strlen($configtext)==0)
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="valid.php">
        <h1>Serveur BD:</h1><input type="text" name="Serveur" >
        <h1>Port:</h1><input type="text" name="Port" >
        <h1>Utilisateur:</h1><input type="text" name="Utilisateur">
        <h1>Mot de passe:</h1><input type="text" name="password">
        <h1>Langue par defaut:</h1><input type="text" name="Langue">
        <h1>Unité monétaire:</h1><input type="text" name="monetaire">
</br></br>
        <input type="submit" text="Install">
    </form>
</body>
</html>

<?php
}
else
{
    echo "l'installation a déjà été fait!";
}
?>
