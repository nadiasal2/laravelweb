@extends('layouts.main')

@section('content')
    
    <div class="container">
    <h1>New Data Student</h1>
        <form method="post" action="/kelas/add">
            @csrf <!-- CSRF Token -->

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" required id="nama" name="nama" value="{{ old ('nama') }}" >
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

    
@endsection