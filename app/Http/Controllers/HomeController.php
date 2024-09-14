<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    public function index(){
        return view('home.userpage');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('cart');
        }
    }
    public function userpage() {
        return view('home.userpage');
    }
    public function cart() {
        return view('cart');
    }  
    public function shop() {
        return view('shop');
    }
    public function about() {
        return view('about');
    }
    public function servicesupport() {
        return view('servicesupport');
    }
    public function contact() {
        return view('contact');
    }
    public function blogpage() {
        return view('blogpage');
    }


}
