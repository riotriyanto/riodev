<!DOCTYPE html>
<html lang="en">
<head>
	<title>{$dataaplikasi['nama_singkat_app']}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$theme_path}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$theme_path}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$theme_path}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{$theme_path}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$theme_path}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$theme_path}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{$theme_path}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="login">
					<div id="res"></div>
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" id="test" placeholder="Username">
						<!-- <input class="input100" type="text" name="" id="test" value="tes"> -->
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btnLogin">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{$theme_path}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{$theme_path}/vendor/bootstrap/js/popper.js"></script>
	<script src="{$theme_path}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{$theme_path}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{$theme_path}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{$theme_path}/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(e) {
		      e.preventDefault();
		      var values = $(this).serialize();
		      $.ajax({
		      	url : '{$url}',
		      	type : 'post',
		      	dataType : 'json',
		      	data : values,
		      	success : function(data){
		      		if (data.status) {
		      			$("#res").html('<div class="alert alert-success animated flash">'+data.pesan+'</div>');
		      			window.setTimeout(function () {
		                    location.href = "{$url}";
		                }, 1000);
		      		}else{
		      			$('#res').html('<div class="alert alert-danger animated flash">'+data.pesan+'</div>');
		      		}
		      	},
		      	error : function(err){
		      		console.log("error")
		      		// $('#res').html('<div class="alert alert-danger animated flash">'+data.msg+'</div>');
		      	}
		      })
		    })
		})
	</script>

</body>
</html>