<?php

abstract class FactoryBase
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=sql.decinfo-cchic.ca;port=33306;dbname=db_dev_sgodmaire_demo;charset=utf8', 'dev-sgodmaire-demo', 'Info2020');
        return $db;
    }
}
