<section class="footer bg-light border" id="footer">
    <div class="container">
    	<div class="row">
    		<div class="col-md-8">
    			<p>
        
        		<a href="/home" class="btn btn-secondary btn-sm ml-1 mb-2 mt-3">Home</a>
                <a href="/portfolio" class="btn btn-secondary btn-sm ml-1 mb-2 mt-3">Portfólio</a>
                <a href="/estilos" class="btn btn-secondary btn-sm ml-1 mb-2 mt-3">Estilos</a>
                <a href="/login" class="btn btn-secondary btn-sm ml-1 mb-2 mt-3">Admin</a>

            	</p>
    		</div>

    		<div class="col-md-4 d-flex justify-content-end mt-1">
            	<!-- <p class="font-italic text-center text-dark">By: Soczek</p> -->
            		<a href="/home" class="navbar-brand">
           			<img src="../img/polska.png" class="img-fluid" width="60" >
           			</a>
         	</div>
         </div>
     </div>
</section>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src='js/jquery.elevatezoom.js'></script>
<script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>
</body>
</html>