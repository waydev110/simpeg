@extends('layouts/app')
@section('title','Sistem Informasi Manajemen Kepegawaian')

@section('content')


<!--Header submenu -->
<div class="bg-white p-3 header-secondary header-submenu">
	<div class="container ">
		<div class="row">
			<div class="col">
				<div class="d-flex"></div>
			</div>
			<div class="col col-auto">
				<a class="btn btn-primary mt-4 mt-sm-0" href="/pendidikan">
                <i class="fe fe-arrow-left mr-1 mt-1"></i> Kembali</a>
			</div>
		</div>
	</div>
</div><!--End Header submenu -->

<!-- app-content-->
<div class="container content-area">
	<div class="side-app">
		<!-- page-header -->
		<div class="page-header">
			<ol class="breadcrumb"><!-- breadcrumb -->
				<li class="breadcrumb-item"><a href="/">Beranda</a></li>
				<li class="breadcrumb-item"><a href="/pendidikan">Data Pendidikan</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<div class="card-header bg-transparent border-0">
						<h3 class="card-title mb-0">Detail Data Pendidikan</h3>
					</div>
					<div class="">
						<div class="grid-margin">
							<div class="">
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap  align-items-center">
										<tbody>
											@foreach($pendidikan as $r)
											<tr>
												<td width="200">NIP</td>
												<td>: {{ $r->nip }}</td>
											</tr>
											<tr>
												<td>Nama</td>
												<td>: {{ $r->nama }}</td>
											</tr>
											<tr>
												<td>Program Studi</td>
												<td>: {{ $r->prodi }}</td>
											</tr>
											<tr>
												<td>Jenjang</td>
												<td>: {{ $r->jenjang }}</td>
											</tr>
											<tr>
												<td>Asal Sekolah</td>
												<td>: {{ $r->asal_sekolah }}</td>
											</tr>
											<tr>
												<td>Tahun Lulus</td>
												<td>: {{ $r->tahun_lulus }}</td>
											</tr>
											<tr>
												<td>
													<a class="btn btn-warning mt-4 mt-sm-0" href="/pendidikan/{{ $r->kode_pendidikan }}/edit">
													<i class="fe fe-edit mr-1 mt-1"></i> Ubah Data</a>
												</td>
												<td></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection