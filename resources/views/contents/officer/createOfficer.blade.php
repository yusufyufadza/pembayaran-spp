@extends('layout.main')

@section('content')

<!-- Container-fluid Ends-->

@if (isset($errors))
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Form Tambah Petugas</h3>
          </div>
          <div class="card-body">
              <form action="/officer/store" method="POST">
                @csrf
                  <div class="mb-3">
                      <label for="username">Username :</label>
                      <input type="text" name="username" id="username" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="password">Kata sandi :</label>
                      <input type="password" name="password" id="password" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="officers_name">Nama :</label>
                      <input type="text" name="name_officer" id="name_officer" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="level">Bidang :</label>
                      <select class="form-control" name="level" id="">
                        <option selected disabled>Pilih Level</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/officer" class="btn btn-danger">Batal</a>
              </form>
          </div>
      </div>
  </div>
@endsection
