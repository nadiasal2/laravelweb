@extends('layouts.main')

@section('content')
<h2 class="m-3">Edit Data Student</h2>
<form class="form mx-3 d-grid gap-3" method="post" action="/student/update/{{$student -> id}}">

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif

    <div class="form-group">
        <label for="">NIS</label>
        <input type="number" class="form-control" name="nis" id="nis" value="{{ old('nis', $student->nis) }}">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $student->nama) }}">
    </div>

    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <select class="form-select" name="kelas_id" id="">
    @foreach ($kelas as $class)
    <option name="kelas_id" value="{{ $class->id }}">{{ $class->nama }}</option>
    @endforeach
    </select>
    </div> 

    <!-- <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" class="form-control" name="kelas_id" id="kelas_id" value="{{ old('kelas', $student->kelas_id) }}">
    </div> -->

    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir', $student->tgl_lahir) }}">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $student->alamat) }}">
    </div>
    <a type="submit" class="btn btn-primary margin_bottom_10" href="">Post</a>


               
    <div class="mb-3">

</form>
@endsection