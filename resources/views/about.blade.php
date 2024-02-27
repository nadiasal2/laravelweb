@extends('layouts.main')

@section('content')
<div class="text-center table-responsive">
    <h2>Tentang Saya</h2>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <img src="{{ asset('image/' . $foto) }}" alt="{{ $foto }}">
</div>    

@endsection
