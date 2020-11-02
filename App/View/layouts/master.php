<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=" ">
  <meta name="author" content=" ">
  
	{!! $this->url->htmlLink( 'bootstrap.min.css') !!}
	{!! $this->url->htmlLink( 'bootstrap-theme.min.css') !!}
	{!! $this->url->htmlLink( 'main.css') !!}

  <!-- Custom fonts for this template-->
	{!! $this->url->htmlLink( 'fontawesome-free/css/all.min.css')  !!}
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
	{!! $this->url->htmlLink( 'sb-admin-2.min.css') !!}
  
</head>
<body>
	@include( 'includes.nav' )

	@include( 'admin.includes.notification' )

	<div class="container">
		@yield( 'content' )
	</div>

	@include( 'admin.includes.footer' )

	<!-- Foot Scripts -->
	@yield( 'scripts' )
	
</body>
	{!! $this->url->htmlScript( 'jquery/jquery.min.js' ) !!}
	{!! $this->url->htmlScript( 'jquery-easing/jquery.easing.min.js' ) !!}
	{!! $this->url->htmlScript( 'bootstrap/js/bootstrap.min.js' ) !!}
	{!! $this->url->htmlScript( 'bootstrap/js/bootstrap.bundle.min.js' ) !!}
	{!! $this->url->htmlScript( 'sb-admin-2.min.js' ) !!}
	<script>
		var baseUrl = '{{ $this->url->to('/') }}';
	</script>
</html>

