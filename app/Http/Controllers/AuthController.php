<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class AuthController extends Controller
{
    // use RegisterUsers;

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'password_confirmation' => ['required', 'string', 'min:8'],
    //     ]);
    // }
    // protected function register(array $data){
    //     // Cek jika sudah ada admin
    //     $adminCount = User::where('role', 'admin')->count();

    //     // Tentukan peran pengguna baru
    //     $role = ($adminCount === 0) ? 'admin' : 'user';

    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role' => $role,
    //     ]);

    //     return route('login');
    // }
}
