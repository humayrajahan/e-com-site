<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $role=Auth::user()->role;
        if ($role=='1')
        {
            return view('admin.home.home');
        }
        else
        {
            return view('front.home.home');
        }
    }
}
