<!doctype html>
<html lang="{{ config('app.locale') }}" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Hogo– Creative Admin Multipurpose Responsive Bootstrap4 Dashboard HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html admin template, bootstrap admin template premium, premium responsive admin template, admin dashboard template bootstrap, bootstrap simple admin template premium, web admin template, bootstrap admin template, premium admin template html5, best bootstrap admin template, premium admin panel template, admin template"/>

		<!-- Favicon -->
		<link rel="icon" href="/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="/images/brand/favicon.ico" />

		<!-- Title -->
		<title>Print</title>

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

	<style>
		table tr, td {
			border:none!important;
		}
	</style>
	</head>

	<body class="app sidebar-mini rtl bg-white" onload="window.print()">

		<div class="page">
			<div class="page-main">

                <!-- app-content-->
                <div class="container content-area">
                    <div class="side-app">
                        <div class="row">
                            <div class="col-12">
								<div class="">
									<h3 class="card-title mt-8 mb-8 text-center">PERMOHONAN CUTI PEGAWAI DINAS TATA RUANG KOTA BANDUNG</h3>
									<div class="table-responsive">
										<table class="table card-table table-vcenter align-items-center w-90" align="center">
											<tbody>
												@foreach($leaves as $r)
												<tr>
													<td width="200">NIP</td>
													<td>: {{ $r->nip }}</td>
													<td width="200">Tanggal Mulai</td>
													<td>: {{ \Carbon\Carbon::parse($r->tanggal_mulai)->format('d-m-Y') }}</td>
												</tr>
												<tr>
													<td>Nama</td>
													<td>: {{ $r->nama }}</td>
													<td>Tanggal Akhir</td>
													<td>: {{ \Carbon\Carbon::parse($r->tanggal_akhir)->format('d-m-Y') }}</td>
												</tr>
												<tr>
													<td>Jenis Cuti</td>
													<td>: {{ $r->jenis_cuti }}</td>
													<td>Sisa Cuti</td>
													<td>: {{ $r->sisa_cuti }}</td>
												</tr>
												@endforeach
												<tfoot>
												<tr>
													<td class="pt-8">Menyetujui,<br>
														Kepala Dinas<br><br><br><br>
														(....................................................)<br>
														NIP. ................................................
													</td>
													<td></td>
													<td></td>
													<td class="pt-8">Bandung, {{ \Carbon\Carbon::now()->format('d-m-Y') }}<br>
														Pemohon<br><br><br><br>
														({{ $r->nama }})<br>
														NIP. {{$r->nip}}
													</td>
												</tr>
												</tfoot>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
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
	</body>
</html>