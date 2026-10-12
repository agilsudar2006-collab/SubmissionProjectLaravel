<?php


Route::redirect('/beranda', '/');
Route::fallback(function () {
return response('Halaman tidak ditemukan (kustom).', 404);
});