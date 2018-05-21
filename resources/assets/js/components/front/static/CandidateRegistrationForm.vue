<template>
	<form @submit="sendForm" action="candidate/account/store">
		<h3>
			Registrate en ReclutaTI
		</h3>

		<p>
			Todos los campos son obligatorios.
		</p>

		<div class="alert alert-danger" v-if="formErrors.length">
			<ul>
				<li v-for="error in formErrors">
					{{ error }}
				</li>
			</ul>
		</div>

		<div class="form-group">
			<label for="">Nombre:</label>
			<input type="text" :disabled="processing" v-model="nombre" name="nombre" class="form-control"  />
		</div>

		<div class="form-group">
			<label for="">Apellido Paterno:</label>
			<input type="text" :disabled="processing" v-model="apellidoPaterno" name="apellidoPaterno" class="form-control"  />
		</div>

		<div class="form-group">
			<label for="">Correo electrónico:</label>
			<input type="email" :disabled="processing" v-model="correoElectronico"  name="correoElectronico" class="form-control"  />
		</div>

		<div class="form-group">
			<label for="">Contraseña:</label>
			<input type="password" :disabled="processing" v-model="password" name="password" class="form-control"  />
		</div>

		<div class="form-group">
			<label for="">Confirmación de contraseña:</label>
			<input type="password" :disabled="processing" v-model="passwordConfirmation" name="password_confirmation" class="form-control"  />
		</div>

		<p>
			Al dar clic en "registrarme" aceptas los Términos y Condiciones de Uso, así como la Política de Privacidad.
		</p>

		<div class="form-group">
			<button :disabled="processing" class="btn btn-primary">
				Registrame
			</button>
		</div>
	</form>
</template>

<script>
	export default {
        mounted() {
            this.baseUrl = $('meta[name=base]').attr('content');
            this.csrf_token = $('meta[name=csrf_token]').attr('content');
        },

        data() {
        	return {
        		baseUrl : null,
        		csrf_token : null,

        		formErrors : [],
        		nombre : null,
        		apellidoPaterno : null,
        		correoElectronico : null,
        		password : null,
        		passwordConfirmation : null,

        		processing : false
        	}
        },

        methods: {
        	sendForm(e) {
        		e.preventDefault();

        		this.processing = true;

        		if (this.checkForm()) {
        			var data = {
        				_token : this.csrf_token,
        				nombre : this.nombre,
        				apellidoPaterno : this.apellidoPaterno,
        				correoElectronico : this.correoElectronico,
        				password : this.password,
        				password_confirmation : this.passwordConfirmation
        			}

        			this.$http.post(this.baseUrl + '/candidate/account/store', data)
        				.then((response) => {

        				})
        				.catch((error) => {
        					if (error.response.status == 422) {
                                if (error.response.data.errors.nombre) {
                                    this.formErrors.push(error.response.data.errors.nombre[0]);
                                }

                                if (error.response.data.errors.apellidoPaterno) {
                                    this.formErrors.push(error.response.data.errors.apellidoPaterno[0]);
                                }

                                if (error.response.data.errors.correoElectronico) {
                                    this.formErrors.push(error.response.data.errors.correoElectronico[0]);
                                }

                                if (error.response.data.errors.password) {
                                    this.formErrors.push(error.response.data.errors.password[0]);
                                }
                            }
        				});
        		}

        		this.processing = false;
        	},

        	checkForm() {
        		this.formErrors = [];

        		if (!this.nombre) {
        			this.formErrors.push('El campo nombre es obligatorio.');
        		}

        		if (!this.apellidoPaterno) {
        			this.formErrors.push('El campo apellido paterno es obligatorio.');
        		}

        		if (!this.correoElectronico) {
        			this.formErrors.push('El campo correo electrónico es obligatorio.');
        		} else if (!this.validEmail(this.correoElectronico)) {
        			this.formErrors.push('El campo correo electrónico no es una dirección de correo válida.');
        		}

        		if (!this.password) {
        			this.formErrors.push('El campo contraseña es obligatorio.');
        		}else if (this.password != this.passwordConfirmation) {
        			this.formErrors.push('El campo contraseña y su confirmación no son iguales.');
        		}

        		return (this.formErrors.length > 0) ? false : true;
        	},

        	validEmail:function(email) {
		      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		      return re.test(email);
		    }
        }
    }
</script>