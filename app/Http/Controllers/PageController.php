<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::Latest()->get();
        return view("cart", compact('products'));
    }
    public function wishlist(){
        $products = Product::Latest()->get();
        return view("wishlist",compact('products'));
    }
    public function shop(){
        $products = Product::Latest()->get();
        return view("shop", compact('products'));
    }
    public function detail(){
        $products = Product::Latest()->get();
        return view("detail",compact('products'));
    }
    public function addtocart(){
        $products = Product::Latest()->get();
        return view("addtocart",compact('products'));
    }
    public function deletecart(){
        $products = Product::Latest()->get();
        return view("deletecart",compact('products'));
    }
    public function addwishlist(){
        $products = Product::Latest()->get();
        return view("addwishlist",compact('products'));
    }
    public function removewishlist(){
        $products = Product::Latest()->get();
        return view("removewishlist",compact('products'));
    }
}
