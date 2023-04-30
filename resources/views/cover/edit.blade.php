@extends('layout.template')

@section('content')


<form action='{{ url('profil/'.$data->nama_lengkap) }}' method='post'>
@csrf
@method('put')
<div class="my-4 p-4 bg-body rounded shadow-sm">
    <a href='{{ url('profil') }}' class="btn btn-secondary">< Back </a>
    <div class="mb-4 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
           {{ $data->nama_lengkap }}
        </div>
    </div><div class="mb-4 row">
        <label for="noHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='noHP' value="{{ $data->no_handphone  }}" id="noHP">
        </div>
    </div>
    <div class="mb-4 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='alamat' value="{{ $data->alamat  }}" id="alamat">
        </div>
        </div>
    <div class="mb-4 row">
        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='pendidikan' value="{{ $data->pendidikan }}" id="pendidikan">
        </div>
    </div>
    <div class="mb-4 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
        </div>
    </div>
    <div class="mb-4 row">
        <label for="alamat" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></div>
    </div>
  </form>
    </div>
    
@endsection
       