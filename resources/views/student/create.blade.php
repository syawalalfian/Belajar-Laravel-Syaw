@extends('template.master')

@section('judul')
<h1>Management Siswa</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">nomor induk siswa</label>
                    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS">
                  </div>

                  <div class="form-group">
                    <label for="AlamatNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                  </div>

                  <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa"></textarea>
                      </div>

                      <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->
        
                <a class="btn btn-primary mr-3" href="{{ route('student.index') }}">
                <i class="fa fa-arrow-left"></i>
                Back
                </a>
                

                  <button type="submit" class="btn btn-primary">Submit</button>
                
              </form>
            </div>
            
@endsection