<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\RegistrationWelcome;
use Illuminate\Validation\ValidationException;
use App\Notifications\NewUserRegistration;
use Notification;

class AuthController extends Controller
{

    protected function register()
    {
        return view('auth.register');
    }
    protected function termsAndCondition()
    {
        return view('auth.termsAndCondition');
    }
    protected function store()
    {
        // VALIDATE DATA IN REGISTRATION FORM
        $this->validate(request(), [
            'id_num' => 'required|string|max:30|unique:users',
            'name' => 'required|string|max:30|unique:users',
            'email' => 'required|string|email|max:40|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
            // SAVE TO THE DATABASE
        $user = User::create(request([
            'name', 'email', 'password','id_num' ]));
            // LOGIN THE USER
        // auth()->login($user);

        \Mail::to($user)->send(new RegistrationWelcome ($user));
        Notification::route('mail', 'osmsservice1@gmail.com')->notify(new NewUserRegistration($user));
            //REDIRECT TO A PAGE
        return back()->with('message','Account successfully submitted to admin, please wait for approval!');
    }
    

    protected function logout()
    {
        auth()->logout();
        return redirect('/');
    }
    protected function login(Request $request)
    {
            $id_num = $request->id_num;
            $pass =$request->password;

            $this->validate(request(), [
                'id_num' => 'required|string|exists:users',
                'password' => 'required|string',
               
            ]);

        if(Auth::attempt(['id_num' => $id_num,'password' => $pass]))
        {
            $authUser = User::where('id_num', $request->id_num)->first();           
            if ($authUser->is_confirmed == 1)
            {  
                if($authUser->is_admin())
                {
                    return redirect('/admin/index');
                }
                return redirect('/user/index');
            }
            else
            {
                auth()->logout();
                return redirect()->back()->with(['error' => 'Account not yet activated, Please wait till account confirmed by admin, you will be notified via email']);     
            }
        }
        return redirect()->back()->with(['error' => 'Please, check your credentials']); 
        // return redirect()->back()->withErrors(['credentials' => 'Please, check your credentials']);
    }

}


