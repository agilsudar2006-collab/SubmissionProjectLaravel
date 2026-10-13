@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>

    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Program Studi: {{ $prodi }}</p>
    
@endsection
