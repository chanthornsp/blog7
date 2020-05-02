<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{

    public function index(){
        $data = '<h2>Welcome to Home Page</h2>';
        return view('home.home',compact('data'));
    }

    public function about(){
     return view('home.about');
    }
    public function contact(){
       return view('home.contact');
    }




}
