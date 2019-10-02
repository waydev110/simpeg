<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reza" name="author">
		<meta name="keywords" content="SIMPEG DISTARU KOTA BANDUNG"/>

		<!-- Favicon -->
		<link rel="icon" href="/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="/images/brand/favicon.ico" />

		<!-- Title -->
		<title>SIMPEG DISTARU KOTA BANDUNG</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

		<!-- Dashboard css -->
		<link href="/css/style.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Horizontal-menu css -->
		<link href="/plugins/horizontal-menu/horizontalmenu.css" rel="stylesheet">

		<!--Daterangepicker css-->
		<link href="/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

		<!-- Sidebar Accordions css -->
		<link href="/plugins/accordion1/css/easy-responsive-tabs.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!---Font icons css-->
		<link href="/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<link href="/plugins/iconfonts/icons.css" rel="stylesheet" />
		<link  href="/fonts/fonts/font-awesome.min.css" rel="stylesheet">

	</head>
	<body class="bg-account">
        <!-- page -->
		<div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="row">
						<div class="col-lg-4 d-block mx-auto">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-md-12">
									<div class="card">
                                        <div class="card-header">{{ __('Login') }}</div>

										<div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="text-center mb-6">
                                                    <img src="/images/brand/logo.png" class="" alt="">
                                                </div>
                                                <h3>Login</h3>
                                                <p class="text-muted">Sign In to your account</p>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon bg-white"><i class="fa fa-user"></i></span>
                                                    <input type="text" name="name" class="form-control" placeholder="Username">
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $email }}</strong>
														</span>
													@enderror
                                                </div>
                                                <div class="input-group mb-4">
                                                    <span class="input-group-addon bg-white"><i class="fa fa-unlock-alt"></i></span>
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- page-content end -->
		</div>
		<!-- page End-->

		<!-- Jquery js-->
		<script src="/js/vendors/jquery-3.2.1.min.js"></script>

		<!--Bootstrap.min js-->
		<script src="/plugins/bootstrap/popper.min.js"></script>
		<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery Sparkline js-->
		<script src="/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Chart Circle js-->
		<script src="/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating js-->
		<script src="/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Sidebar Accordions js -->
		<script src="/plugins/accordion1/js/easyResponsiveTabs.js"></script>

		<!--Moment js-->
		<script src="/plugins/moment/moment.min.js"></script>

		<!-- Daterangepicker js-->
		<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Custom scroll bar js-->
		<script src="/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom js-->
		<script src="/js/custom.js"></script>

	</body>
</html>
