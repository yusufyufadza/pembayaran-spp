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
         
          <form class="form theme-form" action="/student/store" method="POST">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">NISN</label>
                    <input class="form-control" name="nisn" id="exampleFormControlInput1" type="number" placeholder="name@example.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">NIS</label>
                    <input class="form-control" name="nis" id="exampleInputPassword2" type="number" placeholder="Password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">Nama</label>
                    <input class="form-control" name="name" id="exampleInputPassword2" type="text" placeholder="Password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div>
                    <label class="form-label" for="exampleFormControlTextarea4">Alamat</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea4" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">Telp</label>
                    <input class="form-control" name="phone_number" id="exampleInputPassword2" type="number" placeholder="Password">
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