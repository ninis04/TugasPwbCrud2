@extends ('layout/main')

@section('title', ' Danau Beratan Bedugul Bali')

@section('container')
<section id="home" class="banner">
      <div class="jumbotron  jumbotron-fuid bg-transparent">
        <div class="container ">
          <div class="row mt-5">
            <div class="col-md-3 ">
              <img src="{{ url ('img/7.png') }}" width="120%" height="400px" class="rounded-circle bg-transparent photo" >
            </div>
            <div class="col-md-8 ">
              <h5 class="text-light luna font-weight-bold" height="210px">Welcome To Ulun Danu Bedugul</h5>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-10 px-5 py-4 thumbnail">
          <h5 class="text-dark luna font-weight-bold">Sejarah.</h5>
          <p class="text-dark kavoon" > 
            "
               Pura Ulun Danu Bratan atau Bratan Pura merupakan sebuah candi air besar di Bali, Indonesia - candi utama air lainnya menjadi Pura Ulun Danu Batur. 
            Kompleks candi ini terletak di tepi barat laut Danau Bratan di pegunungan dekat Bedugul. 
            Candi air memenuhi seluruh wilayah di daerah aliran; di tepi hilir ada banyak candi kecil air yang spesifik untuk setiap asosiasi irigasi. </p>
            <p class="text-dark kavoon"><br>
                Candi ini sebenarnya digunakan untuk upacara persembahan untuk dewi Dewi Danu, dewi air, danau dan sungai.  
            Danau Bratan merupakan salah satu danau penting dalam hal irigasi.Kompleks ini dibangun pada tahun 1633 yang tersebar di beberapa pulau.
            Meru, dengan sebelas atap didedikasikan untuk Siwa dan istrinya Parwati. Buddha pun juga memiliki tempat dalam kuil dewa Hindu tersebut.
            Danau Bratan dikenal sebagai danau "gunung suci", kawasan ini sangat subur, terletak pada ketinggian 1.200 meter, dan beriklim sangat dingin.
            "
          </p>
        </div>
        
      </div>
    </div>
@endsection