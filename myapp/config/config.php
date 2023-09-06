<?php
$myfile = fopen("config.txt", "r") or die("Unable to open file!");
$line1 = substr_replace(fgets($myfile),"",-1);
$line2 = substr_replace(fgets($myfile),"",-1);
$line3 = substr_replace(fgets($myfile),"",-1);
$line4 = substr_replace(fgets($myfile),"",-1);
$line5 = substr_replace(fgets($myfile),"",-1);
$line6 = substr_replace(fgets($myfile),"",-1);
if($_POST["id"]==$line3 & $_POST["mdp"]==$line4)
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
            <input type="hidden" name="1" value="<?php echo $line1;?>">
            <input type="hidden" name="2" value="<?php echo $line2;?>">
            <input type="hidden" name="3" value="<?php echo $line3;?>">
            <input type="hidden" name="4" value="<?php echo $line4;?>">
            <h1>Langue par defaut:</h1><input type="text" name="5" value="<?php echo $line5;?>">
            <h1>Unité monétaire:</h1><input type="text" name="6" value="<?php echo $line6;?>">
            </br></br>
            <input type="submit" text="modifier les configurations">
        </form>
    </body>
</html>
<?php
}
else
{
   
    header("location:connection.php");
}