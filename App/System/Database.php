<?php

namespace System;


class Database
{
    /**
     * @var static $connection
     */
    private static $connection;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        if (!$this->isConnected()) {
            $this->connect();
        }
    }

    /**
     * check if DB instance of PDO
     * @return bool
     */
    private function isConnected(): bool
    {

        return static::$connection instanceof \PDO;
    }

    /**
     * create instance of DB connection
     */
    private function connect(): void
    {
        try {

            $db = new \PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $db->exec('SET NAMES utf8');
            static::$connection = $db;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * @return \PDO
     */
    public function connection(): \PDO
    {

        return static::$connection;
    }

}
