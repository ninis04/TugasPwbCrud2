@extends ('layout/main')

@section('title', 'gallery')

@section ('container')

<section id="gallery" class="banner">
   <div class="jumbotron  jumbotron-fuid bg-info">
      
   </div>
   </section>

   <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 col-5 px-3 py-3 thumbnail-gallery">
          <h5 class="text-dark oleo font-weight-bold"><strong>Gallery</strong></h5>
          
        </div>
        
      </div>
    </div>
   
      <div class="container-gallery"> 
         <div class="box">
            <div class="imgbox1">
               <img src="{{ url ('img/a.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2 class="text-light spicy "> Restauran</h2>
                 
               </div>
            </div>
            </div>
               <div class="box">
               <div class="imgbox1">
               <img src="{{ url ('img/d.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy "> Aktivitas Jual Beli</h2>
                 
               </div>
            </div>
               </div>
               <div class="box">
               <div class="imgbox1">
               <img src="{{ url ('img/b.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy">  Parkir</h2>
               </div>
            </div>
      </div>

      <div class="container-gallery"> 
         <div class="box">
            <div class="imgbox1">
               <img src="{{ url ('img/f.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy "> Aktivitas Telaga</h2>
                 
               </div>
            </div>
            </div>
               <div class="box">
               <div class="imgbox1">
               <img src="{{ url ('img/h.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy "> Kegiatan Festifal</h2>
                 
               </div>
            </div>
               </div>
               <div class="box">
               <div class="imgbox1">
               <img src="{{ url ('img/g.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy "> Aktivitas Di Taman</h2>
               </div>
            </div>
      </div>
      <div class="container-gallery"> 
         <div class="box">
            <div class="imgbox1">
               <img src="{{ url ('img/c.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy "> Area Binatang buas </h2>
                 
               </div>
            </div>
            </div>
               <div class="box">
               <div class="imgbox1">
               <img src="{{ url ('img/i.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2  class="text-light spicy"> Pura Danu Beratan</h2>
                 
               </div>
            </div>
               </div>

      </div>

</body>

@endsection

   