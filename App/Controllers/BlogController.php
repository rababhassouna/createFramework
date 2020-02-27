<?php

namespace Src\Controllers;

use App\Models\User;
use Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @param User $user
     * @return Response
     */
    public function index(User $user): Response
    {

        return new Response($this->view()->render('index', ['users' => $user->getAllUsers()]));
    }

}
