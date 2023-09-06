<?php




    if(filesize($myfile)>0)
    {
        header("location:../index.php");
    }
    else
    {
        $myfile = fopen("../config/config.txt", "w") or die("Unable to open file!");

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
        $port = $_POST["Port"];
        $dbname = $_POST["Serveur"];

        $db = new \PDO('mysql:host=sql.decinfo-cchic.ca;port='.$port.';dbname='.$dbname.';charset=utf8', 'dev-1832686', 'Info2020');
        
        $db->exec(file_get_contents('../sql/exercice_categories.sql'));
        
        $db->exec(file_get_contents('../sql/exercice_products.sql'));
        

        header("location:../index.php");
    }
?>