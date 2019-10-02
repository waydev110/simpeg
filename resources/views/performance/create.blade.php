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
				<a class="btn btn-primary mt-4 mt-sm-0" href="/kinerja">
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
				<li class="breadcrumb-item"><a href="/kinerja">Data Kinerja</a></li>
				<li class="breadcrumb-item active" aria-current="page">Input Data</li>
			</ol><!-- End breadcrumb -->
		</div>
		<!-- End page-header -->
		<div class="row">
			<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Input Data Kinerja</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/kinerja">
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
                                    <label class="form-label">Jumlah Presensi</label>
                                    <input type="number" class="form-control @error('jumlah_presensi') is-invalid @enderror" name="jumlah_presensi" placeholder="Jumlah Presensi" value="{{ old('jumlah_presensi') }}">
                                    @error('jumlah_presensi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jumlah Ijin</label>
                                    <input type="number" class="form-control @error('jumlah_ijin') is-invalid @enderror" name="jumlah_ijin" placeholder="Jumlah Ijin" value="{{ old('jumlah_ijin') }}">
                                    @error('jumlah_ijin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jumlah Absen</label>
                                    <input type="number" class="form-control @error('jumlah_absen') is-invalid @enderror" name="jumlah_absen" placeholder="Jumlah Absen" value="{{ old('jumlah_absen') }}">
                                    @error('jumlah_absen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kelebihan Jam Kerja</label>
                                    <input type="number" class="form-control @error('kelebihan_jam_kerja') is-invalid @enderror" name="kelebihan_jam_kerja" placeholder="Kelebihan Jam Kerja" value="{{ old('kelebihan_jam_kerja') }}">
                                    @error('kelebihan_jam_kerja')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control @error('kesimpulan') is-invalid @enderror" name="kesimpulan" placeholder="Kesimpulan" value="{{ old('kesimpulan') }}">
                                    @error('kesimpulan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tunjangan Kinerja</label>
                                    <input type="text" class="form-control @error('tunj_kinerja') is-invalid @enderror" name="tunj_kinerja" placeholder="Tunjangan Kinerja" value="{{ old('tunj_kinerja') }}">
                                    @error('tunj_kinerja')
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