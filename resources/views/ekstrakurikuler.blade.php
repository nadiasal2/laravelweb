@extends('layouts.main')

@section('content')
    <h2>Data ekstra</h2>

    <div class="text-center table-responsive">
        <table class="table table-bordered" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th style="width: 10%; background-color: lightblue;" scope="col">id</th>
                    <th style="width: 30%; background-color: lightblue;" scope="col">Nama ekstra</th>
                    <th style="width: 30%; background-color: lightblue;" scope="col">Nama pembina</th>
                    <th style="width: 30%; background-color: lightblue;" scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @isset($ekstrakurikuler)
                    @foreach($ekstrakurikuler as $ekstra)
                        <tr>
                            <th scope="row">{{ $ekstra['id'] }}</th>                                                    
                            <td>{{ $ekstra['Nama ekstra'] }}</td>
                            <td>{{ $ekstra['Nama pembina'] }}</td>
                            <td>{{ $ekstra['Deskripsi'] }}</td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection
 