@extends('layouts.app-admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3>PESANAN</h3>
				@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
				@endif
				
				<br/>
				<table id="table_uploads" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Number</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mulai Bulan</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($pesanans as $key => $pesanan)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $pesanan->name }}</td>
							<td>{{ $pesanan->email }}</td>
							<td>{{ $pesanan->bulan_mulai }}</td>
								</tr>
								@endforeach

							</tbody>
						</table>
						{!! $pesanans->render() !!}
					</div>
				</div>
				</div>
			@endsection
