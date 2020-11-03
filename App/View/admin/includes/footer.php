
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
              Developed By Ahmed Saad &copy; 2012-2016<br />
              <small>a7mad.sa3d.2014@gmail.com</small><br />
              <cite title="telephone">Tel: +2  01011772100</cite>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

<!-- Foot Scripts -->
<script type="text/javascript">
	
	// Fix sticky Footer
	function setFooterHeight(){
				// sticky Footer
		var footer = document.getElementById( 'footer' );

		var footerHeight = footer.scrollHeight,
			body = document.getElementsByTagName('body')[0];

		body.style.marginBottom = footerHeight + 'px';
	}

	setFooterHeight();

	window.onresize = function(){

		setFooterHeight();
	}


</script>