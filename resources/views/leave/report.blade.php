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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/laporan/cuti">
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
				<li class="breadcrumb-item"><a href="/laporan/cuti">Laporan</a></li>
				<li class="breadcrumb-item active" aria-current="page">Permohonan Cuti</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<div class="">
						<div class="grid-margin">
							<div class="" id="divToPrint">
						        <h3 class="card-title mt-8 mb-8 text-center">PERMOHONAN CUTI PEGAWAI DINAS TATA RUANG KOTA BANDUNG</h3>
								<div class="table-responsive">
									<table class="table card-table table-vcenter align-items-center">
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
											<tr class="pt-4">
												<td>Menyetujui,<br>
                                                    Kepala Dinas<br><br><br><br>
                                                    (....................................................)<br>
                                                    NIP. ................................................
                                                </td>
												<td></td>
												<td></td>
												<td>Bandung, {{ \Carbon\Carbon::now()->format('d-m-Y') }}<br>
                                                    Pemohon<br><br><br><br>
                                                    ({{ $r->nama }})<br>
                                                    NIP. {{$r->nip}}
                                                </td>
											</tr>
											<tr>
												<td colspan="4">
													<a class="btn btn-warning mt-4 mt-sm-0 pull-right" href="/laporan/cuti/{{ $r->kode_cuti }}" target="_blank">
													<i class="fe fe-edit mr-1 mt-1"></i> Cetak</a>
												</td>
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