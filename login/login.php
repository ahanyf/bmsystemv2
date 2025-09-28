<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo.adminkit.io/pages-sign-in.html" />

	<title>Sign In | BM Sys</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	 <link href="_AdminKitPro/css/light.css" rel="stylesheet"> 
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing 
	<link class="_AdminKitPro/js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="_AdminKitPro/js/settings.js"></script> -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<!-- END SETTINGS -->
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<main class="d-flex w-100 h-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							
							<h1 class="h2">Welcome back!</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
ddddddddddddddddddddddddd
							<div class="card-body">
								<div class="m-sm-3">
									
									<?php
									if (isset($_COOKIE["password_incorrect"])) {
										
										    echo "*" . $_COOKIE["password_incorrect"];
										}
									
								
																			
									?>
									
									
									<form method="post" action="login/login_post.php">
										<div class="mb-3">
											<label class="form-label">Mobile</label>
											<input class="form-control form-control-lg" type="text" name="bm_mobile" placeholder="Enter your Mobile Number" required="" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="bm_pass" placeholder="Enter your password" required="" />
											<small>
												<a href="">Forgot password?</a>
											</small>
										</div>
										<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me"
													checked>
												<label class="form-check-label text-small" for="customControlInline">Remember me</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											
											<input type="submit" name="submit" value="Sign in" class="btn btn-lg btn-primary"  />
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Don't have an account? <a href="pages-sign-up.html">Sign up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="_AdminKitPro/js/app.js"></script>

</body>

</html>