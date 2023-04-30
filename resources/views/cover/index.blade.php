@extends('layout.template')

@section('content')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('profil') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <div class="pb-3">
                  <a href='{{ url('profil/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-2">Nama Lengkap</th>
                            <th class="col-md-2">Nomor Handphone</th>
                            <th class="col-md-2">Alamat</th>
                            <th class="col-md-3">Pendidikan</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->no_handphone }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->pendidikan }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                                <a href='{{ url('profil/'.$item->nama_lengkap.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Are you sure this data will be deleted ?')" class='d-inline' action="{{ url('profil/'.$item->nama_lengkap) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach   
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}
          </div>
@endsection
