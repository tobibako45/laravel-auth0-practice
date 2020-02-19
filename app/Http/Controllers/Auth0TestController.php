<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth0TestController extends Controller
{
    public function authCheck()
    {
        echo \Auth::check();
    }

    public function authUser()
    {
        echo \Auth::user();
    }
}
