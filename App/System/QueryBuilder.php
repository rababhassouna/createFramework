<?php

namespace System;


class QueryBuilder extends Database
{
    public function select()
    {
        return $this->connection()->query('select * from users')->fetchAll();
    }
}
