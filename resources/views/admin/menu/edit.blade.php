@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/menu/{{$menu->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="makanan"> Makanan</label>
                    <input type="text" class="form-control"  name="makanan"id="exampleInputEmail1" placeholder="Makanan" value="{{$menu->makanan}}">
                  </div>
                  <div class="form-group">
                    <label for="minuman"> Minuman</label>
                    <input type="text" class="form-control"  name="minuman"id="exampleInputEmail1" placeholder="Minuman" value="{{$menu->minuman}}">
                  </div>
                  <div class="form-group">
                    <label for="dessert"> Dessert </label>
                    <input type="text" class="form-control"  name="dessert"id="exampleInputEmail1" placeholder="Dessert" value="{{$menu->dessert}}">
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
           