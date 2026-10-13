<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


//Praktikum Laravel Tugas Pertemuan 2
Route::get('/', function () {
return view('welcome');
});
Route::get('/halo', function () {
return 'Halo, selamat datang di Laravel 13!';
});
Route::get('/waktu', fn () => now()->format('d-m-Y H:i:s'));

Route::get('/kategori/{nama?}', function (?string $nama = 'semua') {
return "Menampilkan kategori: {$nama}";
});

Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Kelas {$kode}, NIM {$nim}";
});

Route::get('/artikel/{id}', function (int $id) {
return "Artikel nomor {$id}";
})->whereNumber('id');
Route::get('/pengguna/{username}', function (string $username) {
return "Pengguna: {$username}";
})->whereAlpha('username');
Route::get('/kode/{kode}', function (string $kode) {
return "Kode: {$kode}";
})->where('kode', '[A-Z]{3}[0-9]{2}');


Route::view('/tentang', 'tentang')->name('tentang');
Route::get('/kontak', function () {
return view('kontak', ['email' => 'info@kampus.ac.id']);
})->name('kontak');

Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/dashboard', fn () => 'Dashboard Admin')
->name('dashboard');
Route::get('/pengaturan', fn () => 'Pengaturan Admin')
->name('pengaturan');
});

Route::redirect('/beranda', '/');
Route::fallback(function () {
return response('Halaman tidak ditemukan (kustom).', 404);
});

//Praktikum Laravel Tugas Pertemuan 3

Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])
    ->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])
    ->name('mahasiswa.detail');
