@extends('layouts.main')

@section('content')
<h2 class="m-3">Edit Data Student</h2>
<form class="form mx-3 d-grid gap-3" method="post">

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif

    
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $kelas->nama) }}">
    </div>
    <a type="submit" class="btn btn-primary margin_bottom_10" href="">Post</a>
</form>
@endsection