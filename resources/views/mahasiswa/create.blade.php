@extends('layout.main')

@section('title','Tambah Data Mahasiswa')
 
@section('container')
  <section id="detail">
    <div class="container" style="padding: 50px">
      <div class="section-title">
        <div class="container">
      <div class="row">
      <div clas="col-md-10"> 
      <h2 class="mt-5"> Tambah Data Mahasiswa!</h2>
      </div>
</div>
</div>


<form method="post" action="/mahasiswa">
 
    @csrf 
  <div class="form-group">
    <label for="mahasiswa">Nama </label>
    <input type="text" class="form-control" id="mahasiswa" placeholder="Masukkan Nama Mahasiswa" mahasiswa="nama ">
  </div>

  <div class="form-group">
    <label for="mahasiswa">NRP </label>
    <input type="text" class="form-control" id="mahasiswa" placeholder="Masukkan NRP Mahasiswa" mahasiswa="nrp ">
  </div>

  <div class="form-group">
    <label for="mahasiswa">Email </label>
    <input type="text" class="form-control" id="mahasiswa" placeholder="Masukkan Email Mahasiswa" mahasiswa="email ">
  </div>

  <div class="form-group">
    <label for="mahasiswa">Jurusan </label>
    <input type="text" class="form-control" id="mahasiswa" placeholder="Masukkan Jurusan Mahasiswa" mahasiswa="jurusan ">
  </div>

  
  
    <button type="submit" class="btn btn-primary">Simpan </button>
  </form>



</div>
</div>
</div>

@endsection