<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBUser;

class UserController extends Controller
{
    public function index(){
        $share = array();
    	$share['users'] = DBUser::get();
        return view('pages.admin.user', $share);
    }
}
