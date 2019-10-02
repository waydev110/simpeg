<!doctype html>
<html lang="{{ config('app.locale') }}" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reza" name="author">
		<meta name="keywords" content="SIMPEG DISTARU KOTA BANDUNG">
		<!-- Favicon -->
		<link rel="icon" href="/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="/images/brand/favicon.ico" />

		<!-- Title -->
		<title>@yield('title')</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

		<!-- Dashboard css -->
		<link href="/css/style.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Horizontal-menu css -->
		<link href="/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
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

		<!-- Data table css -->
		<link href="/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />

	</head>

	<body class="app sidebar-mini rtl">

		<!--Global-Loader-->
		<div id="global-loader">
			<img src="/images/icons/loader.svg" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!--app-header-->
				<div class="app-header header hor-topheader d-flex pb-2">
					<div class="container">
						<div class="d-flex">
							<a class="header-brand" href="/">
								<img src="/images/brand/logo.png" class="header-brand-img main-logo" alt="Hogo logo">
								<img src="/images/brand/icon.png" class="header-brand-img icon-logo" alt="Hogo logo">
							</a><!-- logo-->
							<h3 class="pt-4">SIMPEG DISTARU KOTA BANDUNG</h3>
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
							<div class="d-flex order-lg-2 ml-auto header-rightmenu">
								<div class="dropdown header-user">
									<!-- <a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2">Administrator</span></span>
										</span>
										<span class="avatar avatar-md brround"><img src="/images/users/female/33.png" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a> -->
								</div><!-- profile -->
							</div>
						</div>
					</div>
				</div>
				<!--app-header end-->

				<!-- Horizontal-menu -->
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="/"><i class="typcn typcn-device-desktop hor-icon"></i> Beranda </a>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-th-large-outline hor-icon"></i> Input Data <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="/pegawai">Input Data/Update Pegawai</a></li>
										<li aria-haspopup="true"><a href="/pendidikan">Input Data Pendidikan</a></li>
										<li aria-haspopup="true"><a href="/pangkat">Input Data Riwayat Pangkat</a></li>
										<li aria-haspopup="true"><a href="/cuti">Input Data Cuti</a></li>
										<li aria-haspopup="true"><a href="/kinerja">Input Data Kinerja</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-chart-pie-outline"></i> Laporan <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="/laporan/kinerja">Laporan Kinerja</a></li>
										<li aria-haspopup="true"><a href="/laporan/cuti">Permohonan Cuti</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
									<i class="mdi mdi-logout-variant hor-icon"></i> Exit </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>
				<!-- Horizontal-menu end -->
					@yield('content')


					<!--footer-->
					<!-- <footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-lg-12 col-sm-12   text-center">
									Copyright © 2019 <a href="#">Hogo</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer> -->
					<!-- End Footer-->

				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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

		<!--Moment js-->
		<script src="/plugins/moment/moment.min.js"></script>

		<!-- Daterangepicker js-->
		<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Horizontal-menu js -->
		<script src="/plugins/horizontal-menu/horizontalmenu.js"></script>

		<!--Time Counter js-->
		<script src="/plugins/counters/jquery.missofis-countdown.js"></script>
		<script src="/plugins/counters/counter.js"></script>

		<!-- Sidebar Accordions js -->
		<script src="/plugins/accordion1/js/easyResponsiveTabs.js"></script>

		<!-- Custom scroll bar js-->
		<script src="/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Rightsidebar js -->
		<script src="/plugins/sidebar/sidebar.js"></script>

		<!-- Data tables js-->
		<script src="/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="/plugins/datatable/dataTables.responsive.min.js"></script>


		<!-- Custom js-->
		<script src="/js/custom.js"></script>

		@yield('jquery')
	</body>
</html>