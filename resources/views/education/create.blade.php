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
				<li class="breadcrumb-item"><a href="/pendidikan">Data Riwayat Pendidikan</a></li>
				<li class="breadcrumb-item active" aria-current="page">Input Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Input Data Riwayat Pendidikan</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/pendidikan">
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
                                    <label class="form-label">Program Studi</label>
                                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" placeholder="Program Studi" value="{{ old('prodi') }}">
                                    @error('prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenjang</label>
                                    <input type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" placeholder="Jenjang" value="{{ old('jenjang') }}">
                                    @error('jenjang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" placeholder="Asal Sekolah" value="{{ old('asal_sekolah') }}">
                                    @error('asal_sekolah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tahun Lulus</label>
                                    <input type="date" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" placeholder="Tahun Lulus" value="{{ old('tahun_lulus') }}">
                                    @error('tahun_lulus')
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