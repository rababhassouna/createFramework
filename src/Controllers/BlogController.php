<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 2/26/20
 * Time: 2:35 PM
 */

namespace Src\Controllers;


use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function index()
    {
        return new Response($this->view()->render('index', ['user' => 'rabab']));
    }

}
