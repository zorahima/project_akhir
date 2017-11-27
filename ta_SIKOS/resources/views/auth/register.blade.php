@extends('layouts.app')


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
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
