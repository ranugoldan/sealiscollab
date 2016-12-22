@extends('admin.layout')

@section('content')
<h1> {{ strtoupper($selectedStasiun->nama) }} </h1>
{!! Form::open(['route' => 'admin_store']) !!}

	@include('admin.wilayahform')

{!! Form::close() !!}

@stop
