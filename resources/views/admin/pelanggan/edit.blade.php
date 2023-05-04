@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control"  name="nama"id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$pelanggan->nama}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email"  name="email"class="form-control" id="exampleInputEmail1" placeholder="Alamat email" value="{{$pelanggan->email}}">
                  </div>
                  <div class="form-group">
                    <label for="password">Password </label>
                    <input type="text"  name="password"class="form-control" id="exampleInputEmail1" placeholder="Password" value="{{$pelanggan->password}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="telp">No Telp </label>
                    <input type="number" name="telp" class="form-control" placeholder="+62" value="{{$pelanggan->telp}}">
                  </div>

                  <label for="alamat" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea name="alamat" id="flotingTextArea" class="form-control">{{$pelanggan->alamat}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
</div>
              </form>
            </div>
              </div>
@endsection  
           