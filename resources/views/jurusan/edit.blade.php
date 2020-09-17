@extends('layout.main')

@section('title','Ubah Data Jurusan')
 
@section('container')
  <section id="detail">
    <div class="container" style="padding: 50px">
      <div class="section-title">
        <div class="container">
      <div class="row">
      <div clas="col-md-10"> 
      <h1 class="mt-5"> Ubah Data Jurusan!</h1>
      </div>
</div>
</div>


<form method="post" action="/jurusan/{{$jurusan->id}}">
    @method ('patch')
    @csrf 
  <div class="form-group">
    <label for="jurusan">Nama Jurusan </label>
    <input type="text"  class="form-control @error ('nama_jurusan') is-invalid @enderror " 
    id="jurusan" placeholder="Masukkan Nama Jurusan" name="nama_jurusan" value="{{ $jurusan->nama_jurusan}}">
    @error ('nama_jurusan')
       <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  
    <button type="submit" class="btn btn-primary"> Simpan </button>
  </form>



</div>
</div>
</div>

@endsection