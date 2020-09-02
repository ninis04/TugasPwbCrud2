@extends('layout.main')

@section('title','Jurusan')
 
@section('container')
<section id="detail">
    <div class="container" style="padding: 40px">
      <div class="section-title">
        <div class="container">
      <div class="row">
      <div clas="col-md-12"> 
      <h2 class="mt-5"> Table Jurusan!</h2>
      </div>
</div>
</div>

<table class="table">
  <thead class="thead-dark">
   <tr>
        <th scope="col"> # </th> 
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
        <a href="" class="badge badge-success">Edit</a>
        <a href="" class="badge badge-danger">Hapus</a>
      </td>
     </tr>
    @endforeach
    </tbody> 

</table>
</div>
</div>
</div>

@endsection


