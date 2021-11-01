<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;

class CartController extends Controller
{
    public function addCartAjax(){
        $output = '';
        echo $output;
    }

    public function showCartAjax(){
        return view('cart/show_cart_ajax');
    }
}
