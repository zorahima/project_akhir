<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
  -->
  <html lang="en">
  <head>
   <title>SIKOS</title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="{{ asset('template_guest/js/jquery.js')}}"></script> 
   <script src="{{ asset('template_guest/js/jquery.glide.js')}}"></script>

   <link rel="stylesheet" href="{{ asset('template_guest/css/style.css')}}">
   <link rel="stylesheet" href="{{ asset('template_guest/css/animate.css')}}">
   <script type="text/javascript" src="{{ asset('template_guest/js/MyJQ.js')}}"></script>
   <script src="{{ asset('template_guest/js/jquery.localScroll.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('template_guest/js/jquery.scrollTo.min.js')}}" type="text/javascript"></script> 
   <script src="{{ asset('template_guest/js/wow.min.js')}}" type="text/javascript"></script> 

   <!-- scroll function -->
   <script type="text/javascript">
    $(document).ready(function() {
     $('#navigations').localScroll({duration:800});
   });
 </script>


 <script src="{{ asset('template_guest/js/wow.min.js')}}"></script>
 <script>
  new WOW().init();
</script>


</head>
<body>

  <!--============ Navigation ============-->

  <div class="headerwrapper">
   <div id="header" class="container">
    <div class="logo"> <a href="#"><img src="{{ asset('template_guest/images/LOGO.jpg')}}" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
    <nav>
      <ul id="navigations">
        <li><a href="/">HOME</a></li>
        <li> <a href="{{ route('pesanan.create') }}">BOOK ONLINE</a></li>
        <li><a href="contact">CONTACT</a></li>
        <li><a href="login">LOGIN</a></li>
      </ul>
    </nav>
  </div> <!--end of header-->
</div> <!-- end of headerwrapper-->



<!--============ Slider ============-->


<div class="sliderwrapper">
  <div id="slider" class="container">
   <div class="slider">
     <ul class="slides">
      <li class="slide">
       <h5 class="wow fadeInDown" data-wow-delay="0.8s">KAMAR </h5>
       <p class="wow fadeInUp" data-wow-delay="0.8s">Di tempat ini kamu memiliki banyak pilihan kamar tidur, Beberapa pilihan favorit seperti Kamar 3x4,Kamar 5x7 dan Kamar Special. Setiap pilihan kamar bisa menyesuaikan dengan kebutuhan dan personality kamu.</p>
       <img src="{{ asset('template_guest/images/kamar.jpg')}}" width="317" height="256" class="wow fadeInRight" 
       data-wow-delay="0.8s" alt="slide1img"> 
     </li>
     <li class="slide">
       <h5 class="wow fadeInDown" data-wow-delay="0.8s">PARKIRAN </h5>
       <p class="wow fadeInUp" data-wow-delay="0.8s">Tempat parkir yang luas dan mudah diakses menjadi layanan ekstra dari kami untuk semua penghuni kos, Bukan hanya kendaraan motor tetapi bagi kalian yang membawa mobil bisa parkir dengan aman dan keadaan parkiran yangg cukup teduh</p>
       <img src="{{ asset('template_guest/images/parkiran.jpg')}}" width="317" height="256" class="wow fadeInRight" 
       data-wow-delay="0.8s" alt="slideimg2"> 
     </li>
     <li class="slide">
       <h5 class="wow fadeInDown" data-wow-delay="0.8s">DAPUR </h5>
       <p class="wow fadeInUp" data-wow-delay="0.8s">Kebutuhan memasak bagi mahasiswa kos disini menjadi lebih mudah dengan adanya dapur umur disetiap ujung lantai. Jadi untuk semua penghuni kos dapat mengkases dapur dengan mudah, bukan hanya itu layanan dapurpun dilengkapi dengan microwave, kulkas, dispenser dan banyak alat masak yang lainnya</p>
       <img src="{{ asset('template_guest/images/dapur.jpg')}}" width="317" height="256" class="wow fadeInRight" 
       data-wow-delay="0.8s" alt="slideimg2"> 
     </li>
     <li class="slide">
      <h5 class="wow fadeInDown" data-wow-delay="0.8s">KAMAR MANDI </h5>
      <p class="wow fadeInUp" data-wow-delay="0.8s">Fasilitas Kamar Mandi terletak disetiap kamar, Dengan berada disetiap kamar masing-masing kenyamanan, kebersihan tidak akan terganggu</p>
     <img src="{{ asset('template_guest/images/kamar_mandi.jpg')}}" width="317" height="256" class="wow fadeInRight" 
     data-wow-delay="0.8s" alt="slideimg2"> 
   </li>
 </ul>
</div>
</div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->



<!--============ Best Dishes ============-->



<div class="bestdisheswrapper">
  <div id="bestdishes" class="container">

   <h2 class="wow fadeInUp" data-wow-delay="0.3s">ROOM</h2>
   <div class="slider">
    <ul class="slides">
      <li class="slide">
        <div class="item">
          <img src="{{ asset('template_guest/images/kamar.jpg')}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
          data-wow-delay=".8s"> 
          <h3>Kamar 3X4</h3>
        </div> <!-- end of item-->

        <div class="item2">
          <img src="{{ asset('template_guest/images/kamar.jpg')}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
          data-wow-delay=".8s"> 
          <h3>Kamar 4x4</h3>
        </div> <!-- end of item-->

        <div class="item3">
          <img src="{{ asset('template_guest/images/kamar.jpg')}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
          data-wow-delay=".8s"> 
          <h3>Kamar Spesial</h3>
        </div> <!-- end of item-->
      </li>

    </ul>
  </div> <!-- end of slider-->
</div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

     <script type="text/javascript">
      $('.sliderwrapper .slider').glide({
        autoplay: 7000,
        animationDuration: 3000,
        arrows: true,



      });

    </script>

    <script type="text/javascript">
      $('.bestdisheswrapper .slider').glide({
        autoplay: false,
        animationDuration: 700,
        arrows: true,
        navigation:false,



      });


    </script>




  </body>

  </html>