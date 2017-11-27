<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <div class="headerwrapper">
                            <div id="header" class="container">
                                <div class="logo"> <a href="#"><img src="{{ asset('template_guest/images/LOGO.jpg')}}" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
                                <nav>
                                    <ul id="navigations">
                                        <li><a href="/">HOME</a></li>
                                        <li><a href="contact">CONTACT</a></li>
                                        @if (Auth::guest())
                                        <li> <a href="{{ route('pesanan.create') }}">BOOK ONLINE</a></li>
                                        <li><a href="login">LOGIN</a></li>
                        <!--<li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>-->
                                       @else
                                       <li> <a href="{{ route('upload.create') }}">UPLOAD</a></li>
                                       <li> <a href="{{ route('upload.store')}}">RIWAYAT UPLOAD</li>
                                       <li>
                                        <a href="{{ route('user.logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        LOGOUT</a>

                                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!--end of header-->
                        </div> <!-- end of headerwrapper-->
                    </ul>
                </li>
            @endif
            </ul>
            </div>
        </div>
    </nav>

@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
