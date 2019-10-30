<form class="form-horizontal" name="guardar_gastos" id="guardar_gastos">
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="modalGastos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nuevo Gasto</h4>
				  </div>
				  <div class="modal-body">
					
					  <div class="row">
						<div class="col-md-12">
							<label>Descripción</label>
							<textarea class="form-control" id="descripcion_gastos" name="descripcion_gastos"  required></textarea>
							<input type="hidden" class="form-control" id="action" name="action"  value="ajax">
						</div>
						
					  </div>

					  <div class="row">
						<div class="col-md-6">
							<label>Monto previsto</label>
							<input type="text" class="form-control" id="precio_previsto" name="precio_previsto" required>
						</div>
						
						<div class="col-md-6">
							<label>Monto real</label>
						  <input type="text" class="form-control" id="precio_real" name="precio_real" required>
						</div>
						
					  </div>
				
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-info" >Guardar</button>
					
				  </div>
				</div>
			  </div>
			</div>
	</form>