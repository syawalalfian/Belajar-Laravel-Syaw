@extends('template.master')

@section('judul')
<h1>management kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnk">Nama Kelas</label>
                    <input type="text" name="namakelas" class="form-control" id="inputnk" placeholder="Masukan Nama Kelas">
                  </div>

                  <div class="form-group">
                    <label for="inputjurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputjurusan" placeholder="Masukan Jurusan">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
@endsection