<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    return view('frontend.index');
    }
   public function index2()
   {
    return view('frontend.index-2');
   }
   public function employee()
   {
    return view('frontend.employee');
   }
   public function login()
   {
    return view('frontend.page-login');
   }
   public function register()
   {
    return view('frontend.page-register');
   }
   public function profile()
    {
        return view('frontend.app-profile');
    }
   public function emailinbox()
   {
    return view('frontend.email-inbox');
   }
   public function reports()
   {
    return view('frontend.reports');
   }
   public function manageclient()
   {
    return view('frontend.manage-client');
   }
}
