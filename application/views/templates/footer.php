</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <br>
    <div>
    <footer class="footer mt-5">
    <div style="z-index: -9999!important; position: relative; height: 50px;">
        <div class="text-center text-white p-3" style="background-image: url('https://hni.net/public/front/img/list.jpg'); z-index: -9999!important; position: relative; position: static; bottom:0; width:100%; height:70px;" >
        <p class="small text-white">© Copyright | HNI - Halal Network International 2023<br>Designed By <strong class="text-white">RifkyPutra</strong></p>
        </div>
      </footer>
  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>