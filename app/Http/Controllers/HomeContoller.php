<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeContoller extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role=='1'){
            $buyers = Buyer::all();
            return view('buyerdashboard',compact('buyers'));
        }else{
            $sellers = Seller::all();
            return view('sellerdashboard',compact('sellers'));
        }
    }
    public function profile(){
        return view('pages.profile');
    }
    public function home(){
        $sellers = Seller::all();
        return view('home',compact('sellers'));
    }

    public function buyer_gig($id){
        $sellers = Seller::find($id);
        // $user_seller = User::find($id);
        return view('pages.buyer-request-gig', compact('sellers'));
    }

    public function buyer_gig_checkout($id)
    {
        $sellers = Seller::find($id);
        return view('pages.gig-checkout', compact('sellers'));
    }
}
