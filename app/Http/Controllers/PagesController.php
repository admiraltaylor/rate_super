<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index()
    {
        return view('pages.index');
    }

    public function Ratings()
    {
        return view ('pages.ratings');
    }

    public function User($id)
    {
        return view ('pages.user')->with('id', $id);
    }

    public function SignUp()
    {
        return view ('pages.signup');
    }

    public function LogIn()
    {
        return view ('pages.login');
    }
}
