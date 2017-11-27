<div class="form-group{{ $errors->has('objetivos') ? ' has-error' : '' }}">
	<label for="objetivos">Objetivos:</label>
	<textarea class="form-control" id="objetivos" name="objetivos" rows="2" required>{{ old('objetivos') }}</textarea>
	@if ($errors->has('objetivos'))
	<span class="help-block">
		<strong>{{ $errors->first('objetivos') }}</strong>
	</span>
	@endif
</div>

<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
	<label for="descripcion">Descripcion:</label>
	<textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
	@if ($errors->has('descripcion'))
	<span class="help-block">
		<strong>{{ $errors->first('descripcion') }}</strong>
	</span>
	@endif
</div>