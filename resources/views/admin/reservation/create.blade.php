@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Reservation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/reservation/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                    <label for="pegawai_id"> Pegawai </label>
                    <input type="text" class="form-control"  name="pegawai_id"id="exampleInputEmail1" placeholder="Pegawai">
                  </div>
                  <div class="form-group">
                    <label for="pelanggan_id"> Pelanggan </label>
                    <input type="text" class="form-control"  name="pelanggan_id"id="exampleInputEmail1" placeholder="Pelanggan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal"> Tanggal </label>
                    <input type="date" class="form-control"  name="tanggal"id="exampleInputEmail1" placeholder="Tanggal">
                  </div>
                  
                  <div class="form-group">
                    <label for="jam"> Jam </label>
                    <input type="number" class="form-control"  name="jam"id="exampleInputEmail1" placeholder="Jam">
                  </div>
                  <div class="form-group">
                    <label for="meja"> Meja </label>
                    <input type="number" class="form-control"  name="meja"id="exampleInputEmail1" placeholder="Meja">
                  </div>
                  <div class="form-group">
                    <label for="menu_id"> Menu </label>
                    <input type="text" class="form-control"  name="menu_id"id="exampleInputEmail1" placeholder="Menu" >
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
           