<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Page\Entities\Page;

class HomeController extends Controller
{
    /**
     * Landing Page.
     * 
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Home Page.
     * 
     */
    public function home()
    {
        return view('home');
    }

     /**
     * Contact Page.
     * 
     */
    public function contact()
    {
        return view('contact');
    }
    
    public function changePassword()
    {
        return view('change-password');
    }
    
}
