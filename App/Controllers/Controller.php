<?php

namespace Controllers;


use Src\System\ViewFactory;
use System\Database;


class Controller
{
    /**
     * @return ViewInterface
     */
    public function view(): ViewFactory
    {
        return new ViewFactory();
    }

    /**
     * @return Database
     */
    public function database(): Database
    {
        return new Database();
    }
}


