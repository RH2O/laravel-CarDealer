<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerView(){

        return view('users.register');
    }


    public function loginView(){

        return view('users.login');
    }


    public function register(Request $request){

        $request->validate([
            'name'=> 'required|string|',
            'email'=> 'required|string|unique:users',
            'password'=> 'required|min:5',
        ]);


        //password hashing //important to be able to login
        $request['password'] = bcrypt($request['password']);

        $user = User::create($request->all());


        auth()->login($user);

        return redirect('/')->with('message','successful');
        
    }


    public function login(Request $request){

       $user =  $request->validate([

            'email'=> 'required',
            'password'=> 'required',
        ]);



        if(auth()->attempt($user)){

           $request->session()->regenerate();

            return redirect('/');
           
        }

        return redirect('/login')->withErrors(['email'=>'invalid credintials']);
        
    }

    public function logout(){

        auth()->logout();

        return redirect('/');
    }

}
