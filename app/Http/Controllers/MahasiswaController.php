<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function dataMahasiswa()
    {
        return [
            [
                'nama' => 'Ainal Wicaksono',
                'nim' => '242520078',
                'ipk' => 3.80
            ],
            [
                'nama' => 'Rohman dwi',
                'nim' => '242520079',
                'ipk' => 3.50
            ],
            [
                'nama' => 'Agils Sudar',
                'nim' => '242520080',
                'ipk' => 3.10
            ],
            [
                'nama' => 'Leo Gading',
                'nim' => '242520081',
                'ipk' => 2.80
            ],
            [
                'nama' => 'Jean Azar',
                'nim' => '242520082',
                'ipk' => 1.80
            ],
        ];
    }

    // Profil mahasiswa
    public function profil()
    {
        $nama = 'Ainal Wicaksono';
        $nim = '242520078';
        $prodi = 'Informatika';

        return view('mahasiswa.profil', compact(
            'nama', 'nim', 'prodi'
        ));
    }

    // Daftar mahasiswa
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Detail mahasiswa
    public function detail($nim)
    {
        $mahasiswa = $this->dataMahasiswa();

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_unless($data, 404);

        return view('mahasiswa.detail', [
            'mhs' => $data
        ]);
    }
}
