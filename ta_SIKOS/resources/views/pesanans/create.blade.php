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
    <div class="bookonlinewrapper">
	<div class="container" id="bookonline">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="wow fadeInUp" data-wow-delay="0.3s"> PESAN ONLINE</h3>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Sorry!</strong> Something wrong with your input data.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::open(array('route' => 'pesanan.store','method'=>'POST', 'files'=>true)) !!}
				<div class="row">
					<form>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'name wow zoomIn')) !!}</br>
					
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'email wow zoomIn')) !!}</br>
						
							{!! Form::text('bulan_mulai', null, array('placeholder' => 'Bulan Mulai','class' => 'from wow zoomIn')) !!}</br>
						
						<button type="submit" class="booknow wow fadeInUp">PESAN</button>
					</div>
				</form>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
		</div>
	</div>
</body>
</html>