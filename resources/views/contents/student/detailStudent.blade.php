@extends('layout.main')
@section('content')
<div class="container-fluid">
    <p class="mb-4">Berikut adalah data siswa dengan nama <span class="text-success">{{ $student->name }}</span></p>

    {{-- Card Information --}}
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card shadow mb-4">
                <img class="m-2 mx-auto img-fluid rounded-circle border border-1 border-danger"
                    src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                    height="200" width="200" alt="">
                <h3 class="font-weight-bold text-success text-center">{{ $student->name }}</h3>
                <h5 class="small text-center mb-4">{{ $student->email }}</h5>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow mb-3 mt-3">
                <div class="card-header">
                   <center><h5>Data Lengkap</h5></center>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">NISN</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->nisn }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">NIS</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->nis }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Nama Lengkap</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->name }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Kelas</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->classModel->name_class }} - {{ $student->classModel->student_class }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Email</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->email }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">No Telepon</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->phone_number }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Alamat Lengkap</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $student->address }}</h6>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
