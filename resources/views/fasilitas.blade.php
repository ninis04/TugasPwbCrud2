@extends ('layout/main')

@section('title', 'Fasilitas')

@section ('container')

   <section id="fasilitas" class="banner">
   <div class="jumbotron  jumbotron-fuid bg-transparent">
      <div class="container ">
         <div class="row mt-5">
         <div class="col-md-3  ">
            <img src="{{ url ('img/9.png') }}" width="100%" height="380px" class="rounded-circle bg-transparent photo" >
         </div>
      </div>
   </div>
   </section>

 
 <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 col-5 px-3 py-3 thumbnail-fasilitas">
              <h5 class="text-light oleo font-weight-bold"><strong>Fasilitas</strong></h5>
        </div>
      </div>
    </div>
   
    <div class="container-gambar">
         <div class="box">
            <div class="imgbox">
               <img src="{{ url ('img/a.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2 class="text-light luna font-weight-bold" > Restauran</h2>
                 <p class="text-dark kavoon"> Ada dua tempat makan di area atraksi. The Ulun Danu Restauran yang menyajikan menu western, Indonesia, dan Chinese style
                     juga menyediakan menu buffet. Buka dari pukul 09.00 - 17.00 dengan harga yang terjangkau. 
                     Pilihan lainnya, Rumah Makan Ulun Danu menyajikan berbagai menu seperti bebek bakar atau goreng, ayam & ikan ala Taliwang. Itu juga buka dari 09.00 - 17.00.
                 </p>
               </div>
            </div>
            </div>
               <div class="box">
               <div class="imgbox">
               <img src="{{ url ('img/j.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2 class="text-light luna font-weight-bold"> Taman</h2>
               <p class="text-dark kavoon"> 
               Ada sebuah taman kecil yang terletak di depan area Restoran untuk bermain anak-anak. 
               Dengan pemandangan taman dan danau yang indah, juga udaranya yang segar akan membuat liburan Anda lebih menyenangkan,
                berkesan dan sehat.
               </p>
                 
               </div>
            </div>
               </div>
               <div class="box">
               <div class="imgbox">
               <img src="{{ url ('img/e.jpg') }}" >
      </div>
            <div class="detail">
               <div class="content">
               <h2 class="text-light luna font-weight-bold"> Area Parkir</h2>
               <p class="text-dark kavoon"> 
                  Dengan area parkir yang luas dan aman membuat Anda merasa nyaman dan aman 
                  untuk meletakkan kendaraan Anda selama berada di area tersebut. 
                  Kami juga memasang CCTV untuk keamanan Anda selama perjalanan ke sini.
               </p>
               </div>
            </div>
               
               </div>                
      </div>

    


   

@endsection

   