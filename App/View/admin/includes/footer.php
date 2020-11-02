<!-- Footer -->
<footer id="footer" class="hidden-print text-center sticky-footer bg-dark">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2020</span>
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