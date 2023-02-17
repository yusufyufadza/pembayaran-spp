@extends('layout.main')

@section('content')

<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="row">
                <div class="col-sm-12">
                 <div class="card">
                    <div class="card-header pb-0">
                    <h5>Lengkapi Form</h5>
                 </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/officer/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Nama Petugas</label>
                                    <div class="input-group">
                                        <input class="form-control @error('id') is-invalid @enderror" type="text"
                                            name="name_officer" placeholder="Nama lengkap" required>
                                    </div>
                                    @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Username</label>
                                    <div class="input-group">
                                        <input class="form-control @error('id') is-invalid @enderror" type="text"
                                            name="username" placeholder="Username" required>
                                    </div>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            name="password" type="password" aria-label="Amount (to the nearest dollar)"
                                            placeholder="Password" required autofocus>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 input-group-solid">
                                    <label class="form-label">Level</label>
                                    <select name="level" class="form-select form-control" required autofocus>
                                        <option selected disabled>Pilih Level</option>
                                        <option value="petugas">Petugas</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('jurusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary m-r-15" type="submit">Tambah</button>
                                    <a href="/admin/petugas" class="btn btn-light">Batal</a>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
