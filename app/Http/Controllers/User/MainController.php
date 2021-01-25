<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('user-pages.pages.index');
    }

    public function search()
    {
        return view('user-pages.pages.search');
    }
    public function login(){
    	return view('user-pages.auth.login');
    }
}
