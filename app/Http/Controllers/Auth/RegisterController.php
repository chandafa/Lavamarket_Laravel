<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Redirect users after registration
    protected $redirectTo = '/login'; // Atur sesuai kebutuhan

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Menampilkan formulir registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Proses registrasi pengguna baru
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Login otomatis setelah registrasi
        auth()->login($user);

        return redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Set role default saat registrasi
        ]);
    }

    protected function redirectPath()
    {
        return $this->redirectTo;
    }
}