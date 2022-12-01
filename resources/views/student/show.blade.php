@extends('template.master')

@section('judul')
<h1>management kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NEW STUDENT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">nomor induk siswa</label>
                    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS" 
                    value="{{ $showSiswaById->nomor_induk_siswa }}" disabled >
                  </div>

                  <div class="form-group">
                    <label for="AlamatNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" 
                    value="{{ $showSiswaById->nama }}" disabled>
                  </div>

                  <div class="form-group">
                        <label for="AlamatNama">Nama</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" 
                    value="{{ $showSiswaById->alamat }}" disabled>
                      </div>
                
                    

                      <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" disabled {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" disabled {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                  disabled
                </select>
              </div>
                <!-- /.card-body -->

                  <a class="btn btn-primary" href="{{ route('student.index') }}">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
                </div>
              </form>
            </div>
            
@endsection