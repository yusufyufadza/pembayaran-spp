@extends('layout.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/officer">Petugas</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @if (isset($errors))
      @foreach ($errors->all() as $error)
          {{ $error }}
      @endforeach
  @endif
  <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Petugas</h3>
            </div>
            <div class="card-body">
              <form action="/officer/update/{{ $officer->id }}" method="POST">
                @method('put')
                  @csrf
                    <div class="mb-3">
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ $officer->username }}">
                    </div>
                    <div class="mb-3">
                        <label for="password">Level :</label>
                        <select class="form-control" name="level" id="">
                          <option value="admin" {{ $officer->level == "admin" ? "selected" : '' }}>Admin</option>
                          <option value="petugas" {{ $officer->level == "petugas" ? "selected" : '' }}>Petugas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="officers_name">Nama :</label>
                        <input type="text" name="name_officer" id="name_officer" class="form-control" value="{{ $officer->name_officer }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/officer" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
