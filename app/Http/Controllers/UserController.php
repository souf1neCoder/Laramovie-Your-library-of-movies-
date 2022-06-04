<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        return view('users.register');
    }
     //
     public function logged(){
        return view('users.login');
    }
    // 
    public function store(Request $request){
        $formFields = $request->validate([
            'fullname'=>['required','max:200','string'],
            'username'=>['required','min:4','max:50','string','unique:users,username'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['min:6','confirmed','required']
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user  = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','You are Logged In');
    }
    // 
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
    // 
    public function logMe(Request $request){
        $formFields = $request->validate([        
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You are Logged In');
        }
        return back()->withErrors(['email'=>'Invalid Email'])->onlyInput('email');
    }
    // 
   
}
