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

  <!--============ Contact us ============-->


<div class="contactwrapper">
  <div id="contactus" class="container">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
    <div class="staff">
      <ul>
        <li><img src="{{ asset('template_guest/images/char3.png')}}" width="163" height="163" class="myimage wow fadeIn" title="mido" alt="1"></li>
        <li><img src="{{ asset('template_guest/images/char4.png')}}" width="163" height="163" class="myimage2 wow fadeIn" data-wow-delay="0.8s" alt="1"></li> 
        <li><img src="{{ asset('template_guest/images/char5.png')}}" width="163" height="163" class="myimage3 wow fadeIn" data-wow-delay="0.8s" alt="1"></li>
          
      </ul>   

    </div>   
          <!--end of .staff-->
    <img src="{{ asset('template_guest/images/anggota1.png')}}" width="486" height="137" class="firstpop" alt="pop">
    <img src="{{ asset('template_guest/images/popup2.png')}}" width="487" height="137"  class="secondpop" alt="pop">
    <img src="{{ asset('template_guest/images/popup3.png')}}" width="487" height="137"  class="thirdpop" alt="pop">
    <img src="{{ asset('template_guest/images/popup4.png')}}" width="487" height="137"  class="fourthpop" alt="pop">  
           
  </div> <!--contactus class-->
</div> <!-- end of contact wrapper-->

</body>
</html>