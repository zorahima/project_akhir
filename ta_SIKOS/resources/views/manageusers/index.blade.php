@extends('layouts.app-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Manage Users</h1>
			@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
			@endif
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-right mb-1">
						<a class="btn btn-primary" href="{{ route('manageusers.create') }}" > Create Account</a>
					</div>
				</div>
			</div>
			<br/>
			<table id="table_admins" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Number</th>
						<th>Name</th>
						<th>Email</th>
						<th width="280px">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $key => $user)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a class="btn btn-info"
							href="{{ route('manageusers.show',$user->id) }}">Detail</a>
							<a class="btn btn-primary"
							href="{{ route('manageusers.edit',$user->id) }}">Edit</a>
							{!! Form::open(['method' => 'DELETE','route' =>
							['manageusers.destroy', $user->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btndanger'])
							!!}
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $users->render() !!}
		</div>
	</div>
	@endsection