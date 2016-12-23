
<style type="text/css">
.eventtext {width:100%; margin-top:20px; font:10pt Arial; text-align:left; line-height:25px; background-color:#EDF4F8;
padding:5px; border:1px dashed #C2DAE7;}
#map-canvas {width:100%; height:250px; border:5px solid #DEEBF2;}
.small {font:9pt arial; color:gray; padding:2px; }
#latlongclicked {width:300px; border:1px inset gray;}
</style>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	<div class="form-group {{ $errors->has('nama')? 'has-error': '' }}">
	{!! Form::label('Name') !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}
	{!! $errors->first('nama','<span class="help-block">:message</span>') !!}
	</div>

	<!-- This is map section -->
	{!! Form::label('Map') !!}
	<div class="form-group">
		<div id="map-canvas" class="map-canvas">

		</div>
	</div>

	<div class="form-group col-xs-6 {{ $errors->has('lat')? 'has-error': '' }}">
		{!! Form::label('Latitude', null, ['class' => 'control-label']) !!}
		{!! Form::text('lat', null, ['class' => 'form-control', 'readonly' => 'readonly', 'id' => 'lat']) !!}
	</div>
	<div class="form-group col-xs-6 {{ $errors->has('lat')? 'has-error': '' }}">
		{!! Form::label('Longitude') !!}
		{!! Form::text('lon', null, ['class' => 'form-control', 'readonly' => 'readonly', 'id' => 'lon']) !!}
	</div>
	{!! Form::hidden('stasiun_id', $selectedStasiun->id, ['class' => 'form-control', 'id' => 'stasiun_id', 'value' => $selectedStasiun->id]) !!}

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>

	var map;
	function maps() {
		var opts = {'center': new google.maps.LatLng(-5.878332, 115.290527), 'zoom':5, 'mapTypeId': google.maps.MapTypeId.ROADMAP }
		map = new google.maps.Map(document.getElementById('map-canvas'),opts);

		google.maps.event.addListener(map,'click',function(event) {
			document.getElementById('lat').value = event.latLng.lat()
			document.getElementById('lon').value = event.latLng.lng()
		})

		google.maps.event.addListener(map,'mousemove',function(event) {
		});
	}

	window.onload = maps

	</script>

	<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>
