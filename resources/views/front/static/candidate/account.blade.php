@extends('layouts.front.static')

@section('csrf-token')
	<meta name="csrf_token" content="{{ csrf_token() }}">
@stop

{{-- Page Title --}}
@section('pageTitle')
	Registrate
@stop

{{-- Content --}}
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				
			</div>

			<div class="col-md-6">
				<candidate-registration-form></candidate-registration-form>
			</div>
		</div>
	</div>
@stop