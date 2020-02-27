<?php

namespace Src\Controllers;


use Src\System\ViewFactory;

class Controller
{
    public function view()
    {
        return new ViewFactory(__DIR__);
    }
}
