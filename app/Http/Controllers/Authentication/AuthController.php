<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class AuthController extends Controller
{
    /** Feature Authentication From Social
     *  @param $req
     *  @return $token
     */
    public function loginURL($type) {
        return Socialite::driver('google')->stateless()->redirect();
    }
    public function Login(Request $req) {

    }
    public function callBackLogin(){
        $user = Socialite::driver('google')->stateless()->user();
        dd($user->token);
    }
}
