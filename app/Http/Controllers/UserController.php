<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetPassUser;
use App\Notifications\UserRegistrationApproved;
use App\Notifications\UserRegistrationCancelled;
use App\Notifications\UserRegistrationDeactivated;
use Notification;
use App\User;
use DB;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function request()
    {
        $users = User::where('admin', 0)->where('is_confirmed', 0)->latest()->get();
        return view('adminPages.Users.request',compact('users'))->with('no', 1);
    }
    protected function all()
    {
        $users = User::where('is_confirmed', 1)->get();
        return view('adminPages.Users.all',compact('users'))->with('no', 1);
    }
    protected function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.passwords.resetinside', compact('user'));
    }
    protected function update2active($id)
    {
        $find = User::findOrFail($id);
        // $user = $find->user->email;
        $find->update([
            'is_confirmed'=>1
        ]);
        Notification::route('mail', $find->email)->notify(new UserRegistrationApproved($find));
        return back()->with('message', $find->name.' successfully approved!');
    }
    protected function update2deactive($id)
    {
        $user = User::findOrFail($id);
       $delete = $user->delete();
        // $find = User::find($id);
        // // $user = $find->user->email;
        // $find->update([
        //     'is_confirmed' => 0
        // ]);
        Notification::route('mail', $user->email)->notify(new UserRegistrationCancelled($user));
        return back()->with('message',' account has been diapproved and deleted');
    }
    protected function deactivate($id)
    {
      
        $find = User::findOrFail($id);
        // $user = $find->user->email;
        $find->update([
            'is_confirmed' => 0
        ]);
        Notification::route('mail', $find->email)->notify(new UserRegistrationDeactivated($find));
        return back()->with('message', $find->name.' account has been deactivated');
    }
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return back()->with('message','Account deleted successfully!');
    }
}
