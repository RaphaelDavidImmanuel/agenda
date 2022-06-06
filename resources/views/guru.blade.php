@extends('layouts.main')

@section('content')
<h1 class="text-center">Guru</h1>


<a href="" class="btn btn-success mt-5 mb-4">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">NIK Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Ussername</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @php
        $no=1
    @endphp
    <tbody>
        @foreach ($data as $row)            
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->namaguru }}</td>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->mapel }}</td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection