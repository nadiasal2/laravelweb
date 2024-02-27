@extends('layouts.main')

@section('content')

    <div class="text-center table-responsive">
        
    <h2>Data siswa</h2>
    <a class="btn btn-primary mb-2" href="/student/create" role="button">Tambah Data Baru</a>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif
    
    <table class="table table-bordered" style="table-layout: fixed;">
        <thead>
            <tr>
                <th style="width: 10%; background-color: lightblue;" scope="col">id</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">NIS</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Nama</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Kelas</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Tanggal Lahir</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Alamat</th>
                <th style="width: 10%; background-color: lightblue;" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['nis'] }}</td> 
                    <td>{{ $student['nama'] }}</td>
                    <td>{{ $student->kelas->nama }}</td>
                    <td>{{ $student['tgl_lahir'] }}</td>
                    <td>{{ $student['alamat'] }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/student/detail/{{ $student['id'] }}">Detail</a>
                        <a type="button" class="btn btn-warning" href="/student/edit/{{ $student['id'] }}">Edit</a>

                        <!-- Confirmation Dialog for Delete -->
                        <button class="btn btn-danger" onclick="confirmDelete('{{ $student->id }}')">Delete</button>
                        
                        <!-- Form for Delete -->
                        <form id="delete-form-{{ $student->id }}" method="POST" action="/student/delete/{{ $student->id }}" class="d-inline">
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
