@extends('layout.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Basic form control</h5>
          </div>

          <form class="form theme-form" action="/student/update/{{ $student->nisn }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">NISN :</label>
                    <input class="form-control" name="nisn" id="exampleFormControlInput1" type="number" placeholder="" value="{{ $student->nisn }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">NIS :</label>
                    <input class="form-control" name="nis" id="exampleInputPassword2" type="number" placeholder="Password" value="{{ $student->nis }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">Nama :</label>
                    <input class="form-control" name="name" id="exampleInputPassword2" type="text" placeholder="Password" value="{{ $student->name }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">Email :</label>
                    <input class="form-control" name="email" id="exampleInputPassword2" type="text" placeholder="Password" value="{{ $student->name }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    {{-- <input type="radio"> --}}
                            <label for="formcontrol-select1">Kelas</label>
                            <select class="form-control btn-square" name="id_class" id="formcontrol-select1">
                                @foreach ($class as $cl)
                                    <option value="{{ $cl->id }}">{{ $cl->name_class }} {{ $cl->student_class }}</option>
                                @endforeach
                            </select>
                  </div>
                </div>
              <div class="row">
                <div class="col">
                  <div>
                    <label for="formcontrol-select1">Alamat :</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea4" rows="3" value="{{ $student->address }}">{{ $student->address }}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">No Telepon :</label>
                    <input class="form-control" value="{{ $student->phone_number }}" name="phone_number" id="exampleInputPassword2" type="number" placeholder="Password">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button class="btn btn-primary" type="submit">Submit</button>
           <a class="btn btn-secondary" href="/student">Cancel</a>
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>
@endsection
