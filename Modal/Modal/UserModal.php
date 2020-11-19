<?php

namespace pdo_user;


class PdoExt_user extends \PDO {
    static protected $_instance;

    static public function getInstance() {

        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function DB()
    {
        $setting = parse_ini_file("../../dataConfig.ini");

        try
        {
            $db = new PDO("$setting[database_driver]:host=$setting[database_host].$setting[database_port];dbname=$setting[database_name]", "$setting[database_user]", "$setting[database_password]");
//            $db = PdoExt::getInstance("$setting[database_driver]:host=$setting[database_host].$setting[database_port];dbname=$setting[database_name]", "$setting[database_user]","$setting[database_password]");
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
