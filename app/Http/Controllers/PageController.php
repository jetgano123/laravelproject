<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainpage(){
        return view("mainpage");
    }
    public function login(){
        return view("login");
    }
    public function cart(){
        return view("cart");
    }
    public function wishlist(){
        return view("wishlist");
    }
    public function shop(){
        return view("shop");
    }
}
