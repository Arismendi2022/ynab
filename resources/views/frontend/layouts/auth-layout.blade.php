<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('pageTitle')</title>
  @stack('stylesheets')
</head>
<body>

<h1>Auth Page</h1>

{{-- Main Sidebar Container --}}
<div class="main-sidebar">
  @include('frontend.layouts.partials.sidebar')
</div>
{{-- main content --}}
<div class="content-wrapper">
  {{-- Content Header (Page header) --}}
  @yield('content')
</div>

{{-- footer --}}
@include('frontend.layouts.partials.footer')

@stack('scripts')
</body>
</html>
