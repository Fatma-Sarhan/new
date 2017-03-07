<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'full_name' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['image'])
        {
            $image = $data['image'];
        }
        else
        {
            $image = "";
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'full_name' => $data['full_name'],
            'email_token' => str_random(20),
            'profile_image' => $image,
            

        ]);

    }

/**
*  Over-ridden the register method from the "RegistersUsers" trait
*  Remember to take care while upgrading laravel
*/
    public function register(Request $request)
    {
        // Laravel validation
        $validator = $this->validator($request->all());
        if ($validator->fails()) 
        {
            $this->throwValidationException($request, $validator);
        }
        // Using database transactions is useful here because stuff happening is actually a transaction
        // I don't know what I said in the last line! Weird!
        DB::beginTransaction();
        try
        {
            $user = $this->create($request->all());
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User(['email_token' => $user->email_token]));
            Mail::to($user->email)->send($email);
            DB::commit();
            return redirect('/active');

        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }
    }

    public function resendactive(Request $request)
    {
        $email =  $request-> email ;
         $user = User::where('email',$email)->firstOrFail();
         $user->email_token = str_random(20) ; 
         // return $user->email_token;
          $user->update();

        $email = new EmailVerification(new User(['email_token' => $user->email_token]));

            Mail::to($user->email)->send($email);
            DB::commit();
            return redirect('/active');


    }

    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        User::where('email_token',$token)->firstOrFail()->verified();
        return redirect('applay');
    }
}
