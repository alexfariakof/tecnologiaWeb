<?php

namespace Connections\Db;

class Db
{

    private static $db;

    public function __construct(){
        $this->db = Db::getDb();
    }

    public static function getDb()
    {
        if (!self::$db) {
            try {
                $dsn = 'localhost; dbname=contato_db';
                self::$db = new PDO($dsn, 'root', '');
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                die('Connection error: ' . $e->getMessage());
            }
        }
        return self::$db;
    }

    public function getAllRecords($sql, $parameters = null){
        $stm = $this->db->prepare($sql);
        $stm->execute($parameters);
        return $stm->fetchAll();
    }

    public function getConnection()
    {

        try {
            $pdoConfig = "mysql:host=localhost;dbname=contato_db";
            $connection = new \PDO($pdoConfig, 'root', 'Config::DB_PASSWORD');
            return $connection;
        } catch (Exception $e) {
            echo 'Erro ' . $e->getMessage();
        }
    }
}
