<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        // Tambahkan middleware untuk memastikan hanya user yang bisa mengakses controller ini
        $this->middleware('role:user');
    }

    public function index()
    {
        return view('user.dashboard'); // Menampilkan view dashboard user
    }
}