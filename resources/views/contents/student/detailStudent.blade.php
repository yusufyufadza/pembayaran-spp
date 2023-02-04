@extends('layout.main')
@section('content')
<div class="container-fluid user-card">
    <div class="row">
      <div class="col-12">
        <div class="card custom-card">
          <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
         <div class="card-body">
            <div class="row">
                <div class="col">
            <p class="h5">Nama</p><span class="h5 text-end">{{ $student->name }}</span>
        </div>
        </div>
         </div>
        </div>
      </div>
    </div>
  </div>
@endsection