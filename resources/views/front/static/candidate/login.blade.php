@extends('layouts.front.static')

{{-- Page Title --}}
@section('pageTitle')
	Iniciar sesión
@stop

{{-- Content --}}
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-2">
				Hola
			</div>

			<div class="col-md-4">
				<form action="{{ url('candidate/login') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<h2>
						Iniciar sesión
					</h2>

					@if($errors->count() > 0 || Session::has('loginError'))
						<div class="alert alert-danger">
							Combinación de correo electrónico y contraseña incorrecta.
						</div>
					@endif

					<div class="form-group">
						<label for="">Correo electrónico</label>
						<input type="email" name="correoElectronico" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<button class="btn btn-primary">
							Iniciar sesión
						</button>
					</div>

					<ul>
						<li>
							<a href="">
								¿Haz olvidado tu contraseña?
							</a>
						</li>

						<li>
							<a href="{{ url('candidate/account') }}">
								¿No tienes cuenta?, Crea tu cuenta
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
@stop