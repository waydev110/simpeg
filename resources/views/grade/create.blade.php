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
				<li class="breadcrumb-item"><a href="/pangkat">Data Riwayat Pangkat</a></li>
				<li class="breadcrumb-item active" aria-current="page">Input Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Input Data Riwayat Pangkat</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/pangkat">
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
                                    <label class="form-label">Golongan</label>
                                    <input type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" placeholder="Golongan" value="{{ old('golongan') }}">
                                    @error('golongan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Pangkat</label>
                                    <input type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat" placeholder="Pangkat" value="{{ old('pangkat') }}">
                                    @error('pangkat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Masa Kerja Golongan</label>
                                    <input type="text" class="form-control @error('masa_kerja_golongan') is-invalid @enderror" name="masa_kerja_golongan" placeholder="Masa Kerja Golongan" value="{{ old('masa_kerja_golongan') }}">
                                    @error('masa_kerja_golongan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TMT Pangkat</label>
                                    <input type="date" class="form-control @error('tmt_pangkat') is-invalid @enderror" name="tmt_pangkat" placeholder="TMT Pangkat" value="{{ old('tmt_pangkat') }}">
                                    @error('tmt_pangkat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">No SK</label>
                                    <input type="text" class="form-control @error('no_sk') is-invalid @enderror" name="no_sk" placeholder="No SK" value="{{ old('no_sk') }}">
                                    @error('no_sk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Unit Kerja</label>
                                    <input type="text" class="form-control @error('unit_kerja') is-invalid @enderror" name="unit_kerja" placeholder="Unit Kerja" value="{{ old('unit_kerja') }}">
                                    @error('unit_kerja')
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