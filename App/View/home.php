@extends( 'layouts.master' )

@section( 'scripts' )

	<script>
		console.log( 'App Working Great!' );
	</script>
		
@stop

@section( 'content' )



  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="text-center h3 mb-4 text-gray-800">Home Page</h1>

            <div class="panel panel-default">
              <div class="panel-body text-center">
                <h3>Welcome To Simple FrameWork</h3>
                <h5>Login As Admin:</h5>
                <div class="key-value">
                  <span class="key">Email</span>
                  <span class="value">user@gmail.com</span>
                </div>
                <div class="key-value">
                  <span class="key">password</span>
                  <span class="value">123456</span>
                </div>

                <h5>Login As User:</h5>
                <div class="key-value">
                  <span class="key">Email</span>
                  <span class="value">user2@test.com</span>
                </div>
                <div class="key-value">
                  <span class="key">password</span>
                  <span class="value">123456</span>
                </div>
              </div>
            </div>
          
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

@stop