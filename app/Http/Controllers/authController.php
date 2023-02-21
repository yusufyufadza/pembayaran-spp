<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\officer;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function index()
    {
        $title = "halaman login";
        return view('contents.auth.login', compact('title'));
    }

    public function login(Request $request)
    {
        $username = officer::where('username', $request->username)->first();

        if (!$username) {
            return redirect()->back()->with(['pesan' => 'Username tidak terdaftar']);
        }

        $password = Hash::check($request->password, $username->password);

        if (!$password) {
            return redirect()->back()->with(['pesan' => 'Password tidak sesuai']);
        }

        if (Auth::guard('officer')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

     // Register
     public function register(){
        return view('auth.register',
        [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create([
           'name' => $validatedData['name'],
           'email' => $validatedData['email'],
           'address' => $validatedData['address'],
           'password' => $validatedData['password'],
       ]);
       return redirect('/login')->with('success', 'Registration Succesfully, Pls Login!');

    }

    //Logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
