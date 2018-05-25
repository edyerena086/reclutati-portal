<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <meta name="_hash" content="{{ encrypt(Auth::user()->id) }}">

	{{-- Page Title --}}
	<title>
		@yield('pageTitle') - {{ ENV('APP_NAME') }}
	</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('/') }}/limitless/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{ url('/') }}/limitless/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="{{ url('/') }}/limitless/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="{{ url('/') }}/limitless/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="{{ url('/') }}/limitless/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/core/app.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/limitless/assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

	{{-- CSS Page --}}
	@section('pageCSS')
	@show

</head>

<body>

	@include('layouts.front.candidate.top-navbar')


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			{{-- sidebar menu --}}
			@include('layouts.front.candidate.sidebar')


			<!-- Main content -->
			<div class="content-wrapper" id="app">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-user position-left"></i> <span class="text-semibold">Dashboard</span> - @yield('bodyPageTitle')</h4>
						</div>

						{{--<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>--}}
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{ url('candidate/dashboard') }}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
							{{--<li class="active">Dashboard</li>--}}
							@section('breadcrumbs')
							@show
						</ul>

						{{--<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>--}}
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					@yield('content')					
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	{{-- PageJS --}}
	@section('pageJS')
	@show
	<script type="text/javascript" src="{{ url('/') }}/js/candidate.js"></script>
</body>
</html>