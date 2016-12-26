<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->input('username') == 'admin' && $request->input('password') == 'admin'){
            Auth::loginUsingId('1000');
            // dd(Auth::check());
            return redirect('/admin');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function index(){
        return view('pages.admin.index');
    }
}
