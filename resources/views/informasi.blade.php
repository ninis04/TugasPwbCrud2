@extends ('layout/main')

@section('title', 'informasi')

@section ('container')

<section id="informasi" class="banner">
   <div class="jumbotron  jumbotron-fuid bg-transparent">
      <div class="container ">
         <div class="row mt-5">
         <div class="col-md-5  ">
            <img src="{{ url ('img/bali.png') }}" width="50%" height="100%" class="rounded-circle bg-transparent photo" >
         </div>
      </div>
   </div>
   </section>

   <section id="detail">
    <div class="container" style="padding: 20px">
      <div class="section-title">
        <center>
          <h5 class="text-dark luna font-weight-bold">Informasi & Detail</h5>
          <hr>
        </center>
      </div>
         <div class="box" > 

            
            <p class="text-dark luna font-weight-bold" style="float: "> 
               <b>Tiket masuk tempat bersejarah dan suci ini sendiri bervariasi antara kategori di bawah ini:</b> 
             <p  class="text-dark spicy">
            Anak-anak (domestik) : IDR 20.000,- <br>
            Dewasa (domestik)    : IDR 30.000,-<br>
            Anak-anak (tourist)  : IDR 50.000,-<br>
            Dewasa (tourist)     : IDR 75.000,-<br>
            </p><br>
             <p class="text-dark spicy">  
             Sementara tiket parkir sendiri bervariasi antara kategori di bawah ini:</p><br>
             <p class="text-dark spicy">
            Sepeda motor  : IDR 3.000,- <br>
            Mobil pribadi : IDR 5.000,- <br>
            Bus           : IDR 10.000,- <br>
             </p>
             <p class="text-dark spicy"> Desa Candikuning, Kec. Baturiti, Kab. Tabanan - Bali</p><br>
             <p class="text-dark spicy">
             Contact : AGUS TEJA SAPUTRA <br>
             <img src="{{ url ('img/phone.png') }}" width="17px" height="17px"> Phone/Fax : (+62)368 2033050 | (+62)368 2033143 <br>
             <img src="{{ url ('img/hp.png') }}" width="18px" height="18px"> Mobile : (+62)82 14464 0765 <br>
             <img src="{{ url ('img/email.png') }}" width="18px" height="18px"> E-mail : info@ulundanuberatan.com | dtwudb@gmail.com <br>
            Instagram : ulundanuberatan | https://www.instagram.com/ulundanuberatan <br>
</p>
                     </div>  
    </div>
  </section>


@endsection

   