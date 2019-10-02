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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/pegawai">
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
				<li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<div class="card-header bg-transparent border-0">
						<h3 class="card-title mb-0">Detail Data Pegawai</h3>
					</div>
					<div class="">
						<div class="grid-margin">
							<div class="">
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap  align-items-center">
										<tbody>
											<tr>
												<td width="200">NIK</td>
												<td>: {{ $pegawai->nik }}</td>
											</tr>
											<tr>
												<td>NIP</td>
												<td>: {{ $pegawai->nip }}</td>
											</tr>
											<tr>
												<td>Nama</td>
												<td>: {{ $pegawai->nama }}</td>
											</tr>
											<tr>
												<td>Tempat, Tanggal Lahir</td>
												<td>: {{ $pegawai->tempat_lahir.', '.$pegawai->tanggal_lahir }}</td>
											</tr>
											<tr>
												<td>Jenis Kelamin</td>
												<td>: {{ $pegawai->jenis_kelamin }}</td>
											</tr>
											<tr>
												<td>Agama</td>
												<td>: {{ $pegawai->agama }}</td>
											</tr>
											<tr>
												<td>Golongan Darah</td>
												<td>: {{ $pegawai->golongan_darah }}</td>
											</tr>
											<tr>
												<td>Status</td>
												<td>: {{ $pegawai->status }}</td>
											</tr>
											<tr>
												<td>Jumlah Anak</td>
												<td>: {{ $pegawai->jumlah_anak }}</td>
											</tr>
											<tr>
												<td>Golongan</td>
												<td>: {{ $pegawai->golongan }}</td>
											</tr>
											<tr>
												<td>Jabatan</td>
												<td>: {{ $pegawai->jabatan }}</td>
											</tr>
											<tr>
												<td>Masa Kerja</td>
												<td>: {{ $pegawai->masa_kerja }}</td>
											</tr>
											<tr>
												<td>TMT CPNS</td>
												<td>: {{ $pegawai->tmt_cpns }}</td>
											</tr>
											<tr>
												<td>TMT PNS</td>
												<td>: {{ $pegawai->tmt_pns }}</td>
											</tr>
											<tr>
												<td>Alamat</td>
												<td>: {{ $pegawai->alamat }}</td>
											</tr>
											<tr>
												<td>No Telepon</td>
												<td>: {{ $pegawai->no_telepon }}</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>: {{ $pegawai->e_mail }}</td>
											</tr>
											<tr>
												<td>
													<a class="btn btn-warning mt-4 mt-sm-0" href="/pegawai/{{ $pegawai->nik }}/edit">
													<i class="fe fe-edit mr-1 mt-1"></i> Ubah Data</a>
												</td>
												<td></td>
											</tr>
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