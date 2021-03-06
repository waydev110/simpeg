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
				<a class="btn btn-success mt-4 mt-sm-0" href="/pendidikan/create"><i class="fe fe-plus mr-1 mt-1"></i> Tambah</a>
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
				<li class="breadcrumb-item"><a href="/pendidikan">Data Riwayat Pendidikan</a></li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
			@if(session('status'))
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					{{session('status')}}
				</div>
			@endif
				<div class="card">
					<div class="card-header">
						<div class="card-title">Data Riwayat Pendidikan</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="data-table" class="table card-table table-vcenter text-nowrap  align-items-center">
								<thead class="thead-light">
									<tr>
										<th>No</th>
										<th>NIP</th>
										<th>Nama</th>
										<th>Prodi</th>
										<th>Jenjang</th>
										<th>Asal Sekolah</th>
										<th>Tahun Lulus</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($educations as $r)
									<tr>
										<td></td>
										<td>{{ $r->nip }}</td>
										<td>{{ $r->nama }}</td>
										<td>{{ $r->prodi }}</td>
										<td>{{ $r->jenjang }}</td>
										<td>{{ $r->asal_sekolah }}</td>
										<td>{{ $r->tahun_lulus }}</td>
										<td class="text-nowrap">
										<a href="/pendidikan/{{ $r->kode_pendidikan }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
										<a href="/pendidikan/{{ $r->kode_pendidikan }}/edit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
										<form action="/pendidikan/{{ $r->kode_pendidikan }}" method="post" class="d-inline">
										@method('delete')
										@csrf
										<button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
										</form>
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
@endsection

@section('jquery')
<script>
	var t = $('#data-table').DataTable({
        "columnDefs": [
			{"searchable": false, "orderable": false, "targets": [0, -1] },
			{"className": "text-center", "targets": [0, 4, -1, -2] }
		],
        "order": [[ 1, 'asc' ]]
    } );

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
</script>
@endsection