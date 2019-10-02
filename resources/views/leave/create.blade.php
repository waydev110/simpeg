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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/cuti">
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
				<li class="breadcrumb-item"><a href="/cuti">Data Permohonan Cuti</a></li>
				<li class="breadcrumb-item active" aria-current="page">Input Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Input Data Permohonan Cuti</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/cuti">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">NIP</label>
                                    <select name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror">
                                        <option value="">-- Pilih NIP --</option>
                                        @foreach($employees as $employee)
                                        <option value="{{$employee->nik}}" {{ (old('nik') == $employee->nik)? 'Selected' : '' }}>{{$employee->nip}}</option>
                                        @endforeach
                                    </select>
                                    @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Cuti</label>
                                    <input type="text" class="form-control @error('jenis_cuti') is-invalid @enderror" name="jenis_cuti" placeholder="Jenis Cuti" value="{{ old('jenis_cuti') }}">
                                    @error('jenis_cuti')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" placeholder="Tanggal Mulai" value="{{ old('tanggal_mulai') }}">
                                    @error('tanggal_mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Akhir</label>
                                    <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror" name="tanggal_akhir" placeholder="Tanggal Akhir" value="{{ old('tanggal_akhir') }}">
                                    @error('tanggal_akhir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Sisa Cuti</label>
                                    <input type="number" class="form-control @error('sisa_cuti') is-invalid @enderror" name="sisa_cuti" placeholder="Sisa Cuti" value="{{ old('sisa_cuti') }}">
                                    @error('sisa_cuti')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary pull-right">Simpan</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
@endsection