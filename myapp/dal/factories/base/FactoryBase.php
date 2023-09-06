
<?php


abstract class FactoryBase
{
    protected function dbConnect()
    {
        if(file_exists("./config/config.txt"))
        {
            echo "test";
            $myfile = fopen("./config/config.txt", "r") or die("Unable to open file!");
        
            $line1 = substr_replace(fgets($myfile),"",-1);
            $line2 = substr_replace(fgets($myfile),"",-1);
            echo $line1;
    
            $db = new \PDO('mysql:host=sql.decinfo-cchic.ca;port='.$line2.';dbname='.$line1.';charset=utf8', 'dev-1832686', 'Info2020');
            return $db;
        }
        else
        {
            return "pas correct";
        }
    }
}
