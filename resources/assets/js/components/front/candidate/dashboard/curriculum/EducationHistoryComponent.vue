<template>
	<form action="" class="form-horizontal">
		<fieldset>
			<legend class="text-semibold">
				Experiencia laboral 1
						

				<a href="" class="control-arrow">
					<i class="icon-trash"></i>
				</a>
						
				<a href="" class="control-arrow" v-on:click="showForm">
					<i class="icon-pencil" v-if="!displayForm"></i>
					<i class="icon-move-up" v-if="displayForm"></i>
				</a>
			</legend>

			<!-- form -->
			<div v-if="displayForm">
				<div class="form-group">
					<label for="" class="col-lg-3">
						Título:
					</label>
					<div class="col-lg-9">
						<input type="text" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-lg-3">
						Nivel educativo:
					</label>
					<div class="col-lg-9">
						<input type="text" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-lg-3">
						Año:
					</label>
					<div class="col-lg-3">
						<input type="text" class="form-control">
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
			</div>
		</fieldset>
	</form>
</template>

<script>
	export default {
		data() {
			return {
				displayForm : false
			}
		},

		methods: {
			showForm : function (e) {
				e.preventDefault();
				this.displayForm = (this.displayForm) ? false : true;
			}
		}
    }
</script>

<style>
	.control-arrow {
		padding-left: 5px;
	}
</style>