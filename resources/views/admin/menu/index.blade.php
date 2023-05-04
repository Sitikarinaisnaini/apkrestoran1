@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Menu</h3> &nbsp;
               

                <div class="card-tools">
                    <form action="/menu/search" class="form-inline" method="GET">
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
                      <th>Makanan</th>
                      <th>Minuman</th>
                      <th>Dessert</th>
                      <th>Opsi</th>
                      <th><a href="/menu/create/" class="btn btn-primary">Tambah</a><th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($menu as $karin)
                    <tr>
                      <td>{{$karin->makanan}}</td>
                      <td>{{$karin->minuman}}</td>
                      <td>{{$karin->dessert}}</td>
                      <td> <a href="/menu/{{$karin->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus?{{$karin->makanan}}');"> Hapus </a>
                      <a href="/menu/{{$karin->id}}/edit" class="btn btn-warning">Edit</a></td>
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