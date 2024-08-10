<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        // Tambahkan middleware untuk memastikan hanya admin yang bisa mengakses controller ini
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.dashboard'); // Menampilkan view dashboard admin
    }
}