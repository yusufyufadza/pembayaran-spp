@extends('layout.main')
@section('content')
<div class="container-fluid">
  @if (session('success'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat ! </strong>
      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
      {{ session('success') }}
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-4">Data Siswa</h5>
            <a class="btn btn-primary mb-0" href="/student/create">Tambah</a>
          </div>
        
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="responsive">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama</th>
                   
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->name }}</td>
                    
                    <td>{{ $s->address }}</td>
                    <td>{{ $s->phone_number }}</td>
                    <td class="mx-auto">
                        <a class="btn mb-2" href="/student/detail/{{ $s->nisn }}" style="background-color: rgb(0, 162, 255); color:white;"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-warning mb-2" href="/student/edit/{{ $s->nisn }}"><i class="fas fa-pen"></i></a>
                        <form action="/student/delete/{{ $s->nisn }}" method="POST">
                          @method('delete')
                          @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>  
@endsection