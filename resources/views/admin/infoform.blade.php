

	<div class="form-group {{ $errors->has('cuaca')? 'has-error': '' }}">
	{!! Form::label('Cuaca') !!}
	<select id="cuaca" name="cuaca" class="form-control">
	<option value="Cerah">Cerah</option>
	<option value="Berawan">Berawan</option>
	<option value="Hujan Ringan">Hujan Ringan</option>
	<option value="Hujan Lebat">Hujan Lebat</option>
	<option value="Hujan Badai">Hujan Badai</option>
</select>
	</div>

	<div class="form-group {{ $errors->has('arahangin')? 'has-error': '' }}">
	{!! Form::label('Cuaca') !!}
	<select id="arahangin" name="arahangin" class="form-control">
	<option value="Utara">Utara</option>
	<option value="Timur Laut">Timur Laut</option>
	<option value="Timur">Timur</option>
	<option value="Tenggara">Tenggara</option>
	<option value="Selatan">Selatan</option>
	<option value="Barat Daya">Barat Daya</option>
	<option value="Barat">Barat</option>
	<option value="Barat Laut">Barat Laut</option>
</select>
	</div>


	<div class="form-group {{ $errors->has('kecmin')? 'has-error': '' }}">
	{!! Form::label('Kecepatan Angin Minimal') !!}
	{!! Form::text('kecmin', null, ['class' => 'form-control']) !!}
	{!! $errors->first('kecmin','<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group {{ $errors->has('kecmax')? 'has-error': '' }}">
	{!! Form::label('Kecepatan Angin Maximal') !!}
	{!! Form::text('kecmax', null, ['class' => 'form-control']) !!}
	{!! $errors->first('kecmax','<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('tinggimin')? 'has-error': '' }}">
	{!! Form::label('Tinggi Gelombang Minimal') !!}
	{!! Form::text('tinggimin', null, ['class' => 'form-control']) !!}
	{!! $errors->first('tinggimin','<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group {{ $errors->has('tinggimax')? 'has-error': '' }}">
	{!! Form::label('Tinggi Gelombang Maximal') !!}
	{!! Form::text('tinggimax', null, ['class' => 'form-control']) !!}
	{!! $errors->first('tinggimax','<span class="help-block">:message</span>') !!}
	</div>


	<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>
