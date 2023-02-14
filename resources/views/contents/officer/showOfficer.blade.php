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
              <div class="page-header">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>PETUGAS</h3>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Petugas</li>
                      </ol>
                    </div>

            <div class="card-body">
              <a class="btn btn-success mb-2" href="/officer/create">Tambah Data</a>
              <div class="dt-ext table-responsive">
                <table class="display" id="responsive">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Level</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($officer as $o)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $o->name_officer }}</td>
                      <td>{{ $o->level }}</td>
                      <td class="mx-auto">
                          <a class="btn mb-2" href="/officer/detail/{{ $o->id }}" style="background-color: rgb(0, 162, 255); color:white;"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-warning mb-2" href="/officer/edit/{{ $o->id }}"><i class="fas fa-pen"></i></a>
                          <form action="/student/delete/{{ $o->id }}" method="POST">
                            @method('delete')
                            @csrf
                          <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>


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
    </div>
@endsection
