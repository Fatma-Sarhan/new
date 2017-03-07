<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use App\User;
use Auth;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();  
        $email = $user->getEmail();
   		$authUser = User::where('email', $email)->first();
   		if ($authUser) 
        {
            Auth::login($authUser, true);
        	return redirect('/profile');
        }
        else
        {
        	return view('auth.social',compact('user'));

        }
   		// Auth::login($authUser, true);
        // return redirect('/profile');
   		//  $name = $user->getNickname();
   		//  $full_name = $user->getName();
   		//  $user_id = $user->getId();
		// $email = $user->getEmail();
		// $profile_image = $user->getAvatar();
		 
	}
	// public function findOrCreateUser($user)
 //    {
 //    	$email = $user->getEmail();
 //        $authUser = User::where('email', $email)->first();
 //        if ($authUser) 
 //        {
 //            return $authUser;
 //        }

 //        return view('auth.register',compact('user'));

 //    }
}