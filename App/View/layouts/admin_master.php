<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{!! $this->url->htmlLink( 'bootstrap.min.css') !!}
	{!! $this->url->htmlLink( 'bootstrap-theme.min.css') !!}
	{!! $this->url->htmlLink( 'main.css') !!}

  <!-- Custom fonts for this template-->
	{!! $this->url->htmlLink( 'fontawesome-free/css/all.min.css')  !!}
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
	{!! $this->url->htmlLink( 'sb-admin-2.min.css') !!}
  
	@yield( 'styles' )

</head>
	<body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
      @include( 'admin.includes.sidebar' )
      
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          @include( 'admin.includes.nav' )

          @include( 'admin.includes.notification' )

          <div class="container">
            @yield( 'content' )
          </div>
          
        </div>
        
      </div>
      <!-- End Content Wrapper -->
      
    </div>  
    <!-- End Page Wrapper -->

      @include( 'admin.includes.footer' )

      {!! $this->url->htmlScript( 'jquery/jquery.min.js' ) !!}
      {!! $this->url->htmlScript( 'jquery-easing/jquery.easing.min.js' ) !!}
      {!! $this->url->htmlScript( 'bootstrap/js/bootstrap.bundle.min.js' ) !!}
      {!! $this->url->htmlScript( 'sb-admin-2.min.js' ) !!}

      <script>
        var baseUrl = '{{ $this->url->to('/') }}';
      </script>
      <!-- Foot Scripts -->
      @yield( 'scripts' )
	</body>
</html>