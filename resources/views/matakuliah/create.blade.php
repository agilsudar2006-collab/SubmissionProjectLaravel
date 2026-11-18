
@extends('layout')

@section('content')

<h2>Tambah Mata Kuliah</h2>

<a href="{{ route('matakuliah.index') }}" class="btn">
    Kembali
</a>

@if($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <label>Kode Mata Kuliah</label>
    <input type="text"
           name="kode_matakuliah"
           value="{{ old('kode_matakuliah') }}"
           placeholder="Contoh: MK001"
           required>

    <label>Nama Mata Kuliah</label>
    <input type="text"
           name="nama_matakuliah"
           value="{{ old('nama_matakuliah') }}"
           placeholder="Masukkan nama mata kuliah"
           required>

    <label>Jumlah SKS</label>
    <input type="number"
           name="sks"
           value="{{ old('sks') }}"
           min="1"
           max="6"
           placeholder="Masukkan jumlah SKS"
           required>

    <button type="submit">Simpan Data</button>
</form>

@endsection
