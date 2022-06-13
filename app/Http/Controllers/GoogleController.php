<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function LoginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $is_user = User::where('email',$user->getEmail())->first();

            if (!$is_user){
                $saveUser = User::updateOrCreate([
                    'google_id'=>$user->getId()
                ],
                    [
                        'username'=>$user->getEmail(),
                        'name'=>$user->getName(),
                        'email'=>$user->getEmail(),
                        'password'=>Hash::make($user->getName().'@'.$user->getId())
                    ]
                );
            }
            else{
                $saveUser = User::where('email',$user->getEmail())->update([
                    'google_id'=>$user->getId()
                ]);
            }
            

            Auth::LoginUsingId($saveUser->id);
            return redirect()->intended('/mainpage');
        }catch (\Throwable $throwable){
            throw $throwable;
        }
    }

}
