<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = [
            'name' => 'required',
            'email' => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:users,email'],
            'mobile' => ['required', 'max:10', 'unique:users,mobile'],
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'same:confirm_password',
            ],
            'confirm_password' => 'required',
        ];
        $customWaring = [
            'password.regex' => 'Invalid Format ! must contain one lowercase, uppercase, digit,special character'
        ];
        $request->validate($validateData, $customWaring);
        $user = new User;
        $user->name =  $request->get('name');
        $user->email =  $request->get('email');
        $user->mobile =  $request->get('mobile');
        $user->password =  $request->get('password');
        $user->save();
        Auth::login($user);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function usersList(User $user)
    {
        //
        return view('usersList');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
