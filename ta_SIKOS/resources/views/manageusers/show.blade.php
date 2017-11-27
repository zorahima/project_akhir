@extends('layouts.app-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Account Detail</h1>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $user->name }}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Email:</strong>
					{{ $user->email }}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Job title:</strong>
					{{ $user->job_title }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection