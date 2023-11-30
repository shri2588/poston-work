<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;

class AffiliateController extends Controller
{
    public function dashboard(){
        return view('home');
    }

    public function affiliate_login(){
        return view('home');
    }

    public function affiliate_login_auth(request $request)
    {
        if(Auth::guard('affiliates')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')],$request->filled('remember'))) {
            $user = Auth::guard('affiliates')->user();
            return redirect()->route('affiliate_system');
        }else{
            dd('not login');
        }
    }

    public function affiliate_logout(request $request){
        // dd('affiliate_logout');
        Auth::guard('affiliates')->logout();
        return redirect()->route('affiliate_system');
    }


}
