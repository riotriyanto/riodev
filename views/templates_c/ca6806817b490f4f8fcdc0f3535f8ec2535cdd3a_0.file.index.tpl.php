<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 14:19:44
  from '/var/www/html/rto_fm/views/template/login/login1/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e051094f037_82734302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca6806817b490f4f8fcdc0f3535f8ec2535cdd3a' => 
    array (
      0 => '/var/www/html/rto_fm/views/template/login/login1/index.tpl',
      1 => 1581458874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e051094f037_82734302 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['nama_singkat_app'];?>
</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
views/assets/aplikasi/<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['gambar'];?>
"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
views/assets/aplikasi/<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['gambar'];?>
" alt="IMG">
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
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/vendor/tilt/tilt.jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(e) {
		      e.preventDefault();
		      var values = $(this).serialize();
		      $.ajax({
		      	url : '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
',
		      	type : 'post',
		      	dataType : 'json',
		      	data : values,
		      	success : function(data){
		      		if (data.status) {
		      			$("#res").html('<div class="alert alert-success animated flash">'+data.pesan+'</div>');
		      			window.setTimeout(function () {
		                    location.href = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
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
	<?php echo '</script'; ?>
>

</body>
</html><?php }
}
