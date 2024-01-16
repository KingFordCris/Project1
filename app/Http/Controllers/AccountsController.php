<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function showChangePasswordForm()
     {
        return view('auth.changepassword');
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function edit(Request $request)
    {
        $user = Auth::user();
        $scholar12 = Profile::where('user_id', Auth::user()->id)->get();
        $scholar = Profile::where('user_id', Auth::user()->id)->first();

        return view('userPages.me', compact('user','scholar','scholar12'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function update(Request $request, $id)
    {
       

            if(Auth::user()->email == request('email')) 
            {
                $this->validate($request,[
                    'name' => 'required|min:3',
                    'id_num' => 'required',
                    // 'email' => 'required|email|unique:users'
                    ]);

                $user = User::find($id);
                $user->id_num=$request->id_num;
                $user->name=$request->name;
                // $user->email=$request->email;
                $user->save();
                session()->flash('message', 'You have succesfully updated your profile');
                return back();
            }
            else{
                $this->validate($request,[
                    'name' => 'required|min:3',
                    'id_num' => 'required',
                    'email' => 'required|email|unique:users'
                    ]);

                $user = User::find($id);
                $user->id_num=$request->id_num;
                $user->name=$request->name;
                $user->email=$request->email;
                $user->save();
                session()->flash('message', 'You have succesfully updated your profile');
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
