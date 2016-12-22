@extends('admin.layout')

@section('content')

{!! Form::model($wilayah) !!}


	<h2>Yakin ingin menghapus wilayah ini?</h2>
	<div class="form-group {{ $errors->has('nama')? 'has-error': '' }}">
	{!! Form::label('Nama') !!}
	{!! Form::text('nama', null, ['class' => 'form-control','readonly']) !!}
	{!! $errors->first('nama','<span class="help-block">:message</span>') !!}
	</div>


	<div class="form-group">
	<a href="{{ route('admin_destroy', $wilayah->id) }}" class="btn btn-danger">DELETE THIS POST</a>
	</div>


{!! Form::close() !!}


@stop
