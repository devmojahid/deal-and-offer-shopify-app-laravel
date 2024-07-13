<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateController extends Controller
{
    public function login(Request $request)
    {
        $shop = $request->get('shop');
        return redirect()->route('authenticate.shopify', ['shop' => $shop]);
    }

    public function callback(Request $request)
    {
        $user = Auth::user(); // Assuming user is authenticated
        $token = JWTAuth::fromUser($user);
        return response()->json(['token' => $token]);
    }

    public function token(Request $request)
    {
        $user = Auth::user();
        $token = JWTAuth::fromUser($user);
        return response()->json(['token' => $token]);
    }
}
