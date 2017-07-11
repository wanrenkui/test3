<?php

class pdoObject
{
    public function DB()
    {
        $setting = parse_ini_file("dataConfig.ini");

        try
        {
            $db = new PDO("$setting[database_driver]:host=$setting[database_host].$setting[database_port];dbname=$setting[database_name]", "$setting[database_user]", "$setting[database_password]");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec('set names utf8');

        }catch (PDOException $e)
        {
            echo $e -> getMessage();
            echo $e -> getFile();
            echo $e -> getLine();
            echo $e -> getCode();
        }

        return $db;
    }

}

