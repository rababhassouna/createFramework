<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 2/27/20
 * Time: 10:57 AM
 */

namespace System;


trait BuildQueryTrait
{
    protected $database;

    /**
     * BuildQueryTrait constructor.
     */
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param string $table
     * @param array $column
     * @return array
     */
    public function select(string $table, array $column = ['*']): array
    {
        return $this->database->connection()
            ->query(sprintf('select  %s from %s', implode(',', $column), $table))
            ->fetchAll();
    }
}
