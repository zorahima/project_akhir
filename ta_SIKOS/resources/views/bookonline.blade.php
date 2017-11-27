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
                    <li> <a href="bookonline">BOOK ONLINE</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    <li><a href="login">LOGIN</a></li>
                </ul>
            </nav>
          </div> <!--end of header-->
    </div> <!-- end of headerwrapper-->


    <!--============ BOOK ONLINE ============-->

    <div class="bookonlinewrapper">
        <div class="container" id="bookonline">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
        <form >
            <input type="text" class="name wow zoomIn" placeholder="Your Name" ></br>
            <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL"></br>
            <input type="text" class="from wow zoomIn" placeholder="09-06-2014"></br>
            <input type="text" class="to wow zoomIn" placeholder="09-06-2014"></br>
            <input type="text" class="persons wow zoomIn" placeholder="Room"></br>
            <button class="booknow wow fadeInUp"> BOOK NOW </button>
        
        </form>
        
        
        </div>
    </div> <!-- end of book online wrapper-->
    </body>

    </html>