@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/menu/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="makanan"> Makanan </label>
                    <input type="text" class="form-control"  name="makanan"id="exampleInputEmail1" placeholder="Makanan">
                  </div>
                  
                  <div class="form-group">
                    <label for="minuman"> Minuman </label>
                    <input type="text" class="form-control"  name="minuman"id="exampleInputEmail1" placeholder="Minuman">
                  </div>
                  <div class="form-group">
                    <label for="dessert"> Dessert </label>
                    <input type="text" class="form-control"  name="dessert"id="exampleInputEmail1" placeholder="Dessert">
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
           