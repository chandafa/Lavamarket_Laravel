<!-- resources/views/user/dashboard.blade.php -->
@extends('layouts.app') <!-- Jika menggunakan layout -->

@section('content')

    <body class="bg-gray-100">
        <div class="container mx-auto my-5">
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/4 bg-white rounded-lg shadow-md p-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="User Avatar" class="rounded-full mx-auto mb-4">
                        <h2 class="text-xl font-bold">Chan</h2>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-green-500 font-semibold mb-2">PLUS</h3>
                        <p class="text-gray-700 text-sm mb-4">Nikmatin Bebas Ongkir tanpa batas! Min. belanja Rp0, bebas
                            biaya aplikasi</p>
                        <ul>
                            <li class="flex items-center justify-between mb-2">
                                <span>GoPay</span>
                                <a href="#" class="text-green-500">Aktifkan</a>
                            </li>
                            <li class="flex items-center justify-between mb-2">
                                <span>Tokopedia Card</span>
                                <a href="#" class="text-green-500">Daftar Sekarang</a>
                            </li>
                            <li class="flex items-center justify-between mb-2">
                                <span>Saldo</span>
                                <span>Rp0</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Tombol Logout -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button class="bg-gray-200 px-4 py-2 rounded" type="submit">Logout</button>
                    </form>
                </div>

                <!-- Main Content -->
                <div class="w-3/4 ml-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="border-b border-gray-200 pb-4 mb-4">
                            <ul class="flex space-x-4">
                                <li><a href="#" class="text-green-500 border-b-2 border-green-500 pb-2">Biodata
                                        Diri</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Daftar Alamat</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Pembayaran</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Rekening Bank</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Notifikasi</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Mode Tampilan</a></li>
                                <li><a href="#" class="text-gray-500 hover:text-green-500">Keamanan</a></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold mb-4">Ubah Biodata Diri</h3>
                            <div class="flex">
                                <div class="w-1/3">
                                    <img src="https://via.placeholder.com/150" alt="User Avatar" class="rounded-full mb-4">
                                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Pilih Foto</button>
                                    <p class="text-sm text-gray-500 mt-2">Besar file: maksimum 10.000.000 bytes (10
                                        Megabytes). Ekstensi file yang diperbolehkan: JPG, JPEG, PNG.</p>
                                </div>
                                <div class="w-2/3 ml-6">
                                    <div class="mb-4">
                                        <h4 class="font-semibold text-gray-700">Nama</h4>
                                        <p class="text-green-500">Chan <a href="#" class="text-blue-500">Ubah</a></p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="font-semibold text-gray-700">Tanggal Lahir</h4>
                                        <p><a href="#" class="text-blue-500">Tambah Tanggal Lahir</a></p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="font-semibold text-gray-700">Jenis Kelamin</h4>
                                        <p><a href="#" class="text-blue-500">Tambah Jenis Kelamin</a></p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="font-semibold text-gray-700">Email</h4>
                                        <p class="flex items-center">
                                            chankirana722@gmail.com
                                            <span
                                                class="bg-green-100 text-green-700 px-2 py-1 ml-2 rounded">Terverifikasi</span>
                                            <a href="#" class="text-blue-500 ml-2">Ubah</a>
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="font-semibold text-gray-700">Nomor HP</h4>
                                        <p class="flex items-center">
                                            6287742219567
                                            <span
                                                class="bg-green-100 text-green-700 px-2 py-1 ml-2 rounded">Terverifikasi</span>
                                            <a href="#" class="text-blue-500 ml-2">Ubah</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
