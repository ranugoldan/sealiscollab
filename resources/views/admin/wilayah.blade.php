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
@stop
