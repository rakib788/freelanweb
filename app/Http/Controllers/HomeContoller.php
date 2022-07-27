<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeContoller extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        if($role=='1'){
            return view('buyerdashboard');
        }else{
            return view('sellerdashboard');
        }
    }
    public function profile(){
        return view('pages.profile');
    }
}
