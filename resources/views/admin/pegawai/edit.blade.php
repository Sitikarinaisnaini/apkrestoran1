@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pegawai/{{$pegawai->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control"  name="nama"id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$pegawai->nama}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email"  name="email"class="form-control" id="exampleInputEmail1" placeholder="Alamat email" value="{{$pegawai->email}}">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text"  name="password"class="form-control" id="exampleInputEmail1" placeholder="Password" value="{{$pegawai->password}}">
                  </div>
                  <div class="form-group">
                    <label for="telp">No Telp </label>
                    <input type="number" name="telp" class="form-control" placeholder="+62" value="{{$pegawai->telp}}">
                  </div>

                  <label for="alamat" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea name="alamat" id="flotingTextArea" class="form-control">{{$pegawai->alamat}}</textarea>
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
           