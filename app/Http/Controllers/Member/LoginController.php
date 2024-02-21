<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class LoginController extends Controller
{

    public function index()
    {
        return view('member.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->route('home');
        };

        return back()-> withErrors([
        'errors' => 'Credentials are wrong'
        ])->withInput();
    }
    

    public function created(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required',
        ]);

        
        $data = $request->except('_token');
        $data['role'] = 'member';
        $data['passwore'] = Hash::make($request->input('password'));
        

        if(User::where('email',  $request->input('email'))->doesntExist()){
            User::create($data);
            return redirect()->route('cars')->with(['success' => 'Succes Create New Akun Admin']);
        }
        else {
            return back()-> withErrors([
                'errors' => 'Email Already!'
                ])->withInput();
        }
        return back()-> withErrors([
            'errors' => 'Credentials are wrong'
            ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('member.login');
    }
    
}
