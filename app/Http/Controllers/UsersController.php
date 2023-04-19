<?php

namespace App\Http\Controllers;

use App\Http\Responses\Success;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function get(Request $request): Response
    {
        return (new Success([
            ['id' => 1, 'name' => 'user name'],
            ['id' => 2, 'name' => 'user name 2'],
            ['id' => 3, 'name' => 'user name 3'],
        ]))
            ->toResponse($request);
    }
}
