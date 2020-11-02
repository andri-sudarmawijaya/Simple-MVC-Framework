<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!! $this->url->htmlLink( 'bootstrap.min.css') !!}
	{!! $this->url->htmlLink( 'bootstrap-theme.min.css') !!}
	{!! $this->url->htmlLink( 'main.css') !!}

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

