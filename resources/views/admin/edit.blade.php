@extends('admin.layout')

@section('content')

{!! Form::model($wilayah, ['route' => ['admin_update', $wilayah->id], 'method' => 'PATCH', 'files' => true]) !!}

	@include('admin.wilayahform')

{!! Form::close() !!}


@stop
