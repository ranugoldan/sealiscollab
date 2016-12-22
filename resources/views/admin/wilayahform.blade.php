
<style type="text/css">
.eventtext {width:100%; margin-top:20px; font:10pt Arial; text-align:left; line-height:25px; background-color:#EDF4F8;
padding:5px; border:1px dashed #C2DAE7;}
#map-canvas {width:100%; height:250px; border:5px solid #DEEBF2;}
.small {font:9pt arial; color:gray; padding:2px; }
#latlongclicked {width:300px; border:1px inset gray;}
</style>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	<div class="form-group {{ $errors->has('nama')? 'has-error': '' }}">
	{!! Form::label('Nama') !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}
	{!! $errors->first('nama','<span class="help-block">:message</span>') !!}
	</div>


	<div class="form-group {{ $errors->has('lat')? 'has-error': '' }}">

		{!! Form::label('Latitude') !!}
		{!! Form::text('lat', null, ['class' => 'form-control',  'id' => 'lat']) !!}
		{!! Form::label('Longitude') !!}
		{!! Form::text('lon', null, ['class' => 'form-control',  'id' => 'lon']) !!}
		{!! Form::hidden('stasiun_id', $selectedStasiun->id, ['class' => 'form-control', 'id' => 'stasiun_id', 'value' => $selectedStasiun->id]) !!}

	</div>


	   



	<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>
