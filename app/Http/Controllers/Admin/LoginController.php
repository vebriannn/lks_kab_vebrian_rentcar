<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin'; 

        if(Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
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
        $data['role'] = 'admin';
        $data['passwore'] = Hash::make($request->input('password'));

        $checkEmail = User::where('email',  $request->input('email'))->doesntExist();
        

        if($checkEmail){
            User::create($data);
            return redirect()->route('admin.dashboard')->with(['success' => 'Succes Create New Akun Admin']);
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

        return redirect()->route('admin.login');
    }

}
