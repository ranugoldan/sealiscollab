@extends('admin.layout')

@section('content')
<h1> Info Prediksi wilayah {{ $anyPrediksi->wilayah->nama }} </h1>

{!! Form::model($anyPrediksi, ['route' => ['admin_update_prediksi', $anyPrediksi->id], 'method' => 'PATCH']) !!}

	@include('admin.infoform')

{!! Form::close() !!}


@stop
