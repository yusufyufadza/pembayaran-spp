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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Petugas</li>
                          </ol>
                          <br>
                      <h3>Daftar Petugas</h3>
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

                        <div class="mx-auto">
                        <a class="btn btn-primary" href="/officer/detail/{{  $o->id }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-warning" href="/officer/edit/{{  $o->id }}"><i class="fas fa-pen"></i></a>
                        <a href="/officer/delete/{{ $o->id }}" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete{{ $o->id}}"><i class="fas fa-trash"></i></a>
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="modalDelete{{ $o->id}}">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Hapus Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus siswa {{ $o->name}}</p>
                              </div>
                              <div class="modal-footer">
                                <form action="/officer/delete/{{ $o->id}}" method="POST">
                                  @method('delete')
                                  @csrf
                                <button type="submit" class="btn btn-primary">Yakin</button>
                                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
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
