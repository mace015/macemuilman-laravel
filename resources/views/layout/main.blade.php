<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>MACE MUILMAN</title>
	<meta name="description" content="Mace Muilman">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />		
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,900" type="text/css">
	<link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/core-icons/core_style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/icons/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/scripts.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>
	
	@include('partials.menu')

	@yield('content')

	<footer id="ABdev_main_footer">
		<a href="#" id="back_to_top" title="Back to top"><i class="ci_icon-angle-double-up"></i></a>
			<div id="footer_copyright">
				<div class="container">
					<div class="row">
						<div id="footer_container">
							<div class="row">
								<div class="logo span6">
									<a href="index.html"><img src="images/logo_mace.png" alt="VozX"></a>
								</div>
								<div id="footer_social" class="span6">
									<a href="https://www.facebook.com/mace.muilman" target="_blank">
										<i class="ci_icon-facebook"></i>
									</a>
									<a href="https://twitter.com/Mace95" target="_blank">
										<i class="ci_icon-twitter"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="span12 footer_copyright center_aligned">
							© 2015 MACE MUILMAN
						</div>
					</div>
				</div>
			</div>
	</footer>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/prettify.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
			
</body>
</html>