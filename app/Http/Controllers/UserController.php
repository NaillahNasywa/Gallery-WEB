<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index()
    {
        return view('User.index');
      
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->input('email'));

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('/home')->with('success', 'Berhasil login');
        } else {
            return redirect('User')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }

        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('User')->with('success', 'Berhasil logout');
    }

    public function register()
    {
        return view('User.register');
    }

    public function create(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password 8 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        return redirect('User')->with('success', 'Berhasil mendaftar. Silahkan login.');
    }

    public function editProfileForm()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
        'name' => 'required|string|max:255',
        'bio' => 'nullable|string|max:255',
    ]);

        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->save();

    return redirect()->route('profile.index')->with('success', 'Profil berhasil diperbarui.');
    }   


}
