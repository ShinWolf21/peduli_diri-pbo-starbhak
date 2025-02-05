@extends('layout.main')

@section('content')
<div class="container">
  <div class="card">
  <div class="card-body">
  <h1 class="mx-auto">Data Diri</h1>
  <div class="row">
      <a href="{{route('tambahdata')}}" type="button" class="btn btn-success mt-2">Tambah +</a>
      <table class="table mt-3">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">nik</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">alamat</th>
                  <th scope="col">Tempat lahir</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  @foreach ($data as $row)
                  <th scope="row">{{ $row->id }}</th>
                  <td>{{$row -> nik}}</td>
                  <td>{{$row -> nama_lengkap}}</td>
                  <td>{{$row -> alamat}}</td>
                  <td>{{$row -> tempat_lahir}}</td>
                  <td class="d-flex">
                      <form action="/deletedata/{{$row->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-warning">Delete</button>
                      </form>
                     <a href="/tampilandata/{{$row->id}}" type="submit" class="btn btn-danger">Edit</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </div>
</div>
</div>
</div>
    </tbody>
  </table>
@endsection
