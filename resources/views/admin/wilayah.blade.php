@extends('admin.layout')
@section('content')
<div id="admin-header" class="row">
<div class="col-md-6">
<h1>
	STASIUN {{ strtoupper($namaStasiun) }}
</h1>
</div>
<div id="admin-header-right" class="col-md-6">
	<a href="{{ URL::to('admin/wilayah/create') }}<?php echo "?id=$request->id"; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Tambah Wilayah Baru</a>
</div>
</div>

<!-- BEGIN LIST WILAYAH TABLE -->
<div id="table">
	<table class="table table-hover">
		<th>ID</th>
		<th>Region name</th>
		<th>Info</th>
		<th>Last info update</th>
		<th>Prediciton</th>
		<th>Last prediction update</th>
		<th>Action</th>
		@if($stories->isEmpty())
			<p>No region found yet!</p>
		@else
		@foreach($stories as $story)
		<tr>
			<td>{{$story->id}}</td>
			<td>{{$story->nama}}</td>
			<td><a href="{{ URL::to('admin/wilayah/'.$story->id.'/info') }}">Click here to update info</a></td>
			<td>{{$story->info->updated_at}}</td>
			<td><a href="{{ URL::to('admin/wilayah/'.$story->id.'/prediksi') }}">Click here to update prediction</a></td>
			<td>{{$story->prediksi->updated_at}}</td>
			<td>
				<!-- BUTTON URLs -->
				<a href="{{ URL::to('admin/wilayah/'.$story->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="{{ URL::to('admin/wilayah/'.$story->id.'/delete') }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
		@endif
	</table>
</div>
<!-- END LIST WILAYAH TABLE -->
@stop
