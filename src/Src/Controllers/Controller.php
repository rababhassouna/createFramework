<?php

namespace Src\Controllers;


use Src\System\ViewFactory;
use System\Database;

class Controller
{
    public function view()
    {
        return new ViewFactory(__DIR__);
    }

    public function database()
    {
        return new Database();
    }
}
