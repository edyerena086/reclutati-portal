@extends('layouts.front.candidate')

{{-- Page Title --}}
@section('pageTitle')
	Mi Curriculum
@stop

{{-- Content --}}
@section('content')
	{{-- Search --}}
	<div class="row">
		<div class="col-md-9">
			<cv-general-form></cv-general-form>

			<cv-job-histories></cv-job-histories>
		</div>

		<div class="col-md-3">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">
						Sección de CV
					</h5>
				</div>

				<div class="panel-body">
					<ul>
						<li>
							<a href="">
								Información general
							</a>
						</li>

						<li>
							<a href="">
								Experiencia laboral
							</a>
						</li>

						<li>
							<a href="">
								Eduación
							</a>
						</li>

						<li>
							<a href="">
								Hábilidades
							</a>
						</li>

						<li>
							<a href="">
								Información de contacto
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop