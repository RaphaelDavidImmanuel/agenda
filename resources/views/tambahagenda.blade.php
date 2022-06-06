@extends('layouts.main')

@section('content')
<div class="container">
  <h1 class="text-center mb-4">Agenda</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form method="POST" action="/insertdata">
                      @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                          <input type="text" name="mata_pelajaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Materi</label>
                          <input type="text" name="materi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jam Pelajaran</label>
                          <input type="text" name="jam_pelajaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Absen</label>
                          <input type="text" name="absen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kelas</label>
                          <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('name')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}
                        </div>

                        <select class="form-select" name="pembelajaran" aria-label="Default select example" style="width: 100%">
                          <option selected>Pilih Jenis Pembelajaran</option>
                          <option value="1">Offline</option>
                          <option value="2">Online</option>
                        </select>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Link</label>
                          <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('notelepon')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}

                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Foto</label>
                          <input type="text" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('notelepon')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}

                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                          {{-- @error('notelepon')
                          <div class="text-danger">
                            {{message}}
                          </div>
                          @enderror --}}

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection