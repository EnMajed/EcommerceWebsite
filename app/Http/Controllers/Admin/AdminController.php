<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.index');
    }


    public function forgot_password()
    {
        return view('admin.forgot-password');
    }
}
