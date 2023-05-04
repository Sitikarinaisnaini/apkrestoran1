@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Reservasi</h3> &nbsp;
                <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-info btn-md">Cetak Laporan</a>

                <div class="card-tools">
                    <form action="/reservation/search" class="form-inline" method="GET">
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
                      <th>Pegawai</th>
                      <th>Pelanggan</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Meja</th>
                      <th>Menu</th>
                      <th>Opsi</th>
                      <th><a href="/reservation/create/" class="btn btn-primary">Tambah</a><th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservation as $pesan)
                    <tr>
                      <td>{{$pesan->pegawai->nama}}</td>
                      <td>{{$pesan->pelanggan->nama}}</td>
                      <td>{{$pesan->tanggal}}</td>
                      <td>{{$pesan->jam}}</td>
                      <td>{{$pesan->meja}}</td>
                      <td>{{$pesan->menu->makanan}}</td>
                      <td> <a href="/reservation/{{$pesan->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus?{{$pesan->nama}}');"> Hapus </a>
                      <a href="/reservation/{{$pesan->id}}/edit" class="btn btn-warning">Edit</a></td>
                      <td> <a href="/reservation/{{$pesan->id}}/cetakstruk" class="btn btn-success" onclick="return confirm('Apakah anda yakin mencetak struk?{{$pesan->nama}}');"> Cetak Struk </a>
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