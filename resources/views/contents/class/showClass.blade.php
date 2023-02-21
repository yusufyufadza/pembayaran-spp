@extends('layout.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        
          <div class="col-12">
          @if (Session::has('success'))
          <div class="alert alert-success" role="alert"
            {{Session::get('success')}}
          </div>
          @endif
        </div>
        </div>
    </div>
    <div class="col-sm-6">
     
    </div>
    </div><!-- /.container-fluid -->
  </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                          </ol>
                      <h3 class="card-title">{{ $title }}</h3>
                      <br>
                        <a class="btn btn-success mt-2" href="/class/create"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
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
                                @foreach ($classes as $class)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $class->name_class }}</td>
                                <td>{{ $class->student_class }}</td>
                                <td class="mx-auto">
          
                                  <div class="mx-auto">
                                  <a class="btn btn-primary" href="/class/detail/{{  $class->id }}"><i class="fas fa-eye"></i></a>
                                  <a class="btn btn-warning" href="/class/edit/{{  $class->id }}"><i class="fas fa-pen"></i></a>
                                  <a href="/class/delete/{{ $class->id }}" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete{{ $class->id}}"><i class="fas fa-trash"></i></a>
                                  </div>
                                  <div class="modal" tabindex="-1" role="dialog" id="modalDelete{{ $class->id}}">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Hapus Siswa</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Apakah anda yakin ingin menghapus kelas {{ $class->name}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <form action="/class/delete/{{ $class->id}}" method="POST">
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
                </section>
@endsection
