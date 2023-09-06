<?php 
    $myfile = fopen("config.txt", "w") or die("Unable to open file!");
    ftruncate($myfile, 0);

    fwrite($myfile, $_POST["1"]."\n");
    fwrite($myfile, $_POST["2"]."\n");
    fwrite($myfile, $_POST["3"]."\n");
    fwrite($myfile, $_POST["4"]."\n");
    fwrite($myfile, $_POST["5"]."\n");
    fwrite($myfile, $_POST["6"]."\n");

    header("location:../index.php");
?>