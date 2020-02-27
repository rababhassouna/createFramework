<?php

namespace Src\System;


class ViewFactory
{


    /**
     * Render the given view path with the passed variables and generate new View Object for it
     *
     * @param string $viewPath
     * @param array $data
     * @return \System\View\ViewInterface
     */
    public function render(string $viewPath, array $data = []): View
    {
        return new View($viewPath, $data);
    }
}
