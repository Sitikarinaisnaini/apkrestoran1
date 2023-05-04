@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pelanggan/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control"  name="nama"id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email"  name="email"class="form-control" id="exampleInputEmail1" placeholder="Alamat email">
                  </div>
                  <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="text"  name="password"class="form-control" id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="hp">No Telp </label>
                    <input type="number" name="telp" class="form-control" placeholder="+62">
                  </div>

                  <label for="alamat" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea name="alamat" id="flotingTextArea" class="form-control" ></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</div>
              </form>
            </div>
              </div>
@endsection  
           