<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\User;


class AuthController extends Controller
{
      public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
}
