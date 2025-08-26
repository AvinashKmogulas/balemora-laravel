<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        $data['title'] = 'Login | Balemora Resorts';
        return view('backend.login', $data);
    }

    public function loginProssecc(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);    
        if($validate->fails()){
            return redirect()->back()->with('error', $validate->errors()->first());
        }else{
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');
            if(Auth::attempt($credentials, $remember)){
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('dashboard')->with('success', 'Welcome back!');
                }else{
                    Auth::logout();
                    return redirect()->back()->with('error', 'Access denied. Admin role required.')->withInput();
                }
            }else{
                return redirect()->back()->with('error', 'Invalid credentials')->withInput();
            }
        }
    }

    // logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successfully!');
    }
}
