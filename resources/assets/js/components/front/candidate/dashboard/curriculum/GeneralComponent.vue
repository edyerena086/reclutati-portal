<template>
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">
				Información general
			</h5>
		</div>

		<div class="panel-body">
			<form action="" class="form-horizontal">
				<fieldset>
					<legend class="text-semibold">
						Imagen de perfil
					</legend>
				</fieldset>
			</form>


			<form action="" class="form-horizontal">
				<fieldset>
					<legend class="text-semibold">
						Datos generales
					</legend>

					<div class="form-group">
						<label class="col-lg-3 control-label" for="">
							Nombre(s):
						</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label" for="">
							Apellido paterno:
						</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label" for="">
							Genero:
						</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-9 col-lg-offset-3">
							<button class="btn btn-primary btn-labeled">
								<b><i class="icon-floppy-disk"></i></b>
								Guardar
							</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</template>

<script>
	export default {

    }
</script>