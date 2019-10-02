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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/pangkat">
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
				<li class="breadcrumb-item"><a href="/pangkat">Data Pangkat</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<div class="card-header bg-transparent border-0">
						<h3 class="card-title mb-0">Detail Data Riwayat Pangkat</h3>
					</div>
					<div class="">
						<div class="grid-margin">
							<div class="">
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap  align-items-center">
										<tbody>
											@foreach($pangkat as $r)
											<tr>
												<td width="200">NIP</td>
												<td>: {{ $r->nip }}</td>
											</tr>
											<tr>
												<td>Nama</td>
												<td>: {{ $r->nama }}</td>
											</tr>
											<tr>
												<td>Golongan</td>
												<td>: {{ $r->golongan }}</td>
											</tr>
											<tr>
												<td>Pangkat</td>
												<td>: {{ $r->pangkat }}</td>
											</tr>
											<tr>
												<td>Masa Kerja Golongan</td>
												<td>: {{ $r->masa_kerja_golongan }}</td>
											</tr>
											<tr>
												<td>TMT Pangkat</td>
												<td>: {{ $r->tmt_pangkat }}</td>
											</tr>
											<tr>
												<td>No SK</td>
												<td>: {{ $r->no_sk }}</td>
											</tr>
											<tr>
												<td>Unit Kerja</td>
												<td>: {{ $r->unit_kerja }}</td>
											</tr>
											<tr>
												<td>
													<a class="btn btn-warning mt-4 mt-sm-0" href="/pangkat/{{ $r->kode_pangkat }}/edit">
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