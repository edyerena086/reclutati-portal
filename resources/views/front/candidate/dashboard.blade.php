@extends('layouts.front.candidate')

{{-- Page Title --}}
@section('pageTitle')
	Dashboard - Candidato
@stop

{{-- Content --}}
@section('content')
	{{-- Search --}}
	<div class="row">
		<div class="col-md-12">
			<search-form></search-form>
		</div>
	</div>
@stop