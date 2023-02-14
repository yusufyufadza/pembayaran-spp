@extends('layout.main')

@section('content')

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Basic form control</h5>
          </div>
          @if (isset($errors))
              @foreach ($errors->all() as $error)
                  <small class="text-danger">{{ $error }}</small>
              @endforeach
          @endif
          <form class="form theme-form" action="/student/store" method="POST">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">NISN</label>
                    <input class="form-control" name="nisn" id="exampleFormControlInput1" type="number" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">NIS</label>
                    <input class="form-control" name="nis" id="exampleInputPassword2" type="number" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">Nama</label>
                    <input class="form-control" name="name" id="exampleInputPassword2" type="text" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">Email</label>
                    <input class="form-control" name="email" id="exampleInputPassword2" type="text" >
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
              </div>
              <div class="row">
                <div class="col">
                  <div>
                    <label for="formcontrol-select1">Alamat</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea4" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="formcontrol-select1">Nomor telepon</label>
                    <input class="form-control" name="phone_number" id="exampleInputPassword2" type="number" >
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
  <!-- Container-fluid Ends-->

@endsection
