@extends('layout.main')

@section('title','Jurusan')
 
@section('container')
<section id="detail">
    <div class="container" style="padding: 40px">
      <div class="section-title">
        <div class="container">
      <div class="row">
      <div clas="col-md-12"> 
      <h1 class="mt-5"> Table Jurusan!</h1>
      </div>
</div>
</div>

<a href="/jurusan/create" class="btn btn-primary my-3">Tambah Data Jurusan</a>

@if(session('status'))
   <div class="alert alert-success">
       {{session('status')}} 
   </div>
@endif

<table class="table">
  <thead class="thead-dark">
   <tr>
        <th scope="col"> No </th> 
        <th scope="col"> Nama Jurusan </th>  
        <th scope="col"> Aksi </th>
   </tr>
</thead>
    <tbody> 
     @foreach ($jurusan as $jrs) 
     <tr> 
      <th scope="row">{{ $loop-> iteration }}</th>
      <td>{{ $jrs -> nama_jurusan }}</td>
      <td>
     
    <form action="jurusan/{{$jrs->id}}" method ="post" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data')">    
    @method ('delete') 
    @csrf
      <button type="submit" class="badge badge-pill badge-danger"> Delete </button>
   </form>
        <a href="jurusan/{{$jrs->id}}/edit" class="badge badge-pill badge-success">Edit</a>
        
      </td>
     </tr>
    @endforeach
    </tbody> 

</table>
</div>
</div>
</div>

@endsection


