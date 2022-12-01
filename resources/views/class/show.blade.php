@extends('template.master')

@section('judul')
<h1>management kelas</h1>
@endsection

@section('content')
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnk">Nama Kelas</label>
                    <input type="text" name="namakelas" class="form-control" id="inputnk" placeholder="Masukan Nama Kelas" 
                    value="{{ $showKelasById->nama_kelas }}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="inputjurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputjurusan" placeholder="Masukan Jurusan" 
                    value="{{ $showKelasById->jurusan }}" disabled>
                  </div>
                
                    
                <!-- /.card-body -->

                  <a class="btn btn-primary" href="{{ route('class.index') }}">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
                </div>
              </form>
            </div>
@endsection