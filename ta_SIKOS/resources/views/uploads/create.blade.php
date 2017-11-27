@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Upload Bukti Pembayaran</h1>
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
				{!! Form::open(array('route' => 'upload.store','method'=>'POST', 'files'=>true)) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Bulan:</strong>
							{!! Form::text('bulan', null, array('placeholder' => 'Bulan','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Image:</strong>
							{!! Form::file('image', null, array('class' => 'custom-file-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection