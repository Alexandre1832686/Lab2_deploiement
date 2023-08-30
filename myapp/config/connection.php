<?php
if(filesize("../config/config.txt")>0)
{


    $myfile = fopen("config.txt", "r") or die("Unable to open file!");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
</head>
<body style="">
    <form method="post" action="../install/valid.php">
        <h1>Configurations</h1>
        <h4>identifiant:</h4><input type="text" name="id">
        <h4>mot de passe:</h4><input type="password" name="mdp">
        
        <input type="hidden" name="config" value="conf">
</br></br>
        <input type="submit" text="connection">
    </form>
</body>
</html>

<?php
}
else
{
    header("location:../install/install.php");
}
?>
