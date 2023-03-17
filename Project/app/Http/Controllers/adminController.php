<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class adminController extends Controller
{
    //
    public function create(){
        return view('register');
    }
    public function store(Request $request){
       $formFields = $request->validate([
        'name' => ['required' , 'min:3'],
        'email'=>['required','email',Rule::unique('users','email')],
        'password'=>['required','confirmed','min:6']
       ]);
       $formFields['password']=bcrypt($formFields['password']);
       $user = User::create($formFields);
       auth()->login($user);
       return redirect('/register');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); 
    }
    public function log(){
        return view('login');
    }
    public function authentification(Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
           ]);
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            redirect('/');
        }
        return back()->withErrors(['email'=>'invalid Credentials'])->onlyInput('email');
    }
}
