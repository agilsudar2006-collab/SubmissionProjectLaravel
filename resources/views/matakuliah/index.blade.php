
@extends('layout')

@section('content')

<h2>Data Mata Kuliah</h2>

<a href="{{ route('matakuliah.create') }}" class="btn">
    + Tambah Mata Kuliah
</a>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($matakuliah as $index => $data)
        <tr>
            <td>{{ $matakuliah->firstItem() + $index }}</td>
            <td>{{ $data->kode_matakuliah }}</td>
            <td>{{ $data->nama_matakuliah }}</td>
            <td>{{ $data->sks }}</td>
            <td>
                <a href="{{ route('matakuliah.show', $data->id) }}"
                   class="btn">
                    Detail
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data mata kuliah.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top: 20px;">
    {{ $matakuliah->links() }}
</div>

@endsection
