<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    public function show_login_form()
    {
        return view('front.member.member-login');
    }
    public function show_signup_form()
    {
        return view('front.member.member-register');
    }
}
