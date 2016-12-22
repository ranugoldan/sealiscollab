@extends('admin.layout')

@section('content')
<h1> Info wilayah {{ $anyInfo->wilayah->nama }} </h1>

{!! Form::model($anyInfo, ['route' => ['admin_update_info', $anyInfo->id], 'method' => 'PATCH']) !!}

	@include('admin.infoform')

{!! Form::close() !!}


@stop
