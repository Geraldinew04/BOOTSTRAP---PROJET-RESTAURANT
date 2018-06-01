

<div class="footer">

	<!-- Footer -->
	<footer class="page-footer font-small cyan darken-3 mt-4">

	  	<div class="row">
	  		<div class="col-sm-12">
	  
	  			<div class="footer-copyright text-center py-3">
		  			<img src="img/logo1.jpg" alt="frida" style="max-width: 50px; width: 100%; height: 50px;">
		  			<p> © 2018 Copyright: Géraldine Winand</p>
	  			</div>
	  		</div>
		</div>
	</footer>
</div>
<script type="text/javascript">
	
	if ('serviceWorker' in navigator) {
	  window.addEventListener('load', function() {
	    navigator.serviceWorker.register('/BOOTSTRAP---PROJET-RESTAURANT/sw.js').then(function(registration) {
	      // Registration was successful
	      console.log('ServiceWorker registration successful with scope: ', registration.scope);
	    }, function(err) {
	      // registration failed :(
	      console.log('ServiceWorker registration failed: ', err);
	    });
	  });
	}

</script>

</body>
</html>