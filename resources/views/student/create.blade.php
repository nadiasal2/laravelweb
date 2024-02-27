@extends('layouts.main')

@section('content')
    
    <div class="container">
    <h1>New Data Student</h1>
        <form method="post" action="/student/add">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="number" class="form-control" required id="nis" name="nis" value="{{ old ('nis') }}" >
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" required id="nama" name="nama" value="{{ old ('nama') }}" >
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
                <label for="kelas_id">Kelas:</label>
                <input type="text" class="form-control" required id="kelas_id" name="kelas_id" value="{{ old('kelas_id') }}" >
            </div> -->

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" required id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" >
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" required id="alamat" name="alamat" value="{{ old ('alamat') }}" >
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

    
               
@endsection