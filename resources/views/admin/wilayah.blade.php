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

<!-- LIST WILAYAH TABLE -->
<div id="table">
	<table class="table table-hover">
		<th>ID</th>
		<th>Nama Wilayah</th>
		<th>Info</th>
		<th>Terakhir diupdate</th>
		<th>Prediksi</th>
		<th>Terakhir diupdate</th>
		<th>Action</th>
		@if($stories->isEmpty())
			<p>Belum ada wilayah</p>
		@else
		@foreach($stories as $story)
		<tr>
			<td>{{$story->id}}</td>
			<td>{{$story->nama}}</td>
			<td><a href="{{ URL::to('admin/wilayah/'.$story->id.'/info') }}">Klik disini untuk update</a></td>
			<td>{{$story->info->updated_at}}</td>
			<td><a href="{{ URL::to('admin/wilayah/'.$story->id.'/prediksi') }}">Klik disini untuk update</a></td>
			<td>{{$story->prediksi->updated_at}}</td>
			<td>
			<a href="{{ URL::to('admin/wilayah/'.$story->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="{{ URL::to('admin/wilayah/'.$story->id.'/delete') }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
		@endif
	</table>
</div>
@stop
