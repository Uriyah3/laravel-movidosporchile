@section('style2')
{{ Html::style('css/comentario.css') }}
@endsection
<div class="modal fade" id="comentar" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="comentar">Publicar comentario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="comentarForm" method="POST" style="margin-bottom: 0em">
					{{ csrf_field() }}
			<div class="modal-body">

					<div class="form-group">
						<label for="descripcion">Comentario:</label>
						<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="¿Qué opinas de la medida?" required></textarea>
					</div>

			</div>
			<div class="modal-footer">
					<div class="form-group">
						<button type="submit" class="btn btn-success" ><img class="octicon" src="{{ URL::asset('icons/comment.svg') }}" height="18px"> Comentar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><img class="octicon" src="{{ URL::asset('icons/x.svg') }}" height="18px"> Cancelar</button>
					</div>
			</div>
				</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

@section('scripts2')
<script type="text/javascript">
			$(function() {
				$('#comentar').on("show.bs.modal", function (e) {
					$("#comentarLabel").html($(e.relatedTarget).data('title'));
					$("#comentarForm").attr('action', ($(e.relatedTarget).data('url')));
				});
			});
		</script>
@endsection
