</div><!-- content end -->
<div class='text-center' id='footer'>
	<a href='mailto:misterjaaay@gmail.com'>&copy; <?php echo date('Y');?> jay </a>
</div>
<script
	src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

<script
	src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

<script>
	$(document).ready(function(){
		 $("#loginBtn").click(function(){
		        $("#myModal").modal();
		    });
		 $("#registerBtn").click(function(){
		        $("#regModal").modal();
		    });
		 $("#logoutBtn").click(function(){
		
			 alert("11");
				exit();
		    });
	});
 </script>
</div>
</body>
</html>
