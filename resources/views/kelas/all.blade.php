@extends('layouts.main')

@section('content')

    <div class="text-center table-responsive">
        
    <h2>Data siswa</h2>
    <a class="btn btn-primary mb-2" href="/kelas/create" role="button">Tambah Data Baru</a>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif
    
    <table class="table table-bordered" style="table-layout: fixed;">
        <thead>
            <tr>
                <th style="width: 10%; background-color: lightblue;" scope="col">id</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Nama</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $class)
                <tr>
                    <td>{{ $class['id'] }}</td>
                    <td>{{ $class['nama'] }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/kelas/detail/{{ $class['id'] }}">Detail</a>
                        <a type="button" class="btn btn-warning" href="/kelas/edit/{{ $class['id'] }}">Edit</a>

                        <!-- Confirmation Dialog for Delete -->
                        <button class="btn btn-danger" onclick="confirmDelete('{{ $class->id }}')">Delete</button>
                        
                        <!-- Form for Delete -->
                        <form id="delete-form-{{ $class->id }}" method="POST" action="/kelas/delete/{{ $class->id }}" class="d-inline">
                            @method('delete')
                            @csrf 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete($student) {
        var result = window.confirm("Apakah anda yakin ingin menghapus data siswa?");
        if (result) {
            document.getElementById('delete-form-' + $student).submit();
        }
    }
</script>

@endsection
