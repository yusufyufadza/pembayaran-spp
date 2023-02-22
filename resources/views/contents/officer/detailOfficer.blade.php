@extends('layout.main')
@section('content')
<div class="container-fluid">
    <p class="mb-4">Berikut adalah data petugas dengan nama <span class="text-success">{{ $officer->name_officer }}</span></p>
    {{-- Card Information --}}
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card shadow mb-4">
                <img class="m-2 mx-auto img-fluid rounded-circle border border-1 border-danger"
                    src="https://static.vecteezy.com/system/resources/thumbnails/004/607/791/small/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg"
                    height="200" width="200" alt="">
                <h3 class="font-weight-bold text-success text-center">{{ $officer->name_officer }}</h3>
                <h5 class="small text-center mb-4">{{ $officer->username }}</h5>
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
                            <h6 class="font-weight-bold">Nama Lengkap</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $officer->name_officer }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Username</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $officer->username }}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Password</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>*******</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="font-weight-bold">Level</h6>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            <h6>{{ $officer->level }}</h6>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
