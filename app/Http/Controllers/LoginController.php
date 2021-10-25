<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\User;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Session\Store;
session_start();
class LoginController extends Controller
{
    public function login(){
        return view('customer/login');
    }
    public function register(){
        return view('customer/register');
    }
   
    public function executedRegister(Request $request){
        $name_register = $request->register_name;
        $phone_or_email_register = $request->register_phone_or_email;
        $pass_register = bcrypt($request->register_pass);
        
        $user = new USer();
        $user->name_user = $name_register;
        $user->email_or_phone_user = $phone_or_email_register;
        $user->password = $pass_register;
        $user->save();
        $show_new = Product::orderBy('id', 'desc')->where('status_product', '1')->take('4')->get();
        $show_highlight = Product::orderBy('id', 'desc')->where('status_product', '1')->where('highlight_product', 1)->take('4')->get();
        $show_discount = Product::orderBy('id', 'desc')->where('status_product', '1')->where('discount_price_product', '>', 0)->take(4)->get();
        return view('customer/home', compact('show_highlight', 'show_new', 'show_discount','show_all'));
    }
    public function executeLogin(Request $request){
        $login = [
            'email_or_phone_user' => $request->username,
            'password' => $request->user_password,
            'role' => 0
        ];
        $login1 = [
            'email_or_phone_user' => $request->username,
            'password' => $request->user_password,
            'role' => 1
        ];
      
        
       
        if (Auth::attempt($login)) {
            $show_new = Product::orderBy('id', 'desc')->where('status_product', '1')->take('4')->get();
            $show_highlight = Product::orderBy('id', 'desc')->where('status_product', '1')->where('highlight_product', 1)->take('4')->get();
            $show_discount = Product::orderBy('id', 'desc')->where('status_product', '1')->where('discount_price_product', '>', 0)->take(4)->get();
            return view('customer/home', compact('show_highlight', 'show_new', 'show_discount','show_all'));
        } 
        elseif(Auth::attempt($login1)){
            return view('admin/home');
        }
        else {
           
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
