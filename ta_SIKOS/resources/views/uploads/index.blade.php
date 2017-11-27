@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Upload Bukti Bayar</h1>
				@if ($message = Session::get('success'))  <!-- memanggil ke UploadController Succes(paling bawah)-->
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
							<th>Bulan</th>
							<th>Image</th>
							<th>Download</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($uploads as $key => $upload)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $upload->name }}</td>
							<td>{{ $upload->bulan }}</td>
							<td><img width="250" src="{{ URL::to('/uploads/' . $upload->image) }}" alt="{{ $upload->name }}" /></td>
							<td><a class="btn btn-success" href="{{ URL::to('/uploads/' .
								$upload->image) }}" target="_blank"> Download</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $uploads->render() !!}
				</div>
			</div>
	@endsection	