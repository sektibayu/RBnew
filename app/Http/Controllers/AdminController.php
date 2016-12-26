<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
     //    // dd($request->all());
    	// if(Auth::attempt(['NRP_NIP' => $request->input('username'), 'password' => $request->input('password')])){
     //        // dd("masuk");
    	// 	return redirect('admin');
    	// }
     //    // dd("tidak masuk");
    	// return view('pages.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function index(){
        return view('pages.admin');
    }
}
