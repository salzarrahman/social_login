<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{


    public function CallGithub(){

    // $CallGithubLoginService = Socialite::driver('github')->stateless()->redirect();
       $CallGithubLoginService = Socialite::driver('github')->redirect();
       return  $CallGithubLoginService;
    }


    public function GithubCallGithub(){

        $user  = Socialite::driver('github')->stateless()->user();

        $token =$user->token;
        $getId          = $user->getId();
        $getNickname    = $user->getNickname();
        $getName        = $user->getName();
        $getEmail       = $user->getEmail();
        $getAvatar      = $user->getAvatar();

        Session::put('token', $token);
        Session::put('id', $getId);
        Session::put('nik_name', $getNickname);
        Session::put('name', $getName);
        Session::put('email', $getEmail);
        Session::put('avatar', $getAvatar);


        $count = DB::table('users')->where('email','=', $getEmail)->count();

        if($count == 0){
            DB::table('users')->insert([
                'name'          => $getName,
                'nick_name'     => $getNickname,
                'email'         => $getEmail,
                'provider_id'   => $getId,
            ]);

            return redirect('/home');

        }else{

            return redirect('/home');
        }

    }






}
