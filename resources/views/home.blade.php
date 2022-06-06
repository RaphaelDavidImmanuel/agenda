@extends('layouts.main')

@section('content')
<h1 class="text-center">Agenda</h1>
<table class="table table-striped">
    <a href="/tambahagenda" class="btn btn-success mt-5 mb-4">tambah</a>

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Materi</th>
            <th scope="col">Jam Pelajaran</th>
            <th scope="col">Absen</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Pembelajaran</th>
            <th scope="col">Link Zoom</th>
            <th scope="col">Foto</th>
            <th scope="col">Keterangan</th>
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
            <td>{{ $row->name }}</td>
            <td>{{ $row->mata_pelajaran }}</td>
            <td>{{ $row->materi }}</td>
            <td>{{ $row->jam_pelajaran }}</td>
            <td>{{ $row->absen }}</td>
            <td>{{ $row->kelas }}</td>
            <td>{{ $row->pembelajaran }}</td>
            <td>{{ $row->link }}</td>
            <td>{{ $row->foto }}</td>
            <td>{{ $row->keterangan }}</td>
            <td style="display: flex;">
                <form action="/deletedata/{{$row->id}}" method="post" style="margin-right: 20px">
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  @method('delete')
                </form>
                <a type="button" href="/tampilan/{{$row->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


