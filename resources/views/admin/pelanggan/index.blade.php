@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pelanggan</h3> 
               
                <div class="card-tools">
                    <form action="/pelanggan/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Telp</th>
                      <th>Alamat</th>
                      <th>Opsi</th>
                      <th><a href="/pelanggan/create/" class="btn btn-primary">Tambah</a><th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pelanggan as $karin)
                    <tr>
                      <td>{{$karin->nama}}</td>
                      <td>{{$karin->email}}</td>
                      <td>{{$karin->password}}</td>
                      <td>{{$karin->telp}}</td>
                      <td>{{$karin->alamat}}</td>
                      <td> <a href="/pelanggan/{{$karin->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus?{{$karin->nama}}');"> Hapus </a>
                      <a href="/pelanggan/{{$karin->id}}/edit" class="btn btn-warning">Edit</a></td>
                      <td></td>
                      <td></td>
                    </tr>
                    @endforeach
              
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
</div>