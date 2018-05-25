<template>
	<form v-bind:action="action" class="form-horizontal">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">
					Buscar oportunidades de empleo.
				</h5>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							<input type="text" placeholder="¿Qué estoy buscando?" class="form-control">
						</div>
					</div>

					<div class="col-sm-1 text-center">
						en
					</div>

					<div class="col-sm-5">
						<div class="form-group">
							<input type="text" placeholder="Estado" class="form-control">
						</div>
					</div>

					<div class="col-sm-1">
						<button class="btn btn-primary">
							S
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</template>

<script>
	export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
        	return {
        		action : $('meta[name=base_url').attr('content') + '/job/search'
        	}
        }
    }
</script>