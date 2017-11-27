@extends('layouts.app-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit Account</h1>
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Sorry!</strong> Something wrong with your input data.<br><br>
				<ul>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::model($user, ['method' => 'PATCH','route' => ['manageusers.update', $user->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Email:</strong>
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Password:</strong>
							{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control'))!!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Confirm Password:</strong>
							{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
		@endsection