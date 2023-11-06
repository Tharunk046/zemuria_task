<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginValidate(Request $request)
    {
        //validation
        $validateData = [
            'email' => ['required', 'regex:/(.+)@(.+)\.(.+)/i',],
            'password' => 'required',
        ];
        $request->validate($validateData);
        $email =  $request->input('email');
        $password =  $request->input('password');
        // details fetching
        $user = User::where('email', $email)->first();
        // login routing
        // 1 for Admin and 0 for users
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->user_type == 1) {  
                Auth::login($user);
                return redirect('admin');
            } elseif (Auth::user()->user_type == 0) {
                Auth::login($user);
                return redirect('/home');
            } else {
                return redirect('/login');
            }
        } else {
            return back()->withErrors(['Invalid login credentials']);
        }
    }

    // logout 
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
}
