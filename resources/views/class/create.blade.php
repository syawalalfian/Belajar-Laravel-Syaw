@extends('template.master')

@section('judul')
<h1>Management Kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Class</h3>
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

                <a class="btn btn-primary mr-3" href="{{ route('class.index') }}">
                <i class="fa fa-arrow-left"></i>
                Back
                </a>

                <button type="submit" class="btn btn-primary">Submit</button>
          
              </form>
            </div>
            
@endsection