@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Reservation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/reservation/{{$reservation->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="pegawai_id"> Pegawai </label>
                    <input type="text" class="form-control"  name="pegawai_id"id="exampleInputEmail1" placeholder="Pegawai" value="{{$reservation->pegawai_id}}">
                  </div>
                  <div class="form-group">
                    <label for="pelanggan_id"> Pelanggan </label>
                    <input type="text" class="form-control"  name="pelanggan_id"id="exampleInputEmail1" placeholder="Pelanggan" value="{{$reservation->pelanggan_id}}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal"> Tanggal </label>
                    <input type="date" class="form-control"  name="tanggal"id="exampleInputEmail1" placeholder="Tanggal" value="{{$reservation->tanggal}}">
                  </div>
                  <div class="form-group">
                    <label for="jam"> Jam </label>
                    <input type="number" class="form-control" name="jam" id="exampleInputEmail1" placeholder="Jam" value="{{$reservation->jam}}">
                  </div>
                  <div class="form-group">
                    <label for="meja"> Meja </label>
                    <input type="number"  name="meja"class="form-control" id="exampleInputEmail1" placeholder="Meja" value="{{$reservation->meja}}">
                  </div>
                  <div class="form-group">
                    <label for="menu_id"> Menu </label>
                    <input type="text" name="menu_id" class="form-control" placeholder="Menu" value="{{$reservation->menu_id}}">
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
           