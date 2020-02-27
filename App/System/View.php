<?php

namespace Src\System;


class View implements ViewInterface
{
    /**
     * File Object
     *
     * @var \System\File
     */
    private $file;

    /**
     * View Path
     *
     * @var string
     */
    private $viewPath;

    /**
     * Passed Data "variables" to the view path
     *
     * @var array
     */
    private $data = [];

    /**
     * The output from the view file
     *
     * @var string
     */
    private $output;

    /**
     * Constructor
     *
     * @param \System\File $app
     * @param string $viewPath
     * @param array $data
     */
    public function __construct($viewPath, array $data = [])
    {

        $this->preparePath($viewPath);

        $this->data = $data;
    }

    /**
     * Prepare View Path
     *
     * @param string $viewPath
     * @return void
     */
    private function preparePath($viewPath)
    {
        $path = 'App/Views/' . $viewPath . '.view.php';

        $this->viewPath = $path;

        if (!$this->viewFileExists($path)) {
            die('<b>' . $viewPath . ' View</b>' . ' does not exists in Views Folder');
        }
    }

    /**
     * Determine if the view file exists
     *
     * @param string $viewPath
     * @return bool
     */
    private function viewFileExists($viewPath)
    {
        return file_exists($viewPath);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return $this->getOutput();
    }

    /**
     * {@inheritDoc}
     */
    public function getOutput()
    {
        if (is_null($this->output)) {
            ob_start();

            extract($this->data);

            require $this->viewPath;

            $this->output = ob_get_clean();
        }

        return $this->output;
    }
}
