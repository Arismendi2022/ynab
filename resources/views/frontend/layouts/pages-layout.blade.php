<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="/frontend/assets/brand/ynab-tree-logo.svg">
	<title>@yield('pageTitle')</title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="/frontend/assets/dist/css/main.css" rel="stylesheet">
	
	<style>
	</style>
	@stack('stylesheets')

</head>

<body>
<div class="layout">
	<div id="ember3" class="content-layout user-logged-in">
		<a href="#start-of-content" class="skip-to-content">Skip to content</a>
		<!---->
		<!---->
		{{-- Main Sidebar Container --}}
		@include('frontend.layouts.partials.sidebar')
		
		{{-- main content --}}
		<div id="start-of-content"></div>
		{{-- Content Header (Page header) --}}
		@yield('content')
	</div>
</div>
<!---->
<!---->
@include('frontend.pages.settings.modal-settings')
<!---->
@include('frontend.pages.settings.modal-new-budget')
<!---->
@include('frontend.pages.settings.modal-calendar')
<!---->

<div class="tooltip-global">
    <span role="tooltip" id="ember18" class="tooltip-content" style="top: calc(108px + 0.5rem); left: 687.817px; opacity: 0; transition: opacity 0.2s;">
      Views Menu
    </span>
	<span role="tooltip" id="ember20" class="tooltip-content" style="top: calc(94.5px - 0.5rem); left: 269.458px; opacity: 0; transition: opacity 0.2s;">
      Add Category Group
    </span>
	<span role="tooltip" id="ember23" class="tooltip-content" style="top: calc(80.5px - 0.5rem); left: 430.833px; opacity: 0; transition: opacity 0.2s;">
      Previous 34 days of assigning and moving money (Rule Three is a thing!)
    </span>
	<span role="tooltip" id="ember24" class="tooltip-content" style="top: calc(96.5px - 0.5rem); left: 1253.1px; opacity: 0; transition: opacity 0.2s;">
      Progress Bars On
    </span>
	<span role="tooltip" id="ember25" class="tooltip-content" style="top: calc(96.5px - 0.5rem); left: 1280.82px; opacity: 0; transition: opacity 0.2s;">
      Progress Bars Off
    </span>
</div>

{{-- footer --}}
@include('frontend.layouts.partials.footer')

<script src="/frontend/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/assets/dist/js/jquery-3.7.1.min.js"></script>

@stack('scripts')
</body>

</html>
