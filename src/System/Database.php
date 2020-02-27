<?php

namespace System;


class Database
{
    private static $connection;

    public function __construct()
    {
        if (!$this->isConnected()) {
            $this->connect();
        }
    }

    private function isConnected()
    {

        return static::$connection instanceof \PDO;
    }

    private function connect()
    {
        try {
            $db = new \PDO('mysql:host=localhost;dbname=test', 'root', 'root');
            $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $db->exec('SET NAMES utf8');
            static::$connection = $db;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function connection()
    {

        return static::$connection;
    }

}
