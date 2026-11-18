
@extends('layout')

@section('content')

<h2>Detail Mata Kuliah</h2>

<table>
    <tr>
        <th>Kode Mata Kuliah</th>
        <td>{{ $matakuliah->kode_matakuliah }}</td>
    </tr>

    <tr>
        <th>Nama Mata Kuliah</th>
        <td>{{ $matakuliah->nama_matakuliah }}</td>
    </tr>

    <tr>
        <th>Jumlah SKS</th>
        <td>{{ $matakuliah->sks }}</td>
    </tr>

    <tr>
        <th>Tanggal Dibuat</th>
        <td>{{ $matakuliah->created_at->format('d-m-Y H:i:s') }}</td>
    </tr>

    <tr>
        <th>Tanggal Diperbarui</th>
        <td>{{ $matakuliah->updated_at->format('d-m-Y H:i:s') }}</td>
    </tr>
</table>

<br>

<a href="{{ route('matakuliah.index') }}" class="btn">
    Kembali
</a>

@endsection
