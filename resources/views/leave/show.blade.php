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
				<a class="btn btn-success mt-4 mt-sm-0" href="#"><i class="fe fe-plus mr-1 mt-1"></i> Tambah</a>
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
				<li class="breadcrumb-item"><a href="#">Input Data</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow">
					<div class="card-header bg-transparent border-0">
						<h3 class="card-title mb-0">Data Pegawai</h3>
					</div>
					<div class="">
						<div class="grid-margin">
							<div class="">
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap  align-items-center">
										<thead class="thead-light">
											<tr>
												<th>NIK</th>
												<th>NIP</th>
												<th>Nama</th>
												<th>Golongan</th>
												<th>Jabatan</th>
												<th>Masa Kerja</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($employee as $r)
											<tr>
												<td>{{$r->nik}}</td>
												<td>{{$r->nip}}</td>
												<td>{{$r->nama}}</td>
												<td>{{$r->golongan}}</td>
												<td>{{$r->jabatan}}</td>
												<td>{{$r->masa_kerja}}</td>
												<td class="text-nowrap">
												<a href="/employees/1" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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