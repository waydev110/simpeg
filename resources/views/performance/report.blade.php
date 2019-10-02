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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/laporan/kinerja"><i class="fe fe-arrow-left mr-1 mt-1"></i> Kembali</a>
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
				<li class="breadcrumb-item"><a href="/laporan/kinerja">Laporan</a></li>
				<li class="breadcrumb-item active" aria-current="page">Kinerja</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title mt-8 mb-8 text-center">LAPORAN KINERJA PEGAWAI DINAS TATA RUANG KOTA BANDUNG</h3>
						<div class="table-responsive">
							<table class="table table-striped table-bordered text-nowrap w-100">
								<thead class="thead-light">
									<tr>
										<th class="text-center">No</th>
										<th>NIP</th>
										<th>Nama</th>
										<th class="text-center">Jumlah Presensi</th>
										<th class="text-center">Jumlah Ijin</th>
										<th class="text-center">Kelebihan Jam</th>
										<th>Kesimpulan</th>
										<th class="text-center">Tunjangan Kinerja</th>
									</tr>
								</thead>
								<tbody>
									@foreach($performances as $r)
									<tr>
										<td class="text-center">{{$loop->iteration}}</td>
										<td>{{$r->nip}}</td>
										<td>{{$r->nama}}</td>
										<td class="text-center">{{$r->jumlah_presensi}}</td>
										<td class="text-center">{{$r->jumlah_ijin}}</td>
										<td class="text-center">{{$r->kelebihan_jam_kerja}}</td>
										<td>{{$r->kesimpulan}}</td>
										<td class="text-center">{{$r->tunj_kinerja}}</td>
									</tr>
									@endforeach
								</tbody>
                                <tfoot>
                                    <tr>
                                        <tr>
                                            <td colspan="8">
                                                <a class="btn btn-warning mt-4 mt-sm-0 pull-right" href="/laporan/kinerja/{{ $tahun.'/'.$bulan }}" target="_blank">
                                                <i class="fe fe-edit mr-1 mt-1"></i> Cetak</a>
                                            </td>
                                        </tr>
                                    </tr>
                                </tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection