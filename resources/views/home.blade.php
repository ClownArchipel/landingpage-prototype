@extends('main.master')

@section('tittle','Ulin-Nuha')    

@section('content')
{{-- Carousel code --}}
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/sw1.jpg" alt="Ulin-Nuha" width="1100" height="500">
            {{-- <div class="carousel-caption">
                <h3>Ulin Nuha</h3>
                <p>We had such a great time in LA!</p>
              </div> --}}
          </div>
          <div class="carousel-item">
            <img src="../img/sw2.jpg" alt="Ulin-Nuha" width="1100" height="500">
            <div class="carousel-caption">
                <div id="ikon">
                    <a href="#">
                        {{--  --}}
                    </a>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/sw3.jpg" alt="Ulin-Nuha" width="1100" height="500">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

{{--Describe web  --}}

<div class="jumbotron jumbotron-fluid" style="background-image: url(../img/bgdesk.jpg);background-size:cover;">
    <div class="container d-flex" style="padding-top:10%; padding-bottom:10%;">
    {{-- Gambar kiri --}}
        <div class="homedua" style="padding-right: ">
            <img src="../img/fotodesk.jpg" alt="" class="border border-secondary img-thumbnail">
        </div>
        <div class="container border border-secondary rounded">
            <h1>ULIN-NUHA</h1>      
            <h6>
              <p>Menjadikan lembaga sosial, pendidikan dan dakwah, melahirkan generasi Islam yang unggul, berwawasan luas , terampil, mandiri dan berakhlak mulia</p>
            </h6>
        </div>
    </div>
</div>

{{-- Galeri Foto --}}
<div class="jumbotron jumbotron-fluid" id="imglight">
    <div class="container text-center text-white p-2">
        <h1>Galeri Foto</h1>
        <div class="galeri rounded">
            <a href="../img/GF1.jpeg" class="fancybox" data-fancybox="gallery1"><img src="../img/GF1.jpeg" alt="ini"></a>
            <a href="../img/GF2.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/GF2.jpg" alt="ini"></a>
            <a href="../img/GF3.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/GF3.jpg" alt="ini"></a>
            <a href="../img/GF4.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/GF4.jpg" alt="ini"></a>
            <a href="../img/GF5.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/GF5.jpg" alt="ini"></a>
            <a href="../img/home_1.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/home_1.jpg" alt="ini"></a>
            <a href="../img/home_1.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/home_1.jpg" alt="ini"></a>
            <a href="../img/home_1.jpg" class="fancybox" data-fancybox="gallery1"><img src="../img/home_1.jpg" alt="ini"></a>
        </div>
    </div>
</div>

{{-- Maps --}}
    <div class="Jumbotron-fluid text-center p-3 " >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4127.672661842143!2d112.25753042160719!3d-7.824430968730261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786060e7229573%3A0xc64828de3cd3c05c!2sPanti%20Asuhan%20Muhammadiyah%20ULIN-NUHA!5e0!3m2!1sen!2sid!4v1616823692042!5m2!1sen!2sid" width="100%" height="500px" style="border:2;border-color:black" allowfullscreen="" loading="lazy"></iframe>
    </div>
        
@endsection