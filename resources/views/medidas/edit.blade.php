<div class="form-group{{ $errors->has('objetivos') ? ' has-error' : '' }}">
	<label for="objetivos">Objetivos:</label>
	<textarea class="form-control" id="objetivos" name="objetivos" rows="2" required>{{ old('objetivos', $medida->objetivos) }}</textarea>
	@if ($errors->has('objetivos'))
	<span class="help-block">
		<strong>{{ $errors->first('objetivos') }}</strong>
	</span>
	@endif
</div>

<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
	<label for="descripcion">Descripcion:</label>
	<textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion', $medida->descripcion) }}</textarea>
	@if ($errors->has('descripcion'))
	<span class="help-block">
		<strong>{{ $errors->first('descripcion') }}</strong>
	</span>
	@endif
</div>

<!-- Aunque ya deberia estar logueado -->
@if(Auth::check() && Auth::user()->rol->nombre == "Gobierno")
<div class="form-group">
	<label for="aprobada">¿Aprobar?</label>
	<div class="form-check form-check-inline">
		<label class="form-check-label">
			<input class="form-check-input" type="radio" name="aprobada" id="aprobada1" value="1"> Si
		</label>
	</div>
	<div class="form-check form-check-inline">
		<label class="form-check-label">
			<input class="form-check-input" type="radio" name="aprobada" id="aprobada1" value="0"> No
		</label>
	</div>
</div>
@endif