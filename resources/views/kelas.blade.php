@extends('layouts.main')

@section('content')
<h1 class="text-center">Kelas</h1>

<button type="button"  class="btn btn-success mt-5 mb-4">Tambah</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Wali Kelas</th>
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
            <td>{{ $row->namakelas }}</td>
            <td>{{ $row->walikelas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection